<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisiMisi extends Model
{
    use HasFactory;

    /**
     * Tentukan nama tabel yang akan dihubungkan dengan model ini.
     * Karena nama modelnya 'VisiMisi' dan tabelnya 'visi_misi', Laravel secara default sudah bisa mendeteksinya.
     * Baris ini hanya untuk memastikan.
     */
    protected $table = 'visi_misi';

    /**
     * Tentukan kolom mana saja yang bisa diisi (fillable) untuk mass assignment.
     */
    protected $fillable = [
        'visi',
        'misi',
        'tujuan',
        'gambar_visi_misi',
        'judul_panduan',
        'poin_panduan',
        'gambar_panduan',
        'file_panduan',
    ];

    /**
     * Definisikan tipe data untuk kolom JSON.
     * Ini akan secara otomatis mengubah data dari format JSON di database menjadi array PHP saat Anda mengambilnya.
     */
    protected $casts = [
        'misi' => 'array',
        'tujuan' => 'array',
        'poin_panduan' => 'array',
    ];
}

