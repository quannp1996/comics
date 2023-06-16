<?php

use App\Containers\AppSection\Comment\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('comments/{id}', [Controller::class, 'show'])
    ->name('web_comment_show')
    ->middleware(['auth:web']);

