<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BalaiKelurahanModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use PDO;

class BalaiKelurahanController extends Controller
{
    public function index(){
        return view('home');
    }
    public function user_dashboard(){
        $data = [
            'title' => 'User Dashboard',
            'data_kegiatan' => BalaiKelurahanModel::all(), 
        ];
        return view('user.dashboard', $data);
    }
    public function create_activity_user(){
        $data = [
            'title' => 'Tambah Kegiatan',
        ];
        return view('user.create_activity', $data);
    }
    public function process_create_activity_user(Request $request){
        // Validasi input
        $request->validate([
            'nama_kegiatan' => 'required|string',
            'tanggal_kegiatan' => 'required|string',
            'waktu_kegiatan' => 'required|string',
            'penanggung_jawab' => 'required|string',
        ]);

        // Simpan data ke database
        $activity = new BalaiKelurahanModel();
        $activity->nama_kegiatan = $request->nama_kegiatan;
        $activity->tanggal_kegiatan = $request->tanggal_kegiatan;
        $activity->waktu_kegiatan = $request->waktu_kegiatan;
        $activity->penanggung_jawab = $request->penanggung_jawab;
        $activity->save();

        return redirect()->route('balai-kelurahan.user_dashboard')->with('success', 'Kegiatan berhasil ditambahkan!');      
    }
}
