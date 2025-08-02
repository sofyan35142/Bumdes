<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class sliderseed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sliders')->insert([
            'foto_slider1' => 'banner-2.jpg',
            'foto_slider2' => 'banner-5.jpg',
            'foto_slider3' => 'banner-6.jpg',
        ]);
    }
}
