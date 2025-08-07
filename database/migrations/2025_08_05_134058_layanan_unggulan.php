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
        Schema::create('layanan_unggulans', function (Blueprint $table) {
        $table->id();
        $table->string('nama_layanan')->nullable();
        $table->text('deskripsi')->nullable();

        // GANTI dari ini:
        // $table->string('kategori')->nullable();

        // JADI seperti ini:
$table->unsignedBigInteger('kategori_id');
$table->foreign('kategori_id')->references('id')->on('kategorimodels')->onDelete('cascade');


        $table->string('foto_layanan')->nullable();
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
