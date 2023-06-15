<?php

/**
 * @apiGroup           Menus
 * @apiName            findMenusById
 *
 * @api                {GET} /v1/menuses/:id Endpoint title here..
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

use App\Containers\AppSection\Menus\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('menuses/{id}', [Controller::class, 'findMenusById'])
    ->name('api_menus_find_menus_by_id')
    ->middleware(['auth:api']);

