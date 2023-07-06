<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'domain' => config('app.url'),
], function($router) {
    $router->get('/', [
        'as' => 'frontend_default_page',
        'uses' => '\App\Containers\AppSection\FrontEnd\UI\WEB\Controllers\HomeController@index'
    ]);
    /**
     * Manga
     */
    $router->get('/{slug}', [
        'as' => 'frontend_manga_detail',
        'uses' => '\App\Containers\AppSection\FrontEnd\UI\WEB\Controllers\MangaController@detail'
    ]);
});