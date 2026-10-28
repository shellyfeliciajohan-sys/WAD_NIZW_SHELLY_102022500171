<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/buku', [BukuController::class, 'index']);
Route::get('/buku/detail', [BukuController::class, 'detail']); 
Route::post('/buku/store', [BukuController::class, 'store']);


Route::get('/buku/edit/{id}', [BukuController::class, 'edit']);
Route::put('/buku/update/{id}', [BukuController::class, 'update']);


Route::delete('/buku/destroy/{id}', [BukuController::class, 'destroy']);