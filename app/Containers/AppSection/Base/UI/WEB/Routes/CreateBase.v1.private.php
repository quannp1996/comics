<?php

use App\Containers\AppSection\Base\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('bases/create', [Controller::class, 'create'])
    ->name('web_base_create')
    ->middleware(['auth:web']);

