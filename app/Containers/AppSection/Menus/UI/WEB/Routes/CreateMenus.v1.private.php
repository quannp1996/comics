<?php

use App\Containers\AppSection\Menus\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('cls/create', [Controller::class, 'create'])
    ->name('web_menus_create')
    ->middleware(['auth:web']);

