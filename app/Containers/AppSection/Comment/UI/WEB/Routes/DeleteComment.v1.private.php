<?php

use App\Containers\AppSection\Comment\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::delete('comments/{id}', [Controller::class, 'destroy'])
    ->name('web_comment_destroy')
    ->middleware(['auth:web']);

