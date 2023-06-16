<?php

/**
 * @apiGroup           Categories
 * @apiName            updateCategories
 *
 * @api                {PATCH} /v1/categories/:id Endpoint title here..
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

Route::patch('categories/{id}', [Controller::class, 'updateCategories'])
    ->name('api_categories_update_categories')
    ->middleware(['auth:api']);

