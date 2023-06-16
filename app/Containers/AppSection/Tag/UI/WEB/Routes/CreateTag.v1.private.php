<?php

use App\Containers\AppSection\Tag\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('cls/create', [Controller::class, 'create'])
    ->name('web_tag_create')
    ->middleware(['auth:web']);

