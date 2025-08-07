<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Testimonial extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('testimonials')->insert([
            [
                'nama' => 'Siti Aminah',
                'keterangan' => 'Ibu Rumah Tangga',
                'deskripsi_testimonial' => 'Saya sangat terbantu dengan program desa ini. Terima kasih!',
                'nomor_telepone' => '628123456789',
                'status' => 0,
                'foto_testimonial' => 'default1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Budi Santoso',
                'keterangan' => 'Petani',
                'deskripsi_testimonial' => 'Kegiatan bakti sosial sangat bermanfaat bagi kami.',
                'nomor_telepone' => '628987654321',
                'status' => 0, // pending
                'foto_testimonial' => 'default2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Linda Wati',
                'keterangan' => 'Guru',
                'deskripsi_testimonial' => 'Senang bisa berpartisipasi dalam kegiatan ini!',
                'nomor_telepone' => '6281122334455',
                'status' => 0,
                'foto_testimonial' => 'default3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
