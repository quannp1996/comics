<?php

use App\Containers\AppSection\Manga\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::patch('cls/{id}', [Controller::class, 'update'])
    ->name('web_manga_update')
    ->middleware(['auth:web']);

