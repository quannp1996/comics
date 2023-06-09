<?php

use App\Containers\AppSection\Base\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('bases/{id}/edit', [Controller::class, 'edit'])
    ->name('web_base_edit')
    ->middleware(['auth:web']);

