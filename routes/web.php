<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);


Route::get('/dashboard', [DashboardController::class, 'dashboardd'])->middleware('auth');
Route::get('/logout', [DashboardController::class, 'logout']);


