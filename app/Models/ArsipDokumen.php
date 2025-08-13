<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArsipDokumen extends Model
{
    use HasFactory;

    // nama tabel jika tidak sesuai plural default Laravel
    protected $table = 'arsip_dokumen';

    // kolom yang boleh diisi massal
    protected $fillable = [
        'nama',
        'nik',
        'gambar',
    ];
}
