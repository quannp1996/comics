<?php

use App\Containers\AppSection\Customer\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::patch('cls/{id}', [Controller::class, 'update'])
    ->name('web_customer_update')
    ->middleware(['auth:web']);

