<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PanduanBumdes extends Model
{
    protected $table = 'panduan_bumdes'; 

    protected $fillable = [
        'judul',
        'points',
        'file_ebook',
        'gambar',
    ];
}
