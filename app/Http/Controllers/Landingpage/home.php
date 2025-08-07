<?php

namespace App\Http\Controllers\Landingpage;

use App\Http\Controllers\Controller;
<<<<<<< HEAD
use App\Models\AlasanMemilihBumdes;
=======
use App\Models\kategorimodel;
>>>>>>> 54e769913aad6f1671280e54c31eab33a993cf6f
use App\Models\kegiatan;
use App\Models\LayananUnggulan;
use App\Models\MediaPartner;
use App\Models\SambutanDirektur;
use Illuminate\Http\Request;
use App\Models\PanduanBumdes;

class home extends Controller
{
    public function home()
    {
        $data = SambutanDirektur::first();
        $book = PanduanBumdes::first();
<<<<<<< HEAD
        $unggulan = LayananUnggulan::with('kategori')->latest()->take(3)->get();
        $kegiatan = kegiatan::latest()->take('3')->get();
        $mediaPartner = MediaPartner::all();
        $alasan = AlasanMemilihBumdes::all();
        return view('Landingpage.index',compact('data', 'unggulan', 'kegiatan', 'mediaPartner','book','alasan'));
=======
        return view('Landingpage.index',compact('data','book'));
        $unggulan = LayananUnggulan::with('kategori')->latest()->take(3)->get();
        $kegiatan = kegiatan::latest()->take('3')->get();
        $mediaPartner = MediaPartner::all();

        return view('Landingpage.index', compact('data', 'unggulan', 'kegiatan', 'mediaPartner'));
        return view('Landingpage.index',compact('data', 'unggulan', 'kegiatan', 'mediaPartner'));
>>>>>>> 54e769913aad6f1671280e54c31eab33a993cf6f
    }
    public function detailunggulan($id)
    {

        $detailunggulan = LayananUnggulan::with('kategori')->findOrFail($id);
        // dd($detailunggulan->kategori);
        $kategoriList = kategorimodel::get();
        // dd($kategoriList->kategori);

        return view('Landingpage.detailunggulan', compact('detailunggulan', 'kategoriList'));
    }
    public function FormTestimonial()
    {
        return view('Landingpage.formtestimonial');
    }
    public function testimoni()
    {
        return view('Landingpage.aftertestimonial');
    }
}
