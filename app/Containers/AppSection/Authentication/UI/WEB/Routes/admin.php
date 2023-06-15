<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'namespace' => '\App\Containers\AppSection\Authentication\UI\WEB\Controllers',
    'domain' => config('app.admin_url'),
], function ($router) {
    $router->get('/login', [
        'as' => 'login',
        'uses' => 'Controller@showLoginPage'
    ]);
});
