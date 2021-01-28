<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\MainController::index'], [], [['text', '/']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\Security\\AuthenticatorController::login'], [], [['text', '/connexion']], [], []],
    'logout' => [[], ['_controller' => 'App\\Controller\\Security\\AuthenticatorController::logout'], [], [['text', '/deconnexion']], [], []],
    'register' => [[], ['_controller' => 'App\\Controller\\Security\\RegistrationController::register'], [], [['text', '/inscription']], [], []],
    'activation' => [['token'], ['_controller' => 'App\\Controller\\Security\\RegistrationController::activation'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/activation']], [], []],
    'forgotten_password' => [[], ['_controller' => 'App\\Controller\\Security\\ResetPasswordController::forgottenPassword'], [], [['text', '/mot-de-passe-oublié']], [], []],
    'reset_password' => [['id', 'token'], ['_controller' => 'App\\Controller\\Security\\ResetPasswordController::resetPassword'], [], [['variable', '/', '[^/]++', 'token', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/réinitialisation']], [], []],
    'user' => [[], ['_controller' => 'App\\Controller\\Security\\UserController::index'], [], [['text', '/profil']], [], []],
    'profile' => [[], ['_controller' => 'App\\Controller\\Security\\UserController::edit'], [], [['text', '/profile-edit']], [], []],
    'update_password' => [[], ['_controller' => 'App\\Controller\\Security\\UserController::updatePassword'], [], [['text', '/update_password']], [], []],
    'tricks' => [[], ['_controller' => 'App\\Controller\\TrickController::index'], [], [['text', '/tricks']], [], []],
    'trick_new' => [[], ['_controller' => 'App\\Controller\\TrickController::create'], [], [['text', '/trick/new']], [], []],
    'trick_edit' => [['slug'], ['_controller' => 'App\\Controller\\TrickController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'slug', true], ['text', '/trick']], [], []],
    'trick_delete' => [['slug'], ['_controller' => 'App\\Controller\\TrickController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'slug', true], ['text', '/trick']], [], []],
    'trick_show' => [['slug', 'page'], ['page' => '1', '_controller' => 'App\\Controller\\TrickController::show'], ['page' => '\\d+'], [['variable', '/', '\\d+', 'page', true], ['variable', '/', '[^/]++', 'slug', true], ['text', '/trick']], [], []],
];
