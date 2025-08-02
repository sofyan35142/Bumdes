<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class slider extends Model
{
    use HasFactory;
    protected $fillable = [
        'foto_slider1',
        'foto_slider2',
        'foto_slider3'
    ];
}
