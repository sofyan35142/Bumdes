<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DasarHukum extends Model
{
    // Nama tabel
    protected $table = 'dasar_hukum';

    // Kolom yang bisa diisi
    protected $fillable = [
        'points',
        'gambar_samping',
        'judul',
        'sertifikat_list',
        'sertifikat_file',
        'gambar_buku',
    ];

    // Tipe data otomatis casting
    protected $casts = [
        'points' => 'array',
    ];

    // Timestamps aktif (default true)
    public $timestamps = true;
}
