<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'domain' => config('app.admin_url'),
    'middleware' => ['auth:admin'],
], function ($router) {
    $router->get('/', [
        
    ]);
});
