<?php

namespace App\Http\Controllers\Landingpage;

use App\Http\Controllers\Controller;
use App\Models\kegiatan;
use Illuminate\Http\Request;

class Blog extends Controller
{
    public function blog()
    {
        $kegiatan = kegiatan::all();
        return view('Landingpage.blog.blog',  compact('kegiatan'));
    }
    public function blogdetail($id)
    {
        $detailblog = kegiatan::with('kategori')->findOrFail($id);
        return view('Landingpage.blog.blogdetail', compact('detailblog'));
    }
}
