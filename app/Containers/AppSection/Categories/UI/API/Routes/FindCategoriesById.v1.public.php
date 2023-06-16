<?php

/**
 * @apiGroup           Categories
 * @apiName            findCategoriesById
 *
 * @api                {GET} /v1/categories/:id Endpoint title here..
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

Route::get('categories/{id}', [Controller::class, 'findCategoriesById'])
    ->name('api_categories_find_categories_by_id')
    ->middleware(['auth:api']);

