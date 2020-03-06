<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'post_list', '_controller' => 'App\\Controller\\PostController::index'], null, null, null, false, false, null]],
        '/post/new' => [[['_route' => 'new_post', '_controller' => 'App\\Controller\\PostController::new'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/post/(?'
                    .'|update/([^/]++)(*:66)'
                    .'|delete/([^/]++)(*:88)'
                    .'|relevant/([^/]++)(*:112)'
                    .'|([^/]++)(*:128)'
                    .'|tag/([^/]++)(*:148)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        66 => [[['_route' => 'update_post', '_controller' => 'App\\Controller\\PostController::update'], ['id'], null, null, false, true, null]],
        88 => [[['_route' => 'app_post_delete', '_controller' => 'App\\Controller\\PostController::delete'], ['id'], null, null, false, true, null]],
        112 => [[['_route' => 'relevant_post', '_controller' => 'App\\Controller\\PostController::relevant'], ['tag'], null, null, false, true, null]],
        128 => [[['_route' => 'post_post', '_controller' => 'App\\Controller\\PostController::show'], ['id'], null, null, false, true, null]],
        148 => [
            [['_route' => 'relevant', '_controller' => 'App\\Controller\\PostController::relevant'], ['tag'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
