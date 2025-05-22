<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\AuthController;

// Routing ke HomeController
Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/list-barang', [ListBarangController::class, 'tampilkan']);

// Route login dan register (POST)
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

// Route untuk tampilan login dan register
Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

// Route yang butuh autentikasi
Route::middleware('auth')->group(function () {
    Route::get('/dashboard_member', function () {
        return view('dashboard');
    });

    Route::get('/schedule', function () {
        return view('schedule');
    });

    Route::get('/kalendermember', function () {
        return view('kalendermember'); // view file sebaiknya lowercase
    });

    Route::get('/teams', function () {
        return view('teams');
    });

    Route::get('/presence', function () {
        return view('presence');
    });
});
