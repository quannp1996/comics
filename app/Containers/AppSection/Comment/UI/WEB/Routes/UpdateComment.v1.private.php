<?php

use App\Containers\AppSection\Comment\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::patch('comments/{id}', [Controller::class, 'update'])
    ->name('web_comment_update')
    ->middleware(['auth:web']);

