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
        Schema::create('jenis_layanan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->bigInteger('harga_sewa'); // harga per bulan
            $table->string('satuan_sewa')->default('bulan'); // default bulan
            $table->bigInteger('beban_perbulan')->default(0); // pajak atau beban lain per bulan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jenis_layanan');
    }
};
