<?php

/**
 * @apiGroup           Comment
 * @apiName            updateComment
 *
 * @api                {PATCH} /v1/cls/:id Endpoint title here..
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

Route::patch('cls/{id}', [Controller::class, 'updateComment'])
    ->name('api_comment_update_comment')
    ->middleware(['auth:api']);

