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
        Schema::create('lowongan_pekerjaan', function (Blueprint $table) {
            $table->id();
            $table->string('judul_lowongan'); // contoh: "Staff Keuangan"
            $table->text('deskripsi'); // ringkasan deskripsi
            $table->text('tugas'); // tugas-tugas utama
            $table->text('kualifikasi'); // kriteria/requirements
            $table->date('tanggal_dibuka');
            $table->date('tanggal_ditutup');
            $table->string('lokasi')->nullable(); // optional
            $table->string('poster_lowongan')->nullable(); // optional
            $table->enum('status', ['dibuka', 'ditutup'])->default('dibuka'); // status aktif/tidak
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lowongan_pekerjaan');
    }

    /**
     * Reverse the migrations.
     */

};
