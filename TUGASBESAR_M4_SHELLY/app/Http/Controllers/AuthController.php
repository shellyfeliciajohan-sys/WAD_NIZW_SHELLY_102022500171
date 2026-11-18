<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Cek user di database berdasarkan username
        $user = DB::table('users')->where('username', $request->username)->first();

        // Verifikasi password yang di-hash
        if ($user && Hash::check($request->password, $user->password)) {
            // Simpan data login ke session
            session([
                'login' => true,
                'username' => $user->username,
                'role' => $user->role,
            ]);

            return redirect('/buku');
        }

        return back()->with('error', 'Username atau password salah!');
    }

    public function logout()
    {
        session()->flush();
        return redirect('/login');
    }
}