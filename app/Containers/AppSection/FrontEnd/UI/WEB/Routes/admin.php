<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'manges',
    'domain' => config('app.admin_url'),
    'middleware' => ['auth:admin'],
    'namespace' => '\App\Containers\AppSection\FrontEnd\UI\WEB\Controllers'
], function($router) {
    
    $router->get('/', [
        'as' =>  'admin_manges_list',
        'uses' => 'MangesController@index'
    ]);

    $router->get('/add', [
        'as' =>  'admin_manges_add_form',
        'uses' => 'MangesController@create'
    ]);
    
    $router->get('/edit/{id}', [
        'as' =>  'admin_manges_edit_form',
        'uses' => 'MangesController@edit'
    ])->where('id', '[0-9]+');

    $router->post('/store', [
        'as' =>  'admin_manges_store',
        'uses' => 'MangesController@store'
    ]);

    $router->post('/update/{id}', [
        'as' =>  'admin_manges_update',
        'uses' => 'MangesController@update'
    ])->where('id', '[0-9]+');

    $router->delete('/delete/{id}', [
        'as' =>  'admin_manges_delete',
        'uses' => 'MangesController@delete'
    ])->where('id', '[0-9]+');

    $router->group([
        'prefix' => '/{manga_id}/chapters',
    ], function($r) {
        $r->get('/', [
            'as' => 'admin_manges_chapter_list',
            'uses' => 'MangesController@chapters'
        ]);
    });
});
