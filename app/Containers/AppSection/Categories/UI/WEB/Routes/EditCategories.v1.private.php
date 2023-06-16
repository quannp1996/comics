<?php

use App\Containers\AppSection\Categories\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('categories/{id}/edit', [Controller::class, 'edit'])
    ->name('web_categories_edit')
    ->middleware(['auth:web']);

