<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('panduan_bumdes', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('points'); // HTML <ul><li>...</li></ul>
            $table->string('file_ebook')->nullable(); // path ke file PDF
            $table->string('gambar')->nullable(); // path ke gambar cover
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('panduan_bumdes');
    }
};
