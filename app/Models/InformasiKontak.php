<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InformasiKontak extends Model
{
    use HasFactory;

    protected $table = 'informasi_kontak';

    protected $fillable = [
        'alamat',
        'email',
        'telepon',
        'iframe_maps',
    ];
}
