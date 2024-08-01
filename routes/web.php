<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataSensorController;
use App\Http\Controllers\keanggotaan;
use App\Http\Controllers\kegiatan;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\pemasukan;
use App\Http\Controllers\sekretariat;
use App\Http\Controllers\tatakelola;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);


Route::get('/dashboard', [DashboardController::class, 'dashboardd'])->middleware('auth');
Route::get('/tatakelola', [tatakelola::class, 'tatakelola'])->middleware('auth');
Route::get('/keanggotaan', [keanggotaan::class, 'keanggotaan'])->middleware('auth');
Route::get('/kegiatan', [kegiatan::class, 'kegiatan'])->middleware('auth');
Route::get('/sekretariat', [sekretariat::class, 'sekretariat'])->middleware('auth');
Route::get('/pemasukan', [pemasukan::class, 'pemasukan'])->middleware('auth');
Route::get('/store', [DataSensorController::class, 'store']);

Route::get('/logout', [DashboardController::class, 'logout']);


