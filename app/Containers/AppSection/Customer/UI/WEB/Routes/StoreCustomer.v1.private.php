<?php

use App\Containers\AppSection\Customer\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::post('cls/store', [Controller::class, 'store'])
    ->name('web_customer_store')
    ->middleware(['auth:web']);

