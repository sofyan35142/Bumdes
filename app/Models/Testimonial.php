<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'nama',
        'nomor_telepone',
        'keterangan',
        'deskripsi_testimonial',
        'foto_testimonial',
        'status',
    ];
}
