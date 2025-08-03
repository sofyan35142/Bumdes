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
            'gambar_samping' => 'LandingPage/assets/images/resource/faq-1.jpg',
            'panduan_judul' => 'Panduan Regulasi Pendirian BUMDes',
            'panduan_list' => '
                <ol>
                    <li>Rangkuman dasar hukum BUMDes dalam satu dokumen praktis.</li>
                    <li>Dilengkapi dengan contoh Perdes, AD/ART, dan struktur organisasi.</li>
                    <li>Cocok untuk perangkat desa, BPD, maupun masyarakat umum.</li>
                </ol>
            ',
            'panduan_file' => 'panduan-pendirian-bumdes.pdf',
            'gambar_panduan' => 'LandingPage/assets/images/resource/book-2.png',
        ]);
    }
}
