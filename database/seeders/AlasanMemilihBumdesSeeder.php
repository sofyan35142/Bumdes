<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AlasanMemilihBumdesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('alasan_memilih_bumdes')->insert([
            [
                'judul' => 'Mendukung UMKM Desa',
                'ikon' => 'icon-4',
                'deskripsi' => 'Kami membantu pertumbuhan UMKM lokal melalui pelatihan dan dukungan akses pemasaran.',
            ],
            [
                'judul' => 'Legal Aman Resmi Terpercaya',
                'ikon' => 'icon-5',
                'deskripsi' => 'BUMDes beroperasi secara resmi dengan landasan hukum yang kuat dan diawasi oleh pemerintah desa pakukerto sendiri.',
            ],
            [
                'judul' => 'Memberdayakan Warga',
                'ikon' => 'icon-6',
                'deskripsi' => 'Kami menyediakan pelatihan dan lapangan kerja untuk meningkatkan taraf hidup warga.',
            ],
            [
                'judul' => 'Layanan Ramah & Terjangkau',
                'ikon' => 'icon-33',
                'deskripsi' => 'Pelayanan kami mudah diakses dan dapat dinikmati oleh seluruh lapisan masyarakat desa.',
            ],
        ]);
    }
}
