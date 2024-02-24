<?php

namespace Ls\ClientAssistant\Controllers;

use Ls\ClientAssistant\Core\Router\WebResponse;
use Ls\ClientAssistant\Utilities\Modules\V3\LMSProduct;

class MiniLandingController
{
    public function index(string $slug)
    {
        $product = LMSProduct::get($slug)['result'] ?? null;
        if (empty($product)) {
            abort(404, 'محصول پیدا نشد');
        }
        $brandNameEn = setting('brand_name_en');
        $currentUser = current_user();
        $introVideo = $product['meta']['intro_video']['url'] ?? '';

        return WebResponse::view(
            'sdk.mini-landing.index',
            compact('product', 'brandNameEn', 'currentUser', 'introVideo')
        );
    }
}