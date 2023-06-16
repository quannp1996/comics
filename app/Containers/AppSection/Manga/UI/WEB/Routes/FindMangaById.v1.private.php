<?php

use App\Containers\AppSection\Manga\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('cls/{id}', [Controller::class, 'show'])
    ->name('web_manga_show')
    ->middleware(['auth:web']);

