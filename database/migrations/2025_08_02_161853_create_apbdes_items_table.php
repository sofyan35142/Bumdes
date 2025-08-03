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
        Schema::create('apbdes_items', function (Blueprint $table) {
            $table->id();
            $table->string('tahun');
            $table->enum('jenis', ['pendapatan', 'belanja', 'pembiayaan']);
            $table->string('kategori');
            $table->decimal('jumlah', 15, 2);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apbdes_items');
    }
};
