<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisLayanan extends Model
{
    protected $table = 'jenis_layanan';

    protected $fillable = ['nama', 'harga_sewa', 'satuan_sewa', 'beban_perbulan'];
}
