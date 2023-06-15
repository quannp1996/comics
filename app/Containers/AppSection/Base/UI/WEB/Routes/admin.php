<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'domain' => config('app.admin_url'),
    'middleware' => ['auth:admin'],
    'namespace' => '\App\Containers\AppSection\Base\UI\WEB\Controllers'
], function ($router) {
    $router->get('/', [
        'as' => 'admin_default_page',
        'uses' => 'DashboardAdminController@dashboard'
    ]);
});
