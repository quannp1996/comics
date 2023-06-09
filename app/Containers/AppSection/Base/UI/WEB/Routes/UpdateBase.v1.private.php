<?php

use App\Containers\AppSection\Base\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::patch('bases/{id}', [Controller::class, 'update'])
    ->name('web_base_update')
    ->middleware(['auth:web']);

