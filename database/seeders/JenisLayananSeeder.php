<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisLayananSeeder extends Seeder
{
    public function run()
    {
        DB::table('jenis_layanan')->insert([
            [
                'nama' => 'Sewa Kios',
                'harga_sewa' => 1000000, // harga per bulan dalam rupiah
                'satuan_sewa' => 'bulan',
                'beban_perbulan' => 50000, // contoh pajak per bulan
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Sewa Lahan',
                'harga_sewa' => 800000,
                'satuan_sewa' => 'bulan',
                'beban_perbulan' => 40000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Pemungutan Sampah',
                'harga_sewa' => 300000,
                'satuan_sewa' => 'bulan',
                'beban_perbulan' => 20000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
