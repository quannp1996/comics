<?php

use App\Containers\AppSection\Manga\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::post('cls/store', [Controller::class, 'store'])
    ->name('web_manga_store')
    ->middleware(['auth:web']);

