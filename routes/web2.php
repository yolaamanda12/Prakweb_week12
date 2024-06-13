<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\ParamedikController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\unit_kerjaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [AdminController::class, 'index']);

Route::get('/pasien', [PasienController::class, 'index']);
Route::get('/periksa', [PeriksaController::class, 'index']);
Route::get('/paramedik', [ParamedikController::class, 'index']);
Route::get('/kelurahan', [KelurahanController::class, 'index']);
Route::get('/unit_kerja', [unit_kerjaController::class, 'index']);
Route::post('/pasien/store', [PasienController::class, 'store']);
Route::get('/pasien/delete/{id}', [PasienController::class, 'destroy']);
Route::get('/pasien/detail/{id}', [PasienController::class, 'show']);
Route::get('/pasien/edit/{id}', [PasienController::class, 'edit']);
Route::post('/pasien/update/{id}', [PasienController::class, 'update']);