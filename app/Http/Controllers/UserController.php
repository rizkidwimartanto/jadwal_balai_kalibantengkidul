<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_handphone' => 'required|digits_between:10,15',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:4',
            'password_confirmation' => 'required|string|same:password|min:4',
        ]);


        if ($validate) {
            \App\Models\User::create([
                'name' => $request->name,
                'alamat' => $request->alamat,
                'no_handphone' => $request->no_handphone,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'role' => 'user',
            ]);

            return redirect()->route('balai-kelurahan.login')->with('success', 'User registered successfully!');
        } else {
            return redirect()->back()->withErrors($validate)->withInput();
        }
    }
}
