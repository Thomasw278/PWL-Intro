<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\PageController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KrskhsController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\RegistrasiController;

// User MVC
Route::get('/', [PageController::class, 'home']);
Route::get('/jadwal', [JadwalController::class, 'index'])->name('jadwal.index');
Route::get('/dosen', [DosenController::class, 'index'])->name('dosen.index');
Route::get('/matakuliah', [MatakuliahController::class, 'index'])->name('matakuliah.index');
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/registrasi', [RegistrasiController::class, 'index'])->name('registrasi.index');
Route::get('/krskhs', [KrskhsController::class, 'index'])->name('krskhs.index');

// Use MVC
Route::get('/deletemahasiswa/{nim}', [PageController::class, 'deletemahasiswa']);
Route::get('/editmahasiswa/{nim}', [PageController::class, 'editmahasiswa']);
Route::get('/formmahasiswa', [PageController::class, 'tambahmahasiswa']);
Route::post('/proses', [PageController::class, 'prosesmahasiswa']);