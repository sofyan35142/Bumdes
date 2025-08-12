<?php

namespace App\Http\Controllers\Landingpage;

use App\Models\Industry;
use App\Models\VisiMisi;
use App\Models\DasarHukum;
use App\Models\MediaPartner;
use Illuminate\Http\Request;
use App\Models\PanduanBumdes;
use App\Models\LayananUnggulan;
use App\Models\SambutanDirektur;
use App\Models\StrukturOrganisasi;
use App\Models\AlasanMemilihBumdes;
use App\Http\Controllers\Controller;
use App\Models\TentangBumdes as tentangBumdesmodel;

class Profile extends Controller
{
    public function tentangBumdes()
    {
        $mediaPartner = MediaPartner::all();
        $alasan = AlasanMemilihBumdes::all();
        $team = StrukturOrganisasi::orderBy('urutan', 'asc')->take(4)->get();
        $industries = Industry::all();
        $tentangbumdes = tentangBumdesmodel::first();
        return view('Landingpage.profile.tentangBumdes', compact('mediaPartner', 'alasan','team','industries','tentangbumdes'));
    }

    public function visiMisi()
    {
        $book = PanduanBumdes::first();
        $data = VisiMisi::first();
        // dd($data);
        return view('Landingpage.profile.visiMisi',compact('book','data'));
    }

    public function strukturorganisasi()
    {
        $data = StrukturOrganisasi::orderBy('urutan', 'asc')->get();
        return view('Landingpage.profile.strukturorganisasi', compact('data'));
    }
    public function dasarhukum()
    {
        $data = DasarHukum::first();

        // Convert points (string JSON) jadi array
        if ($data && is_string($data->points)) {
            $data->points = json_decode($data->points, true);
        }

        // dd($data);
        return view('Landingpage.profile.dasarhukum',compact('data'));
    }
}
