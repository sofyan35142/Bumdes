<?php

namespace App\Http\Controllers\Landingpage;

use App\Models\kegiatan;
use Illuminate\Http\Request;
use App\Models\PanduanBumdes;
use App\Http\Controllers\Controller;

class Blog extends Controller
{
    public function blog(Request $request)
    {
        $query = Kegiatan::query();
        $book = PanduanBumdes::first();
        if ($request->filled('keyword')) {
            $query->where('Judul_Kegiatan', 'like', '%' . $request->keyword . '%');
        }

        // Gunakan paginate() bukan get()
        $kegiatan = $query->orderBy('tanggal_kegiatan', 'desc')->paginate(5);

        $latestKegiatan = Kegiatan::orderBy('tanggal_kegiatan', 'desc')
            ->take(3)
            ->get();

        return view('Landingpage.blog.blog', compact('kegiatan', 'latestKegiatan','book'));
    }

    public function blogdetail($id)
    {
        $detailblog = kegiatan::with('kategori')->findOrFail($id);
        $book = PanduanBumdes::first();
        $latestKegiatan = Kegiatan::where('id', '!=', $id)
            ->orderBy('tanggal_kegiatan', 'desc')
            ->take(3)
            ->get();
            // dd($book);
        return view('Landingpage.blog.blogdetail', compact('detailblog', 'latestKegiatan','book'));
    }
}
