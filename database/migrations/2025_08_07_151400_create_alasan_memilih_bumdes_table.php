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
        Schema::create('alasan_memilih_bumdes', function (Blueprint $table) {
            $table->id();
            $table->string('judul'); // e.g., Mendukung UMKM Desa
            $table->string('ikon');  // e.g., icon-4
            $table->text('deskripsi'); // e.g., Kami membantu pertumbuhan UMKM...
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alasan_memilih_bumdes');
    }
};
