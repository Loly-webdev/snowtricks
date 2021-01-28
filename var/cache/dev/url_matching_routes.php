<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'login', '_controller' => 'App\\Controller\\Security\\AuthenticatorController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\Security\\AuthenticatorController::logout'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'register', '_controller' => 'App\\Controller\\Security\\RegistrationController::register'], null, null, null, false, false, null]],
        '/mot-de-passe-oublié' => [[['_route' => 'forgotten_password', '_controller' => 'App\\Controller\\Security\\ResetPasswordController::forgottenPassword'], null, null, null, false, false, null]],
        '/profil' => [[['_route' => 'user', '_controller' => 'App\\Controller\\Security\\UserController::index'], null, null, null, false, false, null]],
        '/profile-edit' => [[['_route' => 'profile', '_controller' => 'App\\Controller\\Security\\UserController::edit'], null, null, null, false, false, null]],
        '/update_password' => [[['_route' => 'update_password', '_controller' => 'App\\Controller\\Security\\UserController::updatePassword'], null, null, null, false, false, null]],
        '/tricks' => [[['_route' => 'tricks', '_controller' => 'App\\Controller\\TrickController::index'], null, ['GET' => 0], null, false, false, null]],
        '/trick/new' => [[['_route' => 'trick_new', '_controller' => 'App\\Controller\\TrickController::create'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/activation/([^/]++)(*:189)'
                .'|/réinitialisation/([^/]++)/([^/]++)(*:233)'
                .'|/trick/([^/]++)(?'
                    .'|/(?'
                        .'|edit(*:267)'
                        .'|delete(*:281)'
                    .')'
                    .'|(?:/(\\d+))?(*:301)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        189 => [[['_route' => 'activation', '_controller' => 'App\\Controller\\Security\\RegistrationController::activation'], ['token'], null, null, false, true, null]],
        233 => [[['_route' => 'reset_password', '_controller' => 'App\\Controller\\Security\\ResetPasswordController::resetPassword'], ['id', 'token'], null, null, false, true, null]],
        267 => [[['_route' => 'trick_edit', '_controller' => 'App\\Controller\\TrickController::edit'], ['slug'], null, null, false, false, null]],
        281 => [[['_route' => 'trick_delete', '_controller' => 'App\\Controller\\TrickController::delete'], ['slug'], null, null, false, false, null]],
        301 => [
            [['_route' => 'trick_show', 'page' => '1', '_controller' => 'App\\Controller\\TrickController::show'], ['slug', 'page'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
