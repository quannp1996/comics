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
});
