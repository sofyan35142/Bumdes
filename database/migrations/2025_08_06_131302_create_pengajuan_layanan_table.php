<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('pengajuan_layanan', function (Blueprint $table) {
            $table->id();

            // Data pemohon
            $table->string('nama_lengkap');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('nik');
            $table->text('alamat');
            $table->string('no_wa');

            // Dokumen (KTP)
            $table->string('file_ktp')->nullable();

            // Jenis layanan
            $table->string('jenis_layanan'); // contoh: sewa_kios, sewa_lahan, pemungutan_sampah

            // Data fleksibel tergantung jenis layanan
            $table->json('data_lainnya')->nullable();
            $table->string('file_surat')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pengajuan_layanan');
    }
};
