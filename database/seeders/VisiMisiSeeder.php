<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VisiMisiSeeder extends Seeder
{
    /**
     * Jalankan seed database.
     */
    public function run(): void
    {
        // Data Visi, Misi, dan Tujuan
        $misi = [
            'Menggali, mengelola, dan mengoptimalkan potensi sumber daya alam dan sumber daya manusia desa untuk kesejahteraan bersama.',
            'Menciptakan dan mengembangkan unit-unit usaha yang inovatif dan relevan dengan kebutuhan masyarakat desa.',
            'Meningkatkan pendapatan asli desa (PADes) untuk mendukung pembangunan desa secara mandiri.',
            'Membuka lapangan pekerjaan baru bagi masyarakat desa guna mengurangi tingkat pengangguran.',
            'Menjadi jembatan antara masyarakat desa dan pasar, serta menjalin kemitraan yang strategis dengan berbagai pihak.'
        ];

        $tujuan = [
            'Meningkatkan perekonomian desa dan pendapatan masyarakat desa.',
            'Menjadikan BUMDes sebagai lembaga ekonomi yang solid, profesional, dan berdaya saing.',
            'Memperkuat kapasitas kelembagaan desa dalam mengelola aset dan potensi ekonomi.',
            'Mendorong kemandirian ekonomi desa dan partisipasi aktif masyarakat dalam pembangunan.'
        ];

        // Masukkan data ke dalam tabel 'visi_misi'
        DB::table('visi_misi')->insert([
            'visi' => 'Menjadi pendorong utama pertumbuhan ekonomi desa dan kesejahteraan masyarakat melalui pengelolaan potensi desa secara profesional, transparan, dan berkelanjutan.',
            'misi' => json_encode($misi),
            'tujuan' => json_encode($tujuan),
            'gambar_visi_misi' => 'visimisi/faq-1.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

