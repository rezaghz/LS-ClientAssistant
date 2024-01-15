<?php

namespace Ls\ClientAssistant\Controllers;

use Ls\ClientAssistant\Core\Router\JsonResponse;
use Ls\ClientAssistant\Core\Router\WebResponse;
use Ls\ClientAssistant\Helpers\Config;
use Ls\ClientAssistant\Utilities\Modules\Hook;
use Illuminate\Http\Request;
use Ls\ClientAssistant\Utilities\Tools\Token;

class HookController
{
    private string $hookCookieName;
    public function __construct()
    {
        $this->hookCookieName = Config::get('endpoints.hook-cookie-name');
    }
    public function landing(Request $request, $slug)
    {
        $hook = Hook::get($slug)['result'][0][0];
        $user = current_user();

        if (!$hook) {
            abort(404, 'صفحه مورد نظر پیدا نشد');
        }

        $showLoginForm = false;
        if (!empty($user)) {
            Token::token($hook['id'], $this->hookCookieName)->remove();
        } else {
            if ($hook['fields']['conditions']['required_login']) {
                Token::token($hook['id'], $this->hookCookieName)->weeks()->save();
                $showLoginForm = true;
            }
        }

        $brandName = setting('brand_name_fa');
        $logoUrl = setting('logo_url');
        Hook::signal($hook['id'], 'view', 1);

        WebResponse::view('sdk.hook.landing.index', compact('hook', 'user', 'brandName', 'logoUrl', 'showLoginForm'));
    }

    public function download(Request $request, $slug)
    {
        $hook = Hook::get($slug)['result'][0][0];
        if (!$hook) {
            return JsonResponse::notFound('هوک پیدا نشد');
        }

        $user = current_user();
        if (empty($user) && $hook['fields']['conditions']['required_login']) {
            Token::token($hook['id'], $this->hookCookieName)->weeks()->save();

            return JsonResponse::badRequest(sprintf("برای استفاده از‌ %s ابتدا باید در حساب کاربری خود لاگین کنید", $hook['title_fa']), [
                'backUrl' => route('auth.index')
            ]);
        }

        $data = [
            'full_name' => $request->get('fullname'),
            'mobile' => $request->get('mobile'),
            'email' => $request->get('email'),
        ];

        $response = Hook::sendFile($hook['id'], $data);

        if (!empty($response['errors'])) {
            return JsonResponse::badRequest($response['errors'][0]['message']);
        }

        $hookDownloadType = $hook['fields']['conditions']['hook_download_type'];
        if ($hookDownloadType == 'sendable') {
            return JsonResponse::success('لینک دانلود فایل برای شما ارسال شد');
        }

        $shortLink = $response['result']['short_link'];
        $redirectTime = (int)setting('hook_showable_redirection_time');
        $subClass = 'ls-client-hook-';

        if($request->get('from') == 'shortcode'){
            return JsonResponse::ajaxView('sdk.hook.shortcode.download', compact('shortLink', 'redirectTime', 'hook', 'subClass', 'user'));
        }

        return JsonResponse::ajaxView('sdk.hook.landing._partials.download', compact('shortLink', 'redirectTime', 'hook', 'subClass', 'user'));
    }

    public function signal(Request $request, $slug)
    {
        $type = $request->get('type');
        if (!in_array($type, ['view'])) {
            return JsonResponse::badRequest('type نامعتبر');
        }

        $hook = Hook::get($slug)['result'][0][0];

        Hook::signal($hook['id'], 'view', 1);

        return JsonResponse::success(sprintf("%s ثبت شد", $type));
    }
}