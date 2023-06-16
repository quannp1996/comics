<?php

/**
 * @apiGroup           Tag
 * @apiName            createTag
 *
 * @api                {POST} /v1/tags Endpoint title here..
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

Route::post('tags', [Controller::class, 'createTag'])
    ->name('api_tag_create_tag')
    ->middleware(['auth:api']);

