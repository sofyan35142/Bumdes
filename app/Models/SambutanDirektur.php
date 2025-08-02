<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SambutanDirektur extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nama_Direktur',
        'sambutan',
        'foto_direktur'
    ];
}
