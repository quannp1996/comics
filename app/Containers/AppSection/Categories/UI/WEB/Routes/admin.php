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

    $router->get('/ajax', [
        'as' =>  'admin_categories_list_ajax',
        'uses' => 'CategoriesController@ajax'
    ]);

    $router->get('/add', [
        'as' =>  'admin_categories_add_form',
        'uses' => 'CategoriesController@addForm'
    ]);
    
    $router->get('/edit/{id}', [
        'as' =>  'admin_categories_edit_form',
        'uses' => 'CategoriesController@editForm'
    ])->where('id', '[0-9]+');

    $router->post('/store', [
        'as' =>  'admin_categories_store',
        'uses' => 'CategoriesController@store'
    ]);

    $router->post('/update_field', [
        'as' =>  'admin_categories_update_field',
        'uses' => 'CategoriesController@updateField'
    ]);

    $router->post('/update/{id}', [
        'as' =>  'admin_categories_update',
        'uses' => 'CategoriesController@update'
    ])->where('id', '[0-9]+');
});
?>