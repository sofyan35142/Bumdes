<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class statistik extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('statistiks')->insert([
            'Warga_aktif' => '500+',
            'Kepuasan_Mitra' => '90%',
            'Unit_Usaha' => '256',
            'Produk_Desa' => '1000'
        ]);
    }
}
