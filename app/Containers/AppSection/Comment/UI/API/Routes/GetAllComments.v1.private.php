<?php

/**
 * @apiGroup           Comment
 * @apiName            getAllComments
 *
 * @api                {GET} /v1/cls Endpoint title here..
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

Route::get('cls', [Controller::class, 'getAllComments'])
    ->name('api_comment_get_all_comments')
    ->middleware(['auth:api']);

