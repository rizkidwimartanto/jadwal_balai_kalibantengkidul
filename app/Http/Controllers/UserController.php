<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
      public function store(Request $request)
      {
          // Validate the request data
          $request->validate([
              'name' => 'required|string|max:255',
              'email' => 'required|string|email|max:255|unique:users',
              'password' => 'required|string|min:8|confirmed',
          ]);

          // Create a new user instance
          $user = new \App\Models\User();
          $user->name = $request->name;
          $user->alamat = $request->alamat;
          $user->no_handphone = $request->no_handphone;
          $user->email = $request->email;
          $user->password = bcrypt($request->password);
          $user->save();

          // Redirect or return a response
          return redirect()->route('balai-kelurahan.login')->with('success', 'User registered successfully!');
      }
}