<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'alamat' => 'required',
            'no_handphone' => 'required|digits_between:10,15',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4',
            'password_confirmation' => 'required|same:password',
        ], [
            'required' => ':attribute wajib diisi.',
            'email' => 'Format email tidak valid.',
            'unique' => 'Email sudah terdaftar.',
            'digits_between' => 'Nomor handphone harus antara 10 hingga 15 digit',
            'same' => 'Konfirmasi password tidak sesuai.',
            'min' => 'Password minimal 4 karakter.',
        ]);


        if ($validate) {
            $user = User::create([
                'name' => $request->name,
                'alamat' => $request->alamat,
                'no_handphone' => $request->no_handphone,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'role' => 'user',
            ]);

            event(new Registered($user));

            // Login user agar bisa akses halaman /email/verify
            Auth::login($user);

            // Redirect ke halaman notifikasi verifikasi
            return redirect()->route('verification.notice');
        } else {
            return redirect()->back()->withErrors($validate)->withInput();
        }
    }
}
