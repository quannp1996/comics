<?php

use App\Containers\AppSection\Base\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('bases/{id}', [Controller::class, 'show'])
    ->name('web_base_show')
    ->middleware(['auth:web']);

