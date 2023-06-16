<?php

/**
 * @apiGroup           Comment
 * @apiName            deleteComment
 *
 * @api                {DELETE} /v1/cls/:id Endpoint title here..
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

Route::delete('cls/{id}', [Controller::class, 'deleteComment'])
    ->name('api_comment_delete_comment')
    ->middleware(['auth:api']);

