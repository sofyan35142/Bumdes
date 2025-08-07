<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LayananUnggulan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('layanan_unggulans')->insert([
    [
        'nama_layanan' => 'Pelatihan UMKM',
        'deskripsi' => 'Kami mengadakan pelatihan keterampilan untuk pelaku UMKM desa agar bisa naik kelas secara digital maupun produksi.',
        'kategori_id' => 3,
        'foto_layanan' => '1.png',
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'nama_layanan' => 'Pemasaran Produk Desa',
        'deskripsi' => 'Membantu warga desa menjual produk unggulan (kerajinan, pertanian, kuliner) ke pasar yang lebih luas.',
        'kategori_id' => 2,
        'foto_layanan' => '2.png',
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'nama_layanan' => 'Layanan Simpan Pinjam',
        'deskripsi' => 'Melayani pinjaman usaha mikro dan simpanan warga dengan proses yang cepat dan aman.',
        'kategori_id' => 1,
        'foto_layanan' => '3.png',
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'nama_layanan' => 'Klinik Desa',
        'deskripsi' => 'Pelayanan kesehatan dasar untuk masyarakat dengan fasilitas yang memadai.',
        'kategori_id' => 4,
        'foto_layanan' => '1.png',
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'nama_layanan' => 'Kursus Komputer',
        'deskripsi' => 'Kursus dasar komputer untuk generasi muda agar siap menghadapi era digital.',
        'kategori_id' => 8,
        'foto_layanan' => '2.png',
        'created_at' => now(),
        'updated_at' => now(),
    ],
]);
    }
}
