<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kegiatanseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kegiatans')->insert([
    [
        'Judul_Kegiatan' => 'Pelatihan Digital Marketing',
        'tanggal_kegiatan' => '2025-08-06',
        'kategori_id' => 3,
        'deskripsi_kegiatan' => 'Pelatihan untuk UMKM agar mampu memasarkan produknya secara online dengan efektif.',
        'foto_kegiatan' => '1.png',
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'Judul_Kegiatan' => 'Bazar Produk Unggulan Desa',
        'tanggal_kegiatan' => '2025-08-06',
        'kategori_id' => 1,
        'deskripsi_kegiatan' => 'Wadah promosi dan penjualan produk lokal hasil karya warga desa secara langsung.',
        'foto_kegiatan' => '2.png',
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'Judul_Kegiatan' => 'Sosialisasi Kesehatan Ibu & Anak',
        'tanggal_kegiatan' => '2025-08-06',
        'kategori_id' => 4,
        'deskripsi_kegiatan' => 'Penyuluhan kesehatan dasar untuk ibu dan anak dengan menghadirkan tenaga medis.',
        'foto_kegiatan' => '3.png',
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'Judul_Kegiatan' => 'Pelatihan Pengolahan Hasil Tani',
        'tanggal_kegiatan' => '2025-08-06',
        'kategori_id' => 2,
        'deskripsi_kegiatan' => 'Pelatihan pengolahan pascapanen agar hasil tani memiliki nilai jual lebih tinggi.',
        'foto_kegiatan' => '1.png',
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'Judul_Kegiatan' => 'Kursus Desain Grafis Dasar',
        'tanggal_kegiatan' => '2025-08-06',
        'kategori_id' => 5,
        'deskripsi_kegiatan' => 'Pelatihan desain grafis dengan software dasar untuk menunjang kreativitas pemuda.',
        'foto_kegiatan' => '2.png',
        'created_at' => now(),
        'updated_at' => now(),
    ],
]);
    }
}
