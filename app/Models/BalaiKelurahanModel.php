<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BalaiKelurahanModel extends Model
{
    use HasFactory;
    protected $table = 'jadwal_balai_kelurahan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_kegiatan',
        'tanggal_kegiatan',
        'waktu_kegiatan',
        'penanggung_jawab', 
    ];
}
