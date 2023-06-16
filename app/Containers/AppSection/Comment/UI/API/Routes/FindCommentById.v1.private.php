<?php

/**
 * @apiGroup           Comment
 * @apiName            findCommentById
 *
 * @api                {GET} /v1/cls/:id Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

use App\Containers\AppSection\Comment\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('cls/{id}', [Controller::class, 'findCommentById'])
    ->name('api_comment_find_comment_by_id')
    ->middleware(['auth:api']);

