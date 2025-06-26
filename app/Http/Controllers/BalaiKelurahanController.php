<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Http;

class BalaiKelurahanController extends Controller
{
    public function index(){
        return view('home');
    }
    public function login(){
        return view('admin.auth.login');
    }
    public function register(){
        return view('admin.auth.register');
    }
}
