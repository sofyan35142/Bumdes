<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StrukturOrganisasi extends Model
{
    use HasFactory;

    protected $table = 'struktur_organisasi';

    protected $fillable = [
        'nama',
        'jabatan',
        'foto',
        'urutan',
    ];
}
