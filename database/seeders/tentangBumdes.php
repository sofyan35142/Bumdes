<?php

namespace Database\Seeders;

use App\Models\TentangBumdes as tentangbumdesModel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class tentangBumdes extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        tentangbumdesModel::create([
            'gambar_1' => 'tentangBumdes/about-1.jpg',
            'gambar_2' => 'tentangBumdes/about-2.jpg',
            'gambar_3' => 'tentangBumdes/about-3.jpg',
            'gambar_4' => 'tentangBumdes/about-4.jpg',
            'title' => 'Bumdes Terdepan',
            'deskripsi_singkat' => 'Kami berkomitmen untuk menjadi penggerak ekonomi desa yang paling dicintai, dengan menyediakan solusi terbaik untuk masyarakat dan bisnis.',
            'points' => [
                ['title' => 'Administrasi Mudah', 'subtitle' => 'Sepanjang 2023'],
                ['title' => 'Dipercaya Masyarakat', 'subtitle' => 'Sepanjang 2023'],
                ['title' => 'Terdepan', 'subtitle' => 'Sepanjang 2023'],
                ['title' => 'Dukungan Terbaik', 'subtitle' => 'Sepanjang 2023'],
            ],
        ]);
    }
}
