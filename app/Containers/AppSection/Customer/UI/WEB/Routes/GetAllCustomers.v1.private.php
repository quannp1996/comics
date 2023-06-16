<?php

use App\Containers\AppSection\Customer\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('cls', [Controller::class, 'index'])
    ->name('web_customer_index')
    ->middleware(['auth:web']);

