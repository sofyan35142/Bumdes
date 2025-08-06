<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategorimodel extends Model
{
    use HasFactory;
    protected $fillable = [
        'kategori',
    ];
    // Relasi: satu kategori punya banyak kegiatan
    public function kegiatans()
    {
        return $this->hasMany(kegiatan::class, 'kategori_id');
    }
    public function layanans()
    {
        return $this->hasMany(LayananUnggulan::class, 'kategori_id');
    }
}
