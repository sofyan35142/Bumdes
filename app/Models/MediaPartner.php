<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MediaPartner extends Model
{
    use HasFactory;

    protected $table = 'media_partners';

    protected $fillable = [
        'Nama_Media',
        'Logo_Media',
    ];
}
