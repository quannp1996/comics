<?php

/**
 * @apiGroup           Tag
 * @apiName            updateTag
 *
 * @api                {PATCH} /v1/tags/:id Endpoint title here..
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

Route::patch('tags/{id}', [Controller::class, 'updateTag'])
    ->name('api_tag_update_tag')
    ->middleware(['auth:api']);

