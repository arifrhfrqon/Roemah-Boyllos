<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LkpController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramLkpController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'loginProcess'])->name('login.process');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/produk', [ProductController::class, 'index'])->name('produk.index');

Route::middleware('admin')->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/administrasi', [AdminController::class, 'administrasi'])->name('admin.administrasi');
    Route::get('/laporan', [AdminController::class, 'laporan'])->name('admin.laporan');
    Route::get('/lkp', [AdminController::class, 'lkp'])->name('admin.lkp');
    Route::resource('products', ProductController::class);
    Route::resource('/lkp', LkpController::class);
    Route::resource('program', ProgramLkpController::class);

});

Route::get('/katalog', function () {
    return view('katalog.index');
})->name('katalog');

Route::get('/lkp', function () {
    return view('lkp.daftar');
})->name('lkp.daftar');

Route::get('/lkp/daftar', [LkpController::class, 'create'])->name('lkp.create');
Route::post('/lkp/daftar', [LkpController::class, 'store'])->name('lkp.store');

