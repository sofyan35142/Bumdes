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
        // Migration pertama: bikin dulu tabelnya tanpa foreign key
        Schema::create('kegiatans', function (Blueprint $table) {
            $table->id();
            $table->string('Judul_Kegiatan')->nullable();
            $table->string('tanggal_kegiatan')->nullable();
            $table->unsignedBigInteger('kategori_id');
            $table->text('deskripsi_kegiatan')->nullable();
            $table->string('foto_kegiatan')->nullable();
            $table->timestamps();
        });

        // Migration kedua: tambahkan foreign key setelah tabel `kategorimodels` ada
        Schema::table('kegiatans', function (Blueprint $table) {
            $table->foreign('kategori_id')->references('id')->on('kategorimodels')->onDelete('cascade');
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
