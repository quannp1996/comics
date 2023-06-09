<?php

use App\Containers\AppSection\Base\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::delete('bases/{id}', [Controller::class, 'destroy'])
    ->name('web_base_destroy')
    ->middleware(['auth:web']);

