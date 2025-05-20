<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;

// Routing ke HomeController
Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/list-barang', [ListBarangController::class, 'tampilkan']);
Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard_member', function () {
    return view('dashboard');
});

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