<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }
    public function register()
    {
        return view('admin.auth.register');
    }

    public function proses_login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'required' => ':attribute wajib diisi.',
            'email' => 'Format email tidak valid.',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->withErrors(['email' => 'Email atau password salah'])->withInput();
        }

        if (is_null($user->email_verified_at)) {
            return back()->withErrors(['email' => 'Email belum diverifikasi. Silakan cek email Anda'])->withInput();
        }

        Auth::login($user);
        return redirect()->route('balai-kelurahan.dashboard');
    }


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
            'same' => 'Konfirmasi password tidak sama dengan password.',
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
            Auth::login($user);
            return redirect()->route('verification.notice');
        } else {
            return redirect()->back()->withErrors($validate)->withInput();
        }
    }
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('balai-kelurahan.login');
    }
}
