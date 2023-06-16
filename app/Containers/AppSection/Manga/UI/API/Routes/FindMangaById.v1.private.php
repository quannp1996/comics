<?php

/**
 * @apiGroup           Manga
 * @apiName            findMangaById
 *
 * @api                {GET} /v1/mangas/:id Endpoint title here..
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

Route::get('mangas/{id}', [Controller::class, 'findMangaById'])
    ->name('api_manga_find_manga_by_id')
    ->middleware(['auth:api']);

