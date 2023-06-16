<?php

/**
 * @apiGroup           Tag
 * @apiName            getAllTags
 *
 * @api                {GET} /v1/tags Endpoint title here..
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

Route::get('tags', [Controller::class, 'getAllTags'])
    ->name('api_tag_get_all_tags')
    ->middleware(['auth:api']);

