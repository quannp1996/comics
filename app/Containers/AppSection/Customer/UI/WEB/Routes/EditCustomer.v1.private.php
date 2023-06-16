<?php

use App\Containers\AppSection\Customer\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('cls/{id}/edit', [Controller::class, 'edit'])
    ->name('web_customer_edit')
    ->middleware(['auth:web']);

