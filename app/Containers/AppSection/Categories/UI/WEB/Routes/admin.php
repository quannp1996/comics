<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'categories',
    'domain' => config('app.admin_url'),
    'middleware' => ['auth:admin'],
    'namespace' => '\App\Containers\AppSection\Categories\UI\WEB\Controllers'
], function($router) {
    $router->get('/', [
        'as' =>  'admin_categories_list',
        'uses' => 'CategoriesController@index'
    ]);
});
?>