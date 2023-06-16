<?php

/**
 * @apiGroup           Tag
 * @apiName            findTagById
 *
 * @api                {GET} /v1/tags/:id Endpoint title here..
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

use App\Containers\AppSection\Tag\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('tags/{id}', [Controller::class, 'findTagById'])
    ->name('api_tag_find_tag_by_id')
    ->middleware(['auth:api']);

