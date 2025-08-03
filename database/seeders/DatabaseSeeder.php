<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\StrukturOrganisasi;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

<<<<<<< HEAD
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $this->call(VisiMisiSeeder::class);
    $this->call([
        SambutanDirek::class,
        sliderseed::class,
        VisiMisiSeeder::class,
        statistik::class
    ]);
=======
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([
            SambutanDirek::class,
            StrukturOrganisasi::class,
            VisiMisiSeeder::class,
            DasarHukumSeeder::class
        ]);
>>>>>>> 7007257c50bd923beb9a2d7bd3b796945eef966e
    }
}
