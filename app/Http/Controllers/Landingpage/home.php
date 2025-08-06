<?php

namespace App\Http\Controllers\Landingpage;

use App\Http\Controllers\Controller;
use App\Models\kegiatan;
use App\Models\LayananUnggulan;
use App\Models\MediaPartner;
use App\Models\SambutanDirektur;
use Illuminate\Http\Request;

class home extends Controller
{
    public function home()
    {
        $data = SambutanDirektur::first();
        $unggulan = LayananUnggulan::with('kategori')->latest()->take(3)->get();
        $kegiatan = kegiatan::latest()->take('3')->get();
        $mediaPartner = MediaPartner::all();

        return view('Landingpage.index',compact('data', 'unggulan', 'kegiatan', 'mediaPartner'));
    }
    public function detailunggulan()
    {
        return view('Landingpage.detailunggulan');
    }
}
