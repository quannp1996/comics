<?php

use Illuminate\Support\Facades\Route;
Route::group([
    'domain' => config('app.url'),
], function ($router) {
    $router->get('/', [
        'uses' => function(){
            die('12323');
        }
    ]);
});
