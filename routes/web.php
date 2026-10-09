<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\PageController;

// Use MVC
Route::get('/', [PageController::class, 'home']);
Route::get('/deletemahasiswa/{nim}', [PageController::class, 'deletemahasiswa']);
Route::get('/editmahasiswa/{nim}', [PageController::class, 'editmahasiswa']);
Route::get('/formmahasiswa', [PageController::class, 'tambahmahasiswa']);
Route::post('/proses', [PageController::class, 'prosesmahasiswa']);