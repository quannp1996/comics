<?php

use App\Containers\AppSection\Menus\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::delete('cls/{id}', [Controller::class, 'destroy'])
    ->name('web_menus_destroy')
    ->middleware(['auth:web']);

