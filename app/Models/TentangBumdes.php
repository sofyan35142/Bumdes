<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TentangBumdes extends Model
{
    protected $table = 'tentang_bumdes';

    protected $fillable = [
        'gambar_1',
        'gambar_2',
        'gambar_3',
        'gambar_4',
        'title',
        'deskripsi_singkat',
        'points',
    ];

    // Jika ingin agar kolom points otomatis di-cast ke array saat diakses
    protected $casts = [
        'points' => 'array',
    ];
}
