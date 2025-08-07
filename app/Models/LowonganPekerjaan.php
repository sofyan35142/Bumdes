<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LowonganPekerjaan extends Model
{
    protected $table = 'lowongan_pekerjaan';

    protected $fillable = [
        'judul_lowongan',
        'deskripsi',
        'tugas',
        'kualifikasi',
        'tanggal_dibuka',
        'tanggal_ditutup',
        'lokasi',
        'poster_lowongan',
        'status',
    ];
}
