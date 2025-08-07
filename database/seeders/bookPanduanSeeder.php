<?php

namespace Database\Seeders;

use App\Models\PanduanBumdes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class bookPanduanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PanduanBumdes::create([
            'judul' => 'Panduan BUMDes 2025 untuk Usaha Desa Berkelanjutan',
            'points' => '
        <ul class="list-item mb_30">
            <li>Pelajari langkah-langkah membangun dan mengelola unit usaha desa.</li>
            <li>Dapatkan tips pengelolaan keuangan dan laporan transparan.</li>
            <li>Strategi pemasaran dan kolaborasi UMKM lokal.</li>
        </ul>
    ',
            'file_ebook' => 'panduan_bumdes/ebook.pdf',
            'gambar' => 'panduan_bumdes/book-2.png',
        ]);
    }
}
