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
    return view('home');
});

Auth::routes();

    Route::middleware(['auth', 'role:user',])->group(function () {     
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::get('/pengaduan', [App\Http\Controllers\HomeController::class, 'pengaduan'])->name('pengaduan');
        Route::post('/store', [App\Http\Controllers\HomeController::class, 'store'])->name('store'); 
    });
    
    //Dashboard
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

    //Pengaduan
    Route::get('/daftar-pengaduan', [App\Http\Controllers\PengaduanController::class, 'index'])->name('daftar-pengaduan');
    Route::get('/create{id}', [App\Http\Controllers\PengaduanController::class, 'edit'])->name('create');
    Route::post('/tanggapan{id}', [App\Http\Controllers\PengaduanController::class, 'update'])->name('tanggapan');

    //Tanggapan
    Route::get('/data-tanggapan', [App\Http\Controllers\TanggapanController::class, 'index'])->name('data-tanggapan');

    //Pengguna
    Route::get('/data-pengguna', [App\Http\Controllers\PenggunaController::class, 'index'])->name('data-pengguna');

