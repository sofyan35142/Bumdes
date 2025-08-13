<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

// Seeder lainnya
use Database\Seeders\SambutanDirek;
use Database\Seeders\sliderseed;
use Database\Seeders\VisiMisiSeeder;
use Database\Seeders\statistik;
use Database\Seeders\StrukturOrganisasi;
use Database\Seeders\DasarHukumSeeder;
// Seeder tambahan yang dipanggil tapi belum diimport
use Database\Seeders\bookPanduanSeeder;
use Database\Seeders\kategori;
use Database\Seeders\LayananUnggulan;
use Database\Seeders\kegiatanseeder;
use Database\Seeders\InformasiKontakSeeder;
use Database\Seeders\AlasanMemilihBumdesSeeder;
use Database\Seeders\Testimonial;
use Database\Seeders\lowonganseeder;
use Database\Seeders\MediaPartnerSeeder;
use Database\Seeders\IndustrySeeder;
use Database\Seeders\JenisLayananSeeder;
use Database\Seeders\TentangBumdes;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Membuat user admin
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'pakukerto@gmail.com',
            'password' => 'pakukerto123',
        ]);

        // // Seed data untuk APBDes
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
            sliderseed::class,
            VisiMisiSeeder::class,
            statistik::class,
            StrukturOrganisasi::class,
            DasarHukumSeeder::class,
            bookPanduanSeeder::class,
            kategori::class,
            LayananUnggulan::class,
            kegiatanseeder::class,
            InformasiKontakSeeder::class,
            AlasanMemilihBumdesSeeder::class,
            Testimonial::class,
            lowonganseeder::class,
            MediaPartnerSeeder::class,
            IndustrySeeder::class,
            // JenisLayananSeeder::class,
            tentangBumdes::class
        ]);
    }
}
