<?php

namespace Ls\ClientAssistant\Controllers;

use Ls\ClientAssistant\Core\Router\WebResponse;
use Ls\ClientAssistant\Helpers\Config;
use Ls\ClientAssistant\Utilities\Modules\Payment;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class PaymentController
{
    public function __construct()
    {
        if (! Config::get('endpoints.enable_cart_payment')) {
            abort(404);
        }
    }

    public function requestLink(Request $request, $cart)
    {
        $res = Payment::requestLink($cart, site_url('payment/###payment_id###'));

        if (! $res->get('success')) {
            $_SESSION['error_messages'] = (array) $res->get('message');

            return WebResponse::redirect('cart/checkout');
        }

        return new RedirectResponse($res['data']['link'], 302, []);
    }

    public function callback(int $paymentId, Request $request)
    {
        if ((int) $request->status === 0) {
            return WebResponse::redirect("payment/failed/$paymentId");
        }

        return WebResponse::redirect("payment/succeed/$paymentId");
    }

    public function successForm(int $paymentId, Request $request)
    {
        $payment = Payment::check($paymentId, Payment::PAGE_SUCCESS);

        if (! $payment['success']) {
            return WebResponse::redirect();
        }

        $view = WebResponse::viewExist('salesflow.payment.payment-success') ?
            'salesflow.payment.payment-success' :
            'sdk.salesflow.payment.payment-success';

        return WebResponse::view($view, ['message' => $request->get('message')]);
    }

    public function failureForm(int $paymentId, Request $request)
    {
        $payment = Payment::check($paymentId, Payment::PAGE_FAILED);

        if (! $payment['success']) {
            return WebResponse::redirect();
        }

        $view = WebResponse::viewExist('salesflow.payment.payment-failed') ?
            'salesflow.payment.payment-failed' :
            'sdk.salesflow.payment.payment-failed';

        return WebResponse::view($view, ['cartId' => $payment['data']['cart_id']]);
    }
}