<?php

use App\Containers\AppSection\Base\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::post('bases/store', [Controller::class, 'store'])
    ->name('web_base_store')
    ->middleware(['auth:web']);

