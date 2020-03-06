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
                .'|/post/(?'
                    .'|tag/(\\d+)(*:25)'
                    .'|update/([^/]++)(*:47)'
                    .'|delete/([^/]++)(*:69)'
                    .'|([^/]++)(*:84)'
                    .'|tag/([^/]++)(*:103)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        25 => [[['_route' => 'relevant_post', '_controller' => 'App\\Controller\\PostController::relevant'], ['tag'], null, null, false, true, null]],
        47 => [[['_route' => 'update_post', '_controller' => 'App\\Controller\\PostController::update'], ['id'], null, null, false, true, null]],
        69 => [[['_route' => 'app_post_delete', '_controller' => 'App\\Controller\\PostController::delete'], ['id'], null, null, false, true, null]],
        84 => [[['_route' => 'post_post', '_controller' => 'App\\Controller\\PostController::show'], ['id'], null, null, false, true, null]],
        103 => [
            [['_route' => 'relevant', '_controller' => 'App\\Controller\\PostController::relevant'], ['tag'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
