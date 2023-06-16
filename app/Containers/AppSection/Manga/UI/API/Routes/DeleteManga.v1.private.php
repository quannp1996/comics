<?php

/**
 * @apiGroup           Manga
 * @apiName            deleteManga
 *
 * @api                {DELETE} /v1/mangas/:id Endpoint title here..
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

Route::delete('mangas/{id}', [Controller::class, 'deleteManga'])
    ->name('api_manga_delete_manga')
    ->middleware(['auth:api']);

