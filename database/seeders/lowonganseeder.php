<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class lowonganseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('lowongan_pekerjaan')->insert([
            [
                'judul_lowongan'   => 'Staff Keuangan',
                'deskripsi'        => 'Bertanggung jawab dalam pencatatan, pengelolaan, dan pelaporan seluruh transaksi keuangan perusahaan. Posisi ini membutuhkan ketelitian tinggi, kemampuan analisis angka, dan pemahaman mendalam terkait sistem akuntansi modern.',
                'tugas'            => "- Menyusun laporan keuangan bulanan dan tahunan secara akurat\n- Mengelola arus kas dan memonitor transaksi harian\n- Memeriksa kelengkapan dokumen dan bukti transaksi\n- Membantu proses audit internal maupun eksternal",
                'kualifikasi'      => "- Pendidikan minimal D3/S1 Akuntansi atau Manajemen Keuangan\n- Menguasai Microsoft Excel dan software akuntansi\n- Teliti, jujur, disiplin, dan mampu bekerja di bawah tekanan\n- Pengalaman minimal 1 tahun di bidang terkait",
                'tanggal_dibuka'   => '2025-08-10',
                'tanggal_ditutup'  => '2025-08-25',
                'lokasi'           => 'Jakarta',
                'poster_lowongan'  => 'staff-keuangan.jpg',
                'status'           => 'dibuka',
                'created_at'       => now(),
                'updated_at'       => now(),
            ],
            [
                'judul_lowongan'   => 'Digital Marketing Specialist',
                'deskripsi'        => 'Mengelola dan mengembangkan strategi pemasaran digital untuk meningkatkan brand awareness, engagement, dan penjualan produk. Posisi ini cocok bagi individu kreatif yang memahami tren digital dan mampu menganalisis data kampanye.',
                'tugas'            => "- Merancang dan menjalankan kampanye iklan di media sosial dan Google Ads\n- Membuat konten kreatif untuk berbagai platform digital\n- Menganalisis performa kampanye dan memberikan rekomendasi\n- Bekerja sama dengan tim kreatif dan penjualan",
                'kualifikasi'      => "- Pendidikan minimal D3/S1 Marketing, Komunikasi, atau setara\n- Pengalaman minimal 1 tahun di bidang Digital Marketing\n- Menguasai SEO, SEM, Social Media Ads, dan tools analitik\n- Memiliki kemampuan copywriting yang baik",
                'tanggal_dibuka'   => '2025-08-12',
                'tanggal_ditutup'  => '2025-08-30',
                'lokasi'           => 'Bandung',
                'poster_lowongan'  => 'digital-marketing.jpg',
                'status'           => 'dibuka',
                'created_at'       => now(),
                'updated_at'       => now(),
            ],
            [
                'judul_lowongan'   => 'Desainer Grafis',
                'deskripsi'        => 'Menciptakan desain visual yang menarik untuk mendukung kebutuhan promosi perusahaan, baik untuk media cetak maupun digital. Pekerjaan ini membutuhkan kreativitas tinggi, kepekaan terhadap detail, dan pemahaman tren desain.',
                'tugas'            => "- Membuat desain materi promosi seperti poster, brosur, banner, dan konten media sosial\n- Memastikan semua desain konsisten dengan identitas brand perusahaan\n- Berkolaborasi dengan tim pemasaran dan konten\n- Mengelola file desain dan arsip kreatif",
                'kualifikasi'      => "- Pendidikan minimal D3/S1 Desain Komunikasi Visual atau setara\n- Menguasai software desain seperti Adobe Photoshop, Illustrator, dan CorelDRAW\n- Kreatif, teliti, dan mampu bekerja dengan deadline ketat\n- Memiliki portofolio desain yang relevan",
                'tanggal_dibuka'   => '2025-08-15',
                'tanggal_ditutup'  => '2025-09-01',
                'lokasi'           => 'Surabaya',
                'poster_lowongan'  => 'desainer-grafis.jpg',
                'status'           => 'dibuka',
                'created_at'       => now(),
                'updated_at'       => now(),
            ],
            [
                'judul_lowongan'   => 'Customer Service Representative',
                'deskripsi'        => 'Memberikan pelayanan terbaik kepada pelanggan melalui komunikasi yang ramah, cepat, dan solutif. Posisi ini membutuhkan kemampuan interpersonal yang baik dan kesabaran dalam menangani berbagai pertanyaan serta keluhan pelanggan.',
                'tugas'            => "- Menjawab pertanyaan pelanggan melalui telepon, email, atau chat\n- Memberikan informasi produk dan layanan secara akurat\n- Menangani keluhan pelanggan dengan profesional\n- Mencatat dan melaporkan feedback pelanggan kepada manajemen",
                'kualifikasi'      => "- Pendidikan minimal SMA/SMK, lebih disukai D3/S1 semua jurusan\n- Memiliki kemampuan komunikasi yang baik\n- Ramah, sabar, dan mampu bekerja dalam tim\n- Pengalaman di bidang layanan pelanggan menjadi nilai tambah",
                'tanggal_dibuka'   => '2025-08-18',
                'tanggal_ditutup'  => '2025-09-05',
                'lokasi'           => 'Yogyakarta',
                'poster_lowongan'  => 'customer-service.jpg',
                'status'           => 'dibuka',
                'created_at'       => now(),
                'updated_at'       => now(),
            ],
        ]);
    }
}
