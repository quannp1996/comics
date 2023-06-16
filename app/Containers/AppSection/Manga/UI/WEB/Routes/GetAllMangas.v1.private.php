<?php

use App\Containers\AppSection\Manga\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('cls', [Controller::class, 'index'])
    ->name('web_manga_index')
    ->middleware(['auth:web']);

