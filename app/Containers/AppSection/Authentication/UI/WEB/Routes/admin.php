<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'namespace' => '\App\Containers\AppSection\Authentication\UI\WEB\Controllers',
    'domain' => config('app.admin_url'),
], function ($router) {
    $router->post('/login', [
        'as' => 'admin_submit_login',
        'uses' => 'Controller@login'
    ]);
    $router->get('/login', [
        'as' => 'login',
        'uses' => 'Controller@showLoginPage'
    ]);
});
