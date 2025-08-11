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
        Schema::create('galerys', function (Blueprint $table) {
            $table->id();
            $table->string('tipe'); // 'foto' atau 'video'
            $table->string('nama_kegiatan_video')->nullable();
            $table->string('nama_kegiatan_foto')->nullable();
            $table->string('link_video')->nullable(); // untuk tipe video
            $table->string('foto_path')->nullable();  // untuk tipe foto
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
