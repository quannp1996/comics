<?php

use App\Containers\AppSection\Customer\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::delete('cls/{id}', [Controller::class, 'destroy'])
    ->name('web_customer_destroy')
    ->middleware(['auth:web']);

