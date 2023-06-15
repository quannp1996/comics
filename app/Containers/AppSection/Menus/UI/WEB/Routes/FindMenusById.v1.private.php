<?php

use App\Containers\AppSection\Menus\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('cls/{id}', [Controller::class, 'show'])
    ->name('web_menus_show')
    ->middleware(['auth:web']);

