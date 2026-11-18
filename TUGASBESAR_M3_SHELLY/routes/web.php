<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\AuthController;

// Arahkan halaman awal ke login
Route::get('/', [AuthController::class, 'showLogin']);

// Route Login & Logout
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

// Route Buku (Existing)

// Route Buku
Route::middleware(['ceklogin'])->group(function () {

    // Semua role boleh melihat buku
    Route::get('/buku', [BukuController::class, 'index']);
    Route::get('/buku/detail', [BukuController::class, 'detail']);

    // Admin dan Petugas boleh menambah buku
    Route::middleware(['cekrole:admin,petugas'])->group(function () {
        Route::post('/buku/store', [BukuController::class, 'store']);
        Route::get('/buku/edit/{id}', [BukuController::class, 'edit']);
        Route::put('/buku/update/{id}', [BukuController::class, 'update']);
    });

    // Hanya Admin boleh menghapus buku
    Route::middleware(['cekrole:admin'])->group(function () {
        Route::delete('/buku/destroy/{id}', [BukuController::class, 'destroy']);
    });

});
