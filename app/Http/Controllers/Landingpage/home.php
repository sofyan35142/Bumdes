<?php

namespace App\Http\Controllers\Landingpage;

use App\Http\Controllers\Controller;
use App\Models\AlasanMemilihBumdes;
use App\Models\Industry;
use App\Models\kategorimodel;
use App\Models\kegiatan;
use App\Models\LayananUnggulan;
use App\Models\MediaPartner;
use App\Models\SambutanDirektur;
use Illuminate\Http\Request;
use App\Models\PanduanBumdes;
use App\Models\slider;
use App\Models\StrukturOrganisasi;
use App\Models\Testimonial;

class home extends Controller
{
    public function home()
    {
        $data = SambutanDirektur::first();
        $book = PanduanBumdes::first();
        $unggulan = LayananUnggulan::with('kategori')->latest()->take(3)->get();
        $kegiatan = kegiatan::latest()->take(3)->get();
        $mediaPartner = MediaPartner::all();
        $alasan = AlasanMemilihBumdes::all();
        $team = StrukturOrganisasi::orderBy('urutan', 'asc')->take(4)->get();
        $industries = Industry::all();
        $testi = Testimonial::where('status', 1)->latest()->get();
        $slider = Slider::first();

        // dd($industries->map->getOriginal());
        return view('Landingpage.index', compact('slider', 'data', 'book', 'unggulan', 'kegiatan', 'mediaPartner', 'alasan', 'team', 'industries', 'testi'));
    }

    public function detailunggulan($id)
    {

        $detailunggulan = LayananUnggulan::with('kategori')->findOrFail($id);
        // dd($detailunggulan->kategori);
        $kategoriList = kategorimodel::get();
        // dd($kategoriList->kategori);
        $book = PanduanBumdes::first();
        return view('Landingpage.detailunggulan', compact('detailunggulan', 'kategoriList','book'));
    }
    public function FormTestimonial()
    {
        $form = Testimonial::where('status', 1)->latest()->get();
        $support = MediaPartner::all();
        return view('Landingpage.formtestimonial', compact('form', 'support'));
    }
    public function testimoni()
    {
        return view('Landingpage.aftertestimonial');
    }
    public function pengajuan()
    {
        return view('Landingpage.pengajuansukses');
    }
    public function listunggulan()
    {
        // $Lowongan = LayananUnggulan::with('kategori')->latest()->paginate(6);
        // $kategoriList = kategorimodel::get();
        $unggulanlist = LayananUnggulan::with('kategori')->latest()->paginate(6);
        return view('Landingpage.pages.listunggulan', compact('unggulanlist'));
    }
}
