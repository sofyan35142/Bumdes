<?php

namespace Database\Seeders;

use App\Models\InformasiKontak;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InformasiKontakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        InformasiKontak::create([
            'alamat' => 'Jl. Raya Dusun Janti, Desa Pakukerto, Kec. Sukodono, Kab. Sidoarjo',
            'email' => 'bumdespakukerto@gmail.com',
            'telepon' => '+62 812 3456 7890',
            'iframe_maps' => 'https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d203.66428749450935!2d112.70299135493318!3d-7.726336328859577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1spasar%20desa%20pakukerto!5e1!3m2!1sid!2sid!4v1753984336283!5m2!1sid!2sid',
        ]);
    }
}
