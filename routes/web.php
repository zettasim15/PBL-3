<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\AuthController; // pastikan AuthController diimport

// Routing ke HomeController
Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']); // Cukup satu saja
Route::get('/list-barang', [ListBarangController::class, 'tampilkan']);

// Route login POST
Route::post('/login', [AuthController::class, 'login']); // Login handler
// Route register POST
Route::post('/register', [AuthController::class, 'register']); // Register handler

// Route untuk tampilan login, register, dan lainnya
Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard_member', function () {
    return view('dashboard');
})->middleware('auth'); // pastikan user sudah login

Route::get('/schedule', function () {
    return view('schedule');
});

Route::get('/kalendermember', function () {
    return view('Kalendermember');
});

Route::get('/teams', function () {
    return view('teams');
});

Route::get('/presence', function () {
    return view('presence');
});

Route::get('/register', function () {
    return view('register');
});
