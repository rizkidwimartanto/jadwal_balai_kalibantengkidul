<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jadwal_balai_kelurahan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kegiatan');
            $table->string('tanggal_kegiatan');
            $table->string('waktu_kegiatan');
            $table->string('penanggung_jawab');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_balai_kelurahan');
    }
};
