<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Method untuk menangani login
    public function login(Request $request)
    {
        // Validasi input user
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Cek apakah user berhasil di-authenticate
        if (Auth::attempt([
            'username' => $request->username,
            'password' => $request->password
        ])) {
            // Jika berhasil login, redirect ke dashboard
            return redirect()->intended('/dashboard_member');
        } else {
            // Jika gagal login, kembali ke halaman login dengan error
            return back()->withErrors([
                'message' => 'Username atau password salah.',
            ]);
        }
    }

    // Method untuk menangani register
    public function register(Request $request)
    {
        // Validasi input user
        $request->validate([
            'username' => 'required|string|unique:users',
            'name' => 'required|string|max:255', // validasi nama
            'email' => 'required|string|email|max:255|unique:users', // validasi email
            'password' => 'required|string|min:8|confirmed', // konfirmasi password
        ]);

        // Membuat user baru
        $user = User::create([
            'username' => $request->username,
            'name' => $request->name,  // Menyimpan nama
            'email' => $request->email,  // Menyimpan email
            'password' => Hash::make($request->password), // hash password
        ]);

        // Login setelah registrasi
        Auth::login($user); // Menggunakan login langsung setelah registrasi

        // Redirect ke dashboard atau halaman lain setelah login
        return redirect()->route('dashboard_member'); // Bisa ganti dengan halaman lain sesuai role atau akses
    }
}
