<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTentangBumdesTable extends Migration
{
    public function up()
    {
        Schema::create('tentang_bumdes', function (Blueprint $table) {
            $table->id();
            $table->string('gambar_1')->nullable();
            $table->string('gambar_2')->nullable();
            $table->string('gambar_3')->nullable();
            $table->string('gambar_4')->nullable();
            $table->string('title');
            $table->text('deskripsi_singkat');
            $table->json('points')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tentang_bumdes');
    }
}
