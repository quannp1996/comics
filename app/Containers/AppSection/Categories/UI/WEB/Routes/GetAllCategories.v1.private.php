<?php

use App\Containers\AppSection\Categories\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('categories', [Controller::class, 'index'])
    ->name('web_categories_index')
    ->middleware(['auth:web']);

