<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BalaiKelurahanController extends Model
{
    use HasFactory;
    public function login(){
        $data = [
            'title' => 'Login Balai Kelurahan'
        ];

        return view('admin.auth.login', $data);
    }
}
