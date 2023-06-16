<?php

use App\Containers\AppSection\Manga\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('cls/{id}/edit', [Controller::class, 'edit'])
    ->name('web_manga_edit')
    ->middleware(['auth:web']);

