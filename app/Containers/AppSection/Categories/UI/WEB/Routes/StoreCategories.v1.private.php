<?php

use App\Containers\AppSection\Categories\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::post('categories/store', [Controller::class, 'store'])
    ->name('web_categories_store')
    ->middleware(['auth:web']);

