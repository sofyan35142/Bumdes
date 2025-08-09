<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Industry;

class IndustrySeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['name' => 'Pasar Desa', 'icon' => 'icon-9', 'staff_count' => 120],
            ['name' => 'Pemungutan Sampah', 'icon' => 'icon-10', 'staff_count' => 45],
            ['name' => 'Peternakan', 'icon' => 'icon-13', 'staff_count' => 78],
            ['name' => 'Pertanian', 'icon' => 'icon-16', 'staff_count' => 90],
        ];

        Industry::insert($data);
    }
}
