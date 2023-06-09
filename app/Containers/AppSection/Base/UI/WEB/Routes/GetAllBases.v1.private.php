<?php

use App\Containers\AppSection\Base\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('bases', [Controller::class, 'index'])
    ->name('web_base_index')
    ->middleware(['auth:web']);

