<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LayananUnggulan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_layanan',
        'deskripsi',
        'kategori',
        'foto_layanan',
    ];
}
