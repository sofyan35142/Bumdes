<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MediaPartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('media_partners')->insert([
            [
                'Nama_Media' => 'BimNas',
                'Logo_Media' => 'binmas.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Nama_Media' => 'BPD',
                'Logo_Media' => 'bpd.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Nama_Media' => 'Gapoktan',
                'Logo_Media' => 'gapoktan.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Nama_Media' => 'Linmas',
                'Logo_Media' => 'linmas.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Nama_Media' => 'Karang Taruna',
                'Logo_Media' => 'karang_taruna.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Nama_Media' => 'Kopwan',
                'Logo_Media' => 'kopwan.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Nama_Media' => 'LPMD',
                'Logo_Media' => 'lpmd.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Nama_Media' => 'PKK',
                'Logo_Media' => 'pkk.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Nama_Media' => 'Poskesdes',
                'Logo_Media' => 'poskesdes.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
