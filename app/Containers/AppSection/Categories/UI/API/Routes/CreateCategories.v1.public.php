<?php

/**
 * @apiGroup           Categories
 * @apiName            createCategories
 *
 * @api                {POST} /v1/categories Endpoint title here..
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

use App\Containers\AppSection\Categories\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::post('categories', [Controller::class, 'createCategories'])
    ->name('api_categories_create_categories')
    ->middleware(['auth:api']);

