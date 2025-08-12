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
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();

            // Slider 1
            $table->string('title_slider1')->nullable();
            $table->text('deskripsi_slider1')->nullable();
            $table->string('foto_slider1')->nullable();

            // Slider 2
            $table->string('title_slider2')->nullable();
            $table->text('deskripsi_slider2')->nullable();
            $table->string('foto_slider2')->nullable();

            // Slider 3
            $table->string('title_slider3')->nullable();
            $table->text('deskripsi_slider3')->nullable();
            $table->string('foto_slider3')->nullable();

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
