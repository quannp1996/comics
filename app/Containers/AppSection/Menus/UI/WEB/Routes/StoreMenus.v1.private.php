<?php

use App\Containers\AppSection\Menus\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::post('cls/store', [Controller::class, 'store'])
    ->name('web_menus_store')
    ->middleware(['auth:web']);

