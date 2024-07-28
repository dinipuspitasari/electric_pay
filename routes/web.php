<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\SistemKonfigurasiController;
use App\Http\Controllers\TagihanController;
use App\Http\Controllers\TarifController;
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

Route::get('/about', function () {
    return view('about');
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'admin'])->group(function () {

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index']);

    // tarif
    Route::get('/tarif', [TarifController::class, 'index']);
    Route::get('/tarif/create', [TarifController::class, 'create']);
    Route::post('/tarif/create', [TarifController::class, 'store']);
    Route::post('/tarif/update/{id}', [TarifController::class, 'update']);
    Route::get('/tarif/edit/{id}', [TarifController::class, 'edit']);
    Route::get('/tarif/delete/{id}', [TarifController::class, 'delete']);


    // pelanggan
    Route::get('/pelanggan', [PelangganController::class, 'index']);
    Route::get('/pelanggan/details/{id}', [PelangganController::class, 'details']);
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
    
});

Route::middleware(['auth:sanctum', 'verified', 'pelanggan'])->group(function () {
    // Route::get('/pembayaran', function () {
    //     return view('pembayaran');
    // });
    //level
    Route::get('/level', [LevelController::class, 'index']);
});