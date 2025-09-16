<?php

use App\Http\Controllers\Dashboard\ContactController;
use App\Http\Controllers\Dashboard\DashboardController;

use App\Http\Controllers\Dashboard\ProjectsController;
use App\Http\Controllers\Dashboard\ToolsController;
use App\Http\Controllers\Dashboard\UsersController;
use Illuminate\Support\Facades\Route;

Route::middleware(['checkAdmin'])
->as('dashboard.')
->group(function () {

    Route::get('/index', [DashboardController::class, 'index'])->name('index');

    Route::resource('projects', ProjectsController::class);
    Route::resource('tools', ToolsController::class);
    Route::resource('contacts', ContactController::class);
    Route::resource('users', UsersController::class);
});