<?php

use Illuminate\Support\Facades\Route;

Route::group([
  'prefix' => 'comments',
  'domain' => '',
  'namespace' => '\App\Containers\AppSection\Comment\UI\API\Controllers'
], function ($router) {
  $router->get('/', [
    'as' => 'api_comments_get',
    'uses' => 'CommentController@getAllComments',
  ]);
  $router->post('/post', [
    'as' => 'api_comments_post',
    'uses' => 'CommentController@postComment',
  ]);
});
