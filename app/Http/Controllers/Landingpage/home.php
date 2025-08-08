<?php

namespace App\Http\Controllers\Landingpage;

use App\Http\Controllers\Controller;
use App\Models\AlasanMemilihBumdes;
use App\Models\kategorimodel;
use App\Models\kegiatan;
use App\Models\LayananUnggulan;
use App\Models\MediaPartner;
use App\Models\SambutanDirektur;
use Illuminate\Http\Request;
use App\Models\PanduanBumdes;
use App\Models\StrukturOrganisasi;

class home extends Controller
{
    public function home()
    {
        $data = SambutanDirektur::first();
        $book = PanduanBumdes::first();
<<<<<<< HEAD
=======
        // return view('Landingpage.index',compact('data','book'));
>>>>>>> 4ebdc79992c399544970c7d70baa61fd1907a198
        $unggulan = LayananUnggulan::with('kategori')->latest()->take(3)->get();
        $kegiatan = kegiatan::latest()->take(3)->get();
        $mediaPartner = MediaPartner::all();
        $alasan = AlasanMemilihBumdes::all();
<<<<<<< HEAD
        $team = StrukturOrganisasi::orderBy('urutan', 'asc')->take(4)->get();
        // dd($team->map->getOriginal());
        return view('Landingpage.index', compact('data', 'book', 'unggulan', 'kegiatan', 'mediaPartner', 'alasan','team'));
=======

        // return view('Landingpage.index',compact('data','book'));
        // $unggulan = LayananUnggulan::with('kategori')->latest()->take(3)->get();
        // $kegiatan = kegiatan::latest()->take('3')->get();
        // $mediaPartner = MediaPartner::all();
        return view('Landingpage.index',compact('data', 'unggulan', 'kegiatan', 'mediaPartner','book','alasan'));
>>>>>>> 4ebdc79992c399544970c7d70baa61fd1907a198
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
