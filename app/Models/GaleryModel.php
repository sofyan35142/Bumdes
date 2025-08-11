<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GaleryModel extends Model
{
     use HasFactory;

    protected $table = 'galerys';

    protected $fillable = [
        'tipe',
        'nama_kegiatan_video',
        'nama_kegiatan_foto',
        'link_video',
        'foto_path',
    ];
}
