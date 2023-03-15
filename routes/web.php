<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.lpage.app');
});

Auth::routes();

    Route::middleware(['auth', 'role:user',])->group(function () {     
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::get('/pengaduan', [App\Http\Controllers\HomeController::class, 'pengaduan'])->name('pengaduan');
        Route::post('/store', [App\Http\Controllers\HomeController::class, 'store'])->name('store'); 
    });
    
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/daftar-pengaduan', [App\Http\Controllers\DashboardController::class, 'daftar_pengaduan'])->name('daftar-pengaduan');
    Route::get('/data-tanggapan', [App\Http\Controllers\DashboardController::class, 'data_tanggapan'])->name('data-tanggapan');

