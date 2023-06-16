<?php

use App\Containers\AppSection\Customer\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('cls/create', [Controller::class, 'create'])
    ->name('web_customer_create')
    ->middleware(['auth:web']);

