<?php

use App\Containers\AppSection\Categories\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('categories/create', [Controller::class, 'create'])
    ->name('web_categories_create')
    ->middleware(['auth:web']);

