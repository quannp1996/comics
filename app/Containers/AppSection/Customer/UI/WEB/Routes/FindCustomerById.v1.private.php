<?php

use App\Containers\AppSection\Customer\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('cls/{id}', [Controller::class, 'show'])
    ->name('web_customer_show')
    ->middleware(['auth:web']);

