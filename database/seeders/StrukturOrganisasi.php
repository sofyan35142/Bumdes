<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StrukturOrganisasi extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama' => 'Ahmad Ramdhan',
                'jabatan' => 'Direktur Utama',
                'foto' => 'struktur/avatar-1.jpg',
                'urutan' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Siti Nurhaliza',
                'jabatan' => 'Wakil Direktur',
                'foto' => 'struktur/avatar-2.jpg',
                'urutan' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Budi Santoso',
                'jabatan' => 'Sekretaris',
                'foto' => 'struktur/avatar-3.jpg',
                'urutan' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Dina Aprilia',
                'jabatan' => 'Bendahara',
                'foto' => 'struktur/avatar-4.jpg',
                'urutan' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Teguh Prasetyo',
                'jabatan' => 'Kepala Unit Usaha',
                'foto' => 'struktur/avatar-5.jpg',
                'urutan' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('struktur_organisasi')->insert($data);
    }
}
