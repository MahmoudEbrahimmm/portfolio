<?php

use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Dashboard\NotificationController;
use Illuminate\Support\Facades\Route;


Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/notifications/read/{id}', [NotificationController::class, 'read'])
    ->name('notifications.read');


require __DIR__.'/auth.php';
require __DIR__.'/dashboard.php';
