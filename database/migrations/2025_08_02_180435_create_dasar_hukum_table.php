<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDasarHukumTable extends Migration
{
    public function up(): void
    {
        Schema::create('dasar_hukum', function (Blueprint $table) {
            $table->id();

            // Accordion points sebagai JSON (bisa array of poin)
            $table->json('points')->nullable();

            // Gambar di samping accordion
            $table->string('gambar_samping')->nullable();

            // Informasi sertifikat
            $table->string('judul')->nullable();
            $table->text('sertifikat_list')->nullable(); // Pisahkan poin pakai \n
            $table->string('sertifikat_file')->nullable(); // File PDF sertifikat
            $table->string('gambar_buku')->nullable(); // Gambar pendukung sertifikat

            $table->timestamps(); // created_at & updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dasar_hukum');
    }
}
