<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DasarHukum extends Model
{
    // Nama tabel secara eksplisit (opsional, hanya jika tidak pakai plural)
    protected $table = 'dasar_hukum';

    // Kolom yang bisa diisi (fillable)
    protected $fillable = [
        'points',
        'gambar_samping',
        'panduan_judul',
        'panduan_list',
        'panduan_file',
        'gambar_panduan',
    ];

    // Cast JSON ke array otomatis
    protected $casts = [
        'points' => 'array',
    ];

    // Jika pakai timestamps, ini default-nya true, jadi boleh dihapus kalau tidak diubah
    public $timestamps = true;

}
