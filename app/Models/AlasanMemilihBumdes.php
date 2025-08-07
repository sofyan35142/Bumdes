<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlasanMemilihBumdes extends Model
{
    use HasFactory;

    protected $table = 'alasan_memilih_bumdes'; 

    protected $fillable = [
        'judul',
        'ikon',
        'deskripsi',
    ];
}
