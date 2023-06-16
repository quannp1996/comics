<?php

use App\Containers\AppSection\Manga\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::delete('cls/{id}', [Controller::class, 'destroy'])
    ->name('web_manga_destroy')
    ->middleware(['auth:web']);

