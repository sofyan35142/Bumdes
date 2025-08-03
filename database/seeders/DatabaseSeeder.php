<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\StrukturOrganisasi;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        $jenisList = ['pendapatan', 'belanja', 'pembiayaan'];
    $kategoriList = [
        'Dana Desa', 'Alokasi Dana Desa', 'Pajak Daerah',
        'Kesehatan', 'Pendidikan', 'Pembangunan Jalan',
        'Pembayaran Hutang', 'Penerimaan Pinjaman'
    ];

    foreach (range(2020, 2025) as $tahun) {
        foreach ($jenisList as $jenis) {
            for ($i = 0; $i < 3; $i++) {
                DB::table('apbdes_items')->insert([
                    'tahun' => (string) $tahun,
                    'jenis' => $jenis,
                    'kategori' => $kategoriList[array_rand($kategoriList)],
                    'jumlah' => mt_rand(5000000, 500000000),
                ]);
            }
        }
    }

        $this->call([
            SambutanDirek::class,
            StrukturOrganisasi::class,
            VisiMisiSeeder::class
        ]);
    }
}
