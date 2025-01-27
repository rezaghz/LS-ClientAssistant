<?php

namespace Ls\ClientAssistant\Controllers;

use Ls\ClientAssistant\Core\Router\WebResponse;
use Ls\ClientAssistant\Utilities\Modules\V3\Gateway;
use Ls\ClientAssistant\Utilities\Modules\V3\LMSProduct;
use Ls\ClientAssistant\Utilities\Modules\V3\ModuleFilter;

class MiniLandingController
{
    public function index(string $slug)
    {
        $filter = ModuleFilter::new()->includes('productGifts', 'mainTeacherFaculty', 'chapters', 'chapters.publishedItems');
        $product = LMSProduct::get($slug, $filter)['result'] ?? null;
        if (empty($product)) {
            abort(404, 'محصول پیدا نشد');
        }
        $defaultGateway = Gateway::getDefault();
        $brandNameEn = setting('brand_name_en');
        $currentUser = current_user();
        $introVideo = $product['meta']['intro_video']['url'] ?? $product['meta']['demo_video_urls'][0] ?? '';
        $productDuration = product_duration_to_string($product['meta']['attachment_duration_sum']['hours']);
        $hasCampaign = !empty($product['campaign_data']);

        return WebResponse::view(
            'sdk.pages.mini-landing',
            compact(
                'product',
                'hasCampaign',
                'brandNameEn',
                'currentUser',
                'introVideo',
                'productDuration',
                'defaultGateway',
            )
        );
    }
}