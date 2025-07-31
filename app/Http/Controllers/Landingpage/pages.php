<?php

namespace App\Http\Controllers\Landingpage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class pages extends Controller
{
    public function galeri()
    {
        return view('Landingpage.pages.galeri');
    }
    public function lowongan()
    {
        return view('Landingpage.pages.lowongan');
    }
}
