<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class slider extends Model
{
    use HasFactory;

    protected $fillable = [
        // Slider 1
        'title_slider1',
        'deskripsi_slider1',
        'foto_slider1',

        // Slider 2
        'title_slider2',
        'deskripsi_slider2',
        'foto_slider2',

        // Slider 3
        'title_slider3',
        'deskripsi_slider3',
        'foto_slider3',
    ];
}
