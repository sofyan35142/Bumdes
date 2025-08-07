<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanLayanan extends Model
{
    use HasFactory;

    protected $table = 'pengajuan_layanan';

    protected $fillable = [
        'nama_lengkap',
        'tempat_lahir',
        'tanggal_lahir',
        'nik',
        'alamat',
        'no_wa',
        'file_ktp',
        'jenis_layanan',
        'data_lainnya',
        'file_surat', 
    ];

    protected $casts = [
        'data_lainnya' => 'array',
        'tanggal_lahir' => 'date',
    ];
}
