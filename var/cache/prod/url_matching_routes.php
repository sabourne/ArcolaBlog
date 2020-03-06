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
        '/post/relevant' => [[['_route' => 'relevant_post', '_controller' => 'App\\Controller\\PostController::relevant'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/post/(?'
                    .'|update/([^/]++)(*:31)'
                    .'|delete/([^/]++)(*:53)'
                    .'|([^/]++)(*:68)'
                    .'|tag/([^/]++)(*:87)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        31 => [[['_route' => 'update_post', '_controller' => 'App\\Controller\\PostController::update'], ['id'], null, null, false, true, null]],
        53 => [[['_route' => 'app_post_delete', '_controller' => 'App\\Controller\\PostController::delete'], ['id'], null, null, false, true, null]],
        68 => [[['_route' => 'post_post', '_controller' => 'App\\Controller\\PostController::show'], ['id'], null, null, false, true, null]],
        87 => [
            [['_route' => 'relevant', '_controller' => 'App\\Controller\\PostController::relevant'], ['tag'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
