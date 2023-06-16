<?php

use App\Containers\AppSection\Categories\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::delete('categories/{id}', [Controller::class, 'destroy'])
    ->name('web_categories_destroy')
    ->middleware(['auth:web']);

