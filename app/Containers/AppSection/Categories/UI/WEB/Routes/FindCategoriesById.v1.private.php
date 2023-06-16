<?php

use App\Containers\AppSection\Categories\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('categories/{id}', [Controller::class, 'show'])
    ->name('web_categories_show')
    ->middleware(['auth:web']);

