<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('visi_misi', function (Blueprint $table) {
            $table->id();
            $table->text('visi')->nullable();
            $table->json('misi')->nullable();
            $table->json('tujuan')->nullable();
            $table->string('gambar_visi_misi')->nullable();
            $table->string('judul_panduan')->nullable();
            $table->json('poin_panduan')->nullable();
            $table->string('gambar_panduan')->nullable();
            $table->string('file_panduan')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('visi_misi');
    }
};
