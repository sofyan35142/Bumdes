<?php

namespace App\Http\Controllers\Landingpage;

use App\Http\Controllers\Controller;
use App\Models\GaleryModel;
use App\Models\LowonganPekerjaan;
use Illuminate\Http\Request;

class pages extends Controller
{
    public function galeri()
    {
        $galeri = GaleryModel::all();
        return view('Landingpage.pages.galeri', compact('galeri'));
    }
    public function lowongan()
    {
        $Lowongan = \App\Models\LowonganPekerjaan::where('status', 'dibuka')->latest()->get();
        return view('Landingpage.pages.lowongan', compact('Lowongan'));
    }
    public function keuangan()
    {
        return view('Landingpage.pages.keuangan');
    }
    public function lowongandetail($id)
    {
        $lowongandetail = LowonganPekerjaan::findOrFail($id);
        return view('Landingpage.pages.lowongandetail', compact('lowongandetail'));
    }
    public function umkm()
    {
        return view('Landingpage.pages.umkm');
    }
    public function listlayanan()
    {
        return view('Landingpage.listlayanan');
    }
}
