<?php

use App\Containers\AppSection\Comment\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('comments/create', [Controller::class, 'create'])
    ->name('web_comment_create')
    ->middleware(['auth:web']);

