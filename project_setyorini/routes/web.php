<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpicySnacksController;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
Route::middleware('auth')->group(function () {
    Route::get('/snacks', [SpicySnacksController::class, 'index']);
});
