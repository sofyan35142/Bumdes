<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

// Seeder lainnya
use Database\Seeders\SambutanDirek;
use Database\Seeders\SliderSeed;
use Database\Seeders\VisiMisiSeeder;
use Database\Seeders\Statistik;
use Database\Seeders\StrukturOrganisasi;
use Database\Seeders\DasarHukumSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
<<<<<<< HEAD
        // Membuat satu user contoh
=======
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $this->call(VisiMisiSeeder::class);
    // $this->call([
    //     SambutanDirek::class,
    //     sliderseed::class,
    //     VisiMisiSeeder::class,
    //     statistik::class
    // ]);
>>>>>>> f3b64b426db73719d1e99bec546e40389acf5f88
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'pakukerto@gmail.com',
            'password' => 'pakukertojaya',
        ]);

        // Seed data untuk APBDes
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
                        'tahun'    => (string) $tahun,
                        'jenis'    => $jenis,
                        'kategori' => $kategoriList[array_rand($kategoriList)],
                        'jumlah'   => mt_rand(5_000_000, 500_000_000),
                    ]);
                }
            }
        }

        // Memanggil seeder-seeder tambahan
        $this->call([
            SambutanDirek::class,
            SliderSeed::class,
            VisiMisiSeeder::class,
            Statistik::class,
            StrukturOrganisasi::class,
            DasarHukumSeeder::class,
<<<<<<< HEAD
            bookPanduanSeeder::class
=======
            Kategori::class,
            LayananUnggulan::class,
            KegiatanSeeder::class,
>>>>>>> f3b64b426db73719d1e99bec546e40389acf5f88
        ]);
    }
}
