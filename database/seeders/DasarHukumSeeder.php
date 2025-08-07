<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DasarHukum;

class DasarHukumSeeder extends Seeder
{
    public function run(): void
    {
        DasarHukum::create([
            'points' => json_encode([
                [
                    'title' => 'Undang-Undang Nomor 6 Tahun 2014 tentang Desa',
                    'body' => 'UU ini mengatur tentang pemerintahan desa dan memberikan dasar hukum pembentukan dan pengelolaan BUMDes sebagai lembaga ekonomi desa.',
                ],
                [
                    'title' => 'Peraturan Pemerintah Nomor 11 Tahun 2021',
                    'body' => 'PP ini merupakan turunan dari UU Desa yang memperjelas peran dan kewenangan BUMDes dalam pembangunan dan pemberdayaan masyarakat desa.',
                ],
                [
                    'title' => 'Permendesa PDTT Nomor 3 Tahun 2021',
                    'body' => 'Mengatur prosedur pendirian, pengelolaan, dan pengembangan BUMDes termasuk pelaporan keuangan dan pengawasan.',
                ],
                [
                    'title' => 'Peraturan Menteri Dalam Negeri Nomor 1 Tahun 2017',
                    'body' => 'Memberikan petunjuk teknis mengenai tata cara pengelolaan aset desa yang dapat digunakan BUMDes dalam operasionalnya.',
                ],
            ]),
            'gambar_samping' => 'dasarhukum/faq-1.jpg',
            'judul' => 'Sertifikat Badan Hukum BUM Desa Mandiri Sejahtera Pakukerto',
            'sertifikat_list' => '
                <ul>
                    <li>Nomor Sertifikat: AHU-01511.AH.01.33.TAHUN 2025</li>
                    <li>Tanggal Diterbitkan: 06 Maret 2025</li>
                    <li>Kedudukan: Desa Pakukerto, Kecamatan Sukorejo, Kabupaten Pasuruan, Provinsi Jawa Timur</li>
                    <li>Status: Telah terdaftar sebagai badan hukum yang tercatat dalam pangkalan data Direktorat Jenderal Administrasi Hukum Umum</li>
                </ul>
            ',
            'sertifikat_file' => 'dasarhukum/sertifikat-bumdes.pdf',
            'gambar_buku' => 'dasarhukum/book-2.png',
        ]);
    }
}
