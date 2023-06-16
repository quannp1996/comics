<?php

use App\Containers\AppSection\Manga\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('cls/create', [Controller::class, 'create'])
    ->name('web_manga_create')
    ->middleware(['auth:web']);

