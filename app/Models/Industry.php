<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
     // Nama tabel
    protected $table = 'industries';

    protected $fillable = [
        'name',
        'icon',
        'staff_count'
    ];
}
