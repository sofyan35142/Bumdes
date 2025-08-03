<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class statistik extends Model
{
    use HasFactory;
    protected $fillable = [
        'Warga_aktif',
        'Kepuasan_Mitra',
        'Unit_Usaha',
        'Produk_Desa',
    ];
}
