<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\SistemKonfigurasiController;
use App\Http\Controllers\TagihanController;
use App\Http\Controllers\TarifController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('welcome');
});
Route::get('/profile', function () {
    return view('profile');
});

Route::get('/about', function () {
    return view('about');
});

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');



// Route Admin
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'admin'])->group(function () {
    // level
    Route::get('/level', [LevelController::class, 'index']);
    Route::get('/level/create', [LevelController::class, 'create']);
    Route::post('/level/create', [LevelController::class, 'store']);
    Route::post('/level/update/{id}', [LevelController::class, 'update']);
    Route::get('/level/edit/{id}', [LevelController::class, 'edit']);
    Route::get('/level/delete/{id}', [LevelController::class, 'delete']);

    
    // Admin
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/user/create', [UserController::class, 'store'])->name('user.store');
    Route::get('/user/edit/{user}', [UserController::class, 'edit'])->name('user.edit');
    Route::post('/user/update/{user}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/user/destroy/{user}', [UserController::class, 'destroy'])->name('user.destroy');

    // tarif
    Route::get('/tarif', [TarifController::class, 'index']);
    Route::get('/tarif/create', [TarifController::class, 'create']);
    Route::post('/tarif/create', [TarifController::class, 'store']);
    Route::post('/tarif/update/{id}', [TarifController::class, 'update']);
    Route::get('/tarif/edit/{id}', [TarifController::class, 'edit']);
    Route::get('/tarif/delete/{id}', [TarifController::class, 'delete']);
    Route::get('/tarif/search', [TarifController::class, 'search']);


    // pelanggan
    Route::get('/pelanggan', [PelangganController::class, 'index']);
    Route::get('/pelanggan/details/{id}', [PelangganController::class, 'details']);
    Route::get('/pelanggan/search', [PelangganController::class, 'search']);
    Route::get('/pelanggan/create', [PelangganController::class, 'create'])->name('pelanggan.create');
    Route::post('/pelanggan/create', [PelangganController::class, 'store'])->name('pelanggan.store');
    Route::post('/pelanggan/update/{id}', [PelangganController::class, 'update']);
    Route::get('/pelanggan/edit/{id}', [PelangganController::class, 'edit']);
    Route::get('/pelanggan/delete/{id}', [PelangganController::class, 'delete']);

    // tagihan
    Route::get('/tagihan', [TagihanController::class, 'index']);
    Route::get('/tagihan/create', [TagihanController::class, 'create']);
    Route::post('/tagihan/create', [TagihanController::class, 'store']);
    Route::post('/tagihan/update/{id}', [TagihanController::class, 'update']);
    Route::get('/tagihan/edit/{id}', [TagihanController::class, 'edit']);
    Route::get('/tagihan/delete/{id}', [TagihanController::class, 'delete']);

    // sistem konfigurasi
    Route::get('/sistem-konfigurasi', [SistemKonfigurasiController::class, 'index']);
    Route::post('/sistem-konfigurasi/update/{id}', [SistemKonfigurasiController::class, 'update']);
    Route::get('/sistem-konfigurasi/edit/{id}', [SistemKonfigurasiController::class, 'edit']);
    
});


//route pelanggan
Route::middleware(['auth:sanctum',  config('jetstream.auth_session'), 'verified', 'pelanggan'])->group(function () {
   
    // Pembayaran
    Route::get('/pembayaran', [PembayaranController::class, 'index']);
    Route::get('/pembayaran/details/{id}', [PembayaranController::class, 'details']);
    Route::post('/pembayaran/update/{id}', [PembayaranController::class, 'update']);

    Route::get('/pembayaran/print/{id}', [PembayaranController::class, 'print'])->name('pembayaran.print');

});