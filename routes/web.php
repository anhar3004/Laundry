<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\paketController;
use App\Http\Controllers\jenisLayananController;
use App\Http\Controllers\customerController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\authController;
use App\Http\Controllers\statusPesananController;
use App\Http\Controllers\statusPembayaranController;
use App\Http\Controllers\transaksiController;
use App\Http\Controllers\indexController;
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




Route::get('/login', [authController::class, 'index'])->name('login');
Route::post('/cekLogin', [authController::class, 'cek']);
Route::get('/logout', [authController::class, 'logout']);

Route::get('/', [indexController::class, 'index']);
Route::get('/cekPesanan', [indexController::class, 'cekPesanan']);

Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', [homeController::class, 'index']);

    Route::get('/jenisLayanan', [JenisLayananController::class, 'index']);
    Route::post('/jenisLayanan/tambah', [JenisLayananController::class, 'tambah']);
    Route::get('/jenisLayanan/{ino}/edit', [JenisLayananController::class, 'edit']);
    Route::post('/jenisLayanan/{id}/update', [jenisLayananController::class, 'update']);
    Route::get('/jenisLayanan/{id}/delete', [jenisLayananController::class, 'delete']);


    Route::get('/paket', [paketController::class, 'paket']);
    Route::post('/paket/tambah', [paketController::class, 'tambah']);
    Route::get('/paket/{id}/edit', [paketController::class, 'edit']);
    Route::post('/paket/{id}/update', [paketController::class, 'update']);
    Route::get('/paket/{id}/delete', [paketController::class, 'delete']);

    Route::get('/customer', [customerController::class, 'index']);
    Route::post('/customer/tambah', [customerController::class, 'tambah']);
    Route::get('/customer/{id}/edit', [customerController::class, 'edit']);
    Route::post('/customer/{id}/update', [customerController::class, 'update']);
    Route::get('/customer/{id}/delete', [customerController::class, 'delete']);

    Route::get('/admin', [adminController::class, 'index']);
    Route::post('/admin/tambah', [adminController::class, 'tambah']);
    Route::get('/admin/{id}/edit', [adminController::class, 'edit']);
    Route::post('/admin/{id}/update', [adminController::class, 'update']);
    Route::get('/admin/{id}/delete', [adminController::class, 'delete']);

    Route::get('/statusPesanan', [statusPesananController::class, 'index']);
    Route::post('/statusPesanan/tambah', [statusPesananController::class, 'tambah']);
    Route::get('/statusPesanan/{id}/edit', [statusPesananController::class, 'edit']);
    Route::post('/statusPesanan/{id}/update', [statusPesananController::class, 'update']);
    Route::get('/statusPesanan/{id}/delete', [statusPesananController::class, 'delete']);

    Route::get('/statusPembayaran', [statusPembayaranController::class, 'index']);
    Route::post('/statusPembayaran/tambah', [statusPembayaranController::class, 'tambah']);
    Route::get('/statusPembayaran/{id}/edit', [statusPembayaranController::class, 'edit']);
    Route::post('/statusPembayaran/{id}/update', [statusPembayaranController::class, 'update']);
    Route::get('/statusPembayaran/{id}/delete', [statusPembayaranController::class, 'delete']);

    Route::get('/transaksi', [transaksiController::class, 'index']);
    Route::post('/transaksi/tambah', [transaksiController::class, 'tambah']);
    Route::get('/transaksi/{id}/edit', [transaksiController::class, 'edit']);
    Route::post('/transaksi/{id}/update', [transaksiController::class, 'update']);
    Route::get('/transaksi/{id}/delete', [transaksiController::class, 'delete']);
    Route::get('/transaksi/up_status/{id}', [transaksiController::class, 'up_status']);
    Route::get('/transaksi/down_status/{id}', [transaksiController::class, 'down_status']);
    Route::get('/transaksi/print/{id}', [transaksiController::class, 'print']);
    Route::post('/transaksi/filterTanggal', [transaksiController::class, 'filterTanggal']);
    Route::post('/transaksi/cetakLaporan', [transaksiController::class, 'cetakLaporan']);
    Route::get('/transaksi/cetakLaporanSemua', [transaksiController::class, 'cetakLaporanSemua']);


});


