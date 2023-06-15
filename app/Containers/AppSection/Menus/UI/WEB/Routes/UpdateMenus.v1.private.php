<?php

use App\Containers\AppSection\Menus\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::patch('cls/{id}', [Controller::class, 'update'])
    ->name('web_menus_update')
    ->middleware(['auth:web']);

