<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
        use Illuminate\Support\Facades\DB;

class kategori extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

    DB::table('kategorimodels')->insert([
    ['nama_kategori' => 'Ekonomi'],
    ['nama_kategori' => 'Pertanian'],
    ['nama_kategori' => 'UMKM'],
    ['nama_kategori' => 'Kesehatan'],
    ['nama_kategori' => 'Pendidikan'],
    ['nama_kategori' => 'Pariwisata'],
    ['nama_kategori' => 'Lingkungan'],
    ['nama_kategori' => 'Teknologi'],
    ['nama_kategori' => 'Sosial Budaya'],
    ['nama_kategori' => 'Infrastruktur'],
]);

    }
}
