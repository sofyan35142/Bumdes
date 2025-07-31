<?php

namespace App\Http\Controllers\Landingpage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Profile extends Controller
{
    public function tentangBumdes()
    {
        return view('Landingpage.profile.tentangBumdes');
    }

    public function visiMisi()
    {
        return view('Landingpage.profile.visiMisi');
    }

    public function strukturorganisasi()
    {
        return view('Landingpage.profile.strukturorganisasi');
    }
    public function dasarhukum()
    {
        return view('Landingpage.profile.dasarhukum');
    }
}
