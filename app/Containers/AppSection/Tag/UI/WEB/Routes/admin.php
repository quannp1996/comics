<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'tags',
    'domain' => config('app.admin_url'),
    'middleware' => ['auth:admin'],
    'namespace' => '\App\Containers\AppSection\Tag\UI\WEB\Controllers'
], function($router) {
    $router->get('/', [
        'as' => 'admin_tags_list',
        'uses' => 'TagController@index'
    ]);

    $router->post('/store', [
        'as' => 'admin_tags_store',
        'uses' => 'TagController@store'
    ]);

    $router->post('/update/{id}', [
        'as' => 'admin_tags_update',
        'uses' => 'TagController@update'
    ]);
});
