<?php

use App\Containers\AppSection\Menus\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('cls/{id}/edit', [Controller::class, 'edit'])
    ->name('web_menus_edit')
    ->middleware(['auth:web']);

