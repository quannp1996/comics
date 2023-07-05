<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'manges',
    'domain' => config('app.admin_url'),
    'middleware' => ['auth:admin'],
    'namespace' => '\App\Containers\AppSection\Manga\UI\WEB\Controllers'
], function($router) {
    $router->get('/show_push', [
        'as' => 'admin_manga_show_push',
        'uses' => 'MangesController@showMessage'
    ]);  

    $router->get('/push', [
        'as' => 'admin_manga_push_message',
        'uses' => 'MangesController@pushMessage'
    ]);  
});
