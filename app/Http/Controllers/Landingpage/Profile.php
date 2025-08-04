<?php

namespace App\Http\Controllers\Landingpage;

use App\Http\Controllers\Controller;
use App\Models\StrukturOrganisasi;
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
        $data = StrukturOrganisasi::orderBy('urutan', 'asc')->get();
        return view('Landingpage.profile.strukturorganisasi', compact('data'));
    }
    public function dasarhukum()
    {
        return view('Landingpage.profile.dasarhukum');
    }
}
