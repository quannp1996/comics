<?php

use App\Containers\AppSection\Menus\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('cls', [Controller::class, 'index'])
    ->name('web_menus_index')
    ->middleware(['auth:web']);

