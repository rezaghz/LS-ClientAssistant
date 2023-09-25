<?php

return [
    'base' => $GLOBALS['coreUrl'] ?? 'http://127.0.0.1:8080/api/',
    'app_url' => $GLOBALS['appUrl'] ?? 'http://localhost:2000',
    'required_settings' => [
        'username_label',
        'user_login_fields',
        'registration_fields',
        'required_registration_fields',
        'verification_fields',
        'can_user_logged_in_with_password',
        'brand_name_fa',
        'brand_name_en',
        'site_title',
        'site_description',
        'social_links',
        'client_cache_driver',
        'client_cache_request_setting',
        'client_cache_request_cms',
        'client_cache_request_lms',
        'client_cache_request_hlms',
        'client_cache_request_shop',
        'client_cache_revalidation_time',
        'client_cache_active_for_logged_in_user',
        'client_static_cache_driver',
        'client_static_cache_index_page',
        'client_static_cache_blog_page',
        'client_static_cache_single_blog',
        'client_static_cache_single_product',
        'client_static_cache_single_course',
        'client_static_cache_single_topic',
        'client_static_cache_list_shop_products',
        'client_static_cache_list_topics',
        'client_static_cache_list_courses',
        'client_static_cache_list_communities',
        'client_static_cache_revalidation_time',
        'user_have_access_to_panel',
        '_env_video_streaming_api_key',
        '_env_google_recaptcha_v3_site_key',
        'google_recaptcha_v3_status',
        'client_robot_txt'
    ],
];