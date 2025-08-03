<?php

namespace App\Http\Controllers\Landingpage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ApbdesItem;
use Illuminate\Support\Facades\DB;
class Apdes extends Controller
{
    public function apdes()
{
     $tahun = request()->get('tahun', '2023');

    $pendapatan = ApbdesItem::where('jenis', 'pendapatan')->where('tahun', $tahun)->get();
    $belanja = ApbdesItem::where('jenis', 'belanja')->where('tahun', $tahun)->get();
    $pembiayaan = ApbdesItem::where('jenis', 'pembiayaan')->where('tahun', $tahun)->get();

    // Grafik per tahun
    $grafikPerTahun = ApbdesItem::select('tahun')
        ->selectRaw('SUM(CASE WHEN jenis = "pendapatan" THEN jumlah ELSE 0 END) as total_pendapatan')
        ->selectRaw('SUM(CASE WHEN jenis = "belanja" THEN jumlah ELSE 0 END) as total_belanja')
        ->selectRaw('SUM(CASE WHEN jenis = "pembiayaan" THEN jumlah ELSE 0 END) as total_pembiayaan')
        ->groupBy('tahun')
        ->orderBy('tahun')
        ->get();

    return view('Landingpage.pages.apdes', compact(
        'pendapatan', 'belanja', 'pembiayaan', 'grafikPerTahun', 'tahun'
    ));
}
}
