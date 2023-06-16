<?php

use App\Containers\AppSection\Tag\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('cls/{id}/edit', [Controller::class, 'edit'])
    ->name('web_tag_edit')
    ->middleware(['auth:web']);

