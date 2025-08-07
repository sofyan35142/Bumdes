<?php

namespace App\Http\Controllers\Landingpage;

<<<<<<< HEAD
=======
use App\Http\Controllers\Controller;
use App\Models\kegiatan;
use App\Models\LayananUnggulan;
use App\Models\MediaPartner;
use App\Models\SambutanDirektur;
>>>>>>> f3b64b426db73719d1e99bec546e40389acf5f88
use Illuminate\Http\Request;
use App\Models\PanduanBumdes;
use App\Models\SambutanDirektur;
use App\Http\Controllers\Controller;

class home extends Controller
{
    public function home()
    {
        $data = SambutanDirektur::first();
<<<<<<< HEAD
        $book = PanduanBumdes::first();
        return view('Landingpage.index',compact('data','book'));
=======
        $unggulan = LayananUnggulan::with('kategori')->latest()->take(3)->get();
        $kegiatan = kegiatan::latest()->take('3')->get();
        $mediaPartner = MediaPartner::all();

        return view('Landingpage.index',compact('data', 'unggulan', 'kegiatan', 'mediaPartner'));
>>>>>>> f3b64b426db73719d1e99bec546e40389acf5f88
    }
    public function detailunggulan()
    {
        return view('Landingpage.detailunggulan');
    }
}
