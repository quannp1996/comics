<?php

/**
 * @apiGroup           Menus
 * @apiName            getAllMenuses
 *
 * @api                {GET} /v1/menuses Endpoint title here..
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

Route::get('menuses', [Controller::class, 'getAllMenuses'])
    ->name('api_menus_get_all_menuses')
    ->middleware(['auth:api']);

