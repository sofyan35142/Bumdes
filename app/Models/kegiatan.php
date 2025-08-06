<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class kegiatan extends Model
{
    use HasFactory;
    protected $fillable = [
        'Judul_Kegiatan',
        'tanggal_kegiatan',
        'kategori_kegiatan',
        'deskripsi_kegiatan',
        'foto_kegiatan',
        // 'remember_token',
    ];
     public function kategori()
    {
        return $this->belongsTo(kategorimodel::class, 'kategori_id');
    }
}
