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

            // Accordion points sebagai JSON
            $table->json('points')->nullable();

            // Gambar samping accordion
            $table->string('gambar_samping')->nullable();

            // Panduan
            $table->string('panduan_judul')->nullable();
            $table->text('panduan_list')->nullable(); // pakai \n sebagai pemisah antar poin
            $table->string('panduan_file')->nullable(); // file PDF
            $table->string('gambar_panduan')->nullable(); // gambar buku

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dasar_hukum');
    }
}
