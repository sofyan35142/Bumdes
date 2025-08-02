<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SambutanDirek extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sambutan_direkturs')->insert([
            'Nama_Direktur' => 'Yudi',
            'sambutan' => 'Selamat datang di website resmi BumDes kami. Kami berkomitmen untuk memberikan pelayanan terbaik kepada masyarakat desa. Melalui website ini, kami berharap dapat menjangkau lebih banyak warga dan memberikan informasi yang transparan mengenai kegiatan dan program BumDes.',
            'foto_direktur' => 'foto.jpeg',
        ]);
    }
}
