<?php

use App\Http\Controllers\Dashboard\ContactController;
use App\Http\Controllers\Dashboard\DashboardController;

use App\Http\Controllers\Dashboard\ProjectsController;
use App\Http\Controllers\Dashboard\ToolsController;
use App\Http\Controllers\Dashboard\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard/index',[DashboardController::class,'index'])
->name('dashboard');

Route::group([
    'as'=>'dashboard.'
], function(){

Route::resource('projects',ProjectsController::class);
Route::resource('tools',ToolsController::class);
Route::resource('contacts',ContactController::class);
Route::resource('users',UsersController::class);
});