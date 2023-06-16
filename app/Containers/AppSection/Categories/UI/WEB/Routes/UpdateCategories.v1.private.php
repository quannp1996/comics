<?php

use App\Containers\AppSection\Categories\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::patch('categories/{id}', [Controller::class, 'update'])
    ->name('web_categories_update')
    ->middleware(['auth:web']);

