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
        // Membuat satu user contoh
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // Membuat user admin
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'pakukerto@gmail.com',
            'password' => 'pakukerto123',
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
            bookPanduanSeeder::class,
            Kategori::class,
            LayananUnggulan::class,
            KegiatanSeeder::class,
            InformasiKontakSeeder::class,
            AlasanMemilihBumdesSeeder::class,
            Testimonial::class,
            LowonganSeeder::class,
            MediaPartnerSeeder::class,
        ]);
    }
}
