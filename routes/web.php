<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\ParamedikController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\unit_kerjaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::get('/admin', [AdminController::class, 'index']);


Route::get('/pasien', [PasienController::class, 'index']);
Route::post('/pasien/store', [PasienController::class, 'store'])->name('pasien.store');
Route::delete('/pasien/{id}', [PasienController::class, 'destroy'])->name('pasien.destroy');
Route::get('/pasien/detail/{id}', [PasienController::class, 'show'])->name('pasien.show');
Route::get('/pasien/edit/{id}', [PasienController::class, 'edit'])->name('pasien.edit');
Route::post('/pasien/update/{id}', [PasienController::class, 'update'])->name('pasien.update');

Route::get('/periksa', [PeriksaController::class, 'index']);
Route::post('/periksa/store', [PeriksaController::class, 'store'])->name('periksa.store');
Route::delete('/periksa/{id}', [PeriksaController::class, 'destroy'])->name('periksa.destroy');
Route::get('/periksa/detail/{id}', [PeriksaController::class, 'show'])->name('periksa.show');
Route::get('/periksa/edit/{id}', [PeriksaController::class, 'edit'])->name('periksa.edit');
Route::post('/periksa/update/{id}', [PeriksaController::class, 'update'])->name('periksa.update');


Route::get('/kelurahan', [KelurahanController::class, 'index']);
Route::post('/kelurahan/store', [KelurahanController::class, 'store'])->name('kelurahan.store');
Route::delete('/kelurahan/{id}', [KelurahanController::class, 'destroy'])->name('kelurahan.destroy');
Route::get('/kelurahan/detail/{id}', [KelurahanController::class, 'show'])->name('kelurahan.show');
Route::get('/kelurahan/edit/{id}', [KelurahanController::class, 'edit'])->name('kelurahan.edit');
Route::post('/kelurahan/update/{id}', [KelurahanController::class, 'update'])->name('kelurahan.update');


Route::get('/paramedik', [ParamedikController::class, 'index']);
Route::post('/paramedik/store', [ParamedikController::class, 'store'])->name('paramedik.store');
Route::delete('/paramedik/{id}', [ParamedikController::class, 'destroy'])->name('paramedik.destroy');
Route::get('/paramedik/detail/{id}', [ParamedikController::class, 'show'])->name('paramedik.show');
Route::get('/paramedik/edit/{id}', [ParamedikController::class, 'edit'])->name('paramedik.edit');
Route::post('/paramedik/update/{id}', [ParamedikController::class, 'update'])->name('paramedik.update');

Route::get('/unit_kerja', [Unit_KerjaController::class, 'index']);
Route::post('/unit_kerja/store', [Unit_KerjaController::class, 'store'])->name('unit_kerja.store');
Route::get('unit_kerja/{id}/edit', [Unit_KerjaController::class, 'edit'])->name('unit_kerja.edit');
Route::get('/unit_kerja/detail/{id}', [Unit_KerjaController::class, 'show'])->name('unit_kerja.show');
Route::put('unit_kerja/{id}', [Unit_KerjaController::class, 'update'])->name('unit_kerja.update');
Route::delete('/unit_kerja/{id}', [Unit_KerjaController::class, 'destroy'])->name('unit_kerja.destroy');



