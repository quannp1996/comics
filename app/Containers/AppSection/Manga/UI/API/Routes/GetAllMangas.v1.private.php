<?php

/**
 * @apiGroup           Manga
 * @apiName            getAllMangas
 *
 * @api                {GET} /v1/mangas Endpoint title here..
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

use App\Containers\AppSection\Manga\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('mangas', [Controller::class, 'getAllMangas'])
    ->name('api_manga_get_all_mangas')
    ->middleware(['auth:api']);

