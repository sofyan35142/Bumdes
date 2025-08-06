<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\kegiatan;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function kategori()
    {
        $kategori = kegiatan::with('kategori')->get();
        $kategori = \App\Models\kategorimodel::all();
        return view('AdminPage.kategori.kategori', compact('kategori'));
    }

    public function tambahkategori()
    {
        $kategoris = \App\Models\kategorimodel::all();
        return view('AdminPage.kategori.tambahkategori', compact('kategoris'));
    }

    public function insertkategori(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
        ]);

        $kategori = new \App\Models\kategorimodel();
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->save();

        return redirect()->route('admin.kategori')->with('success', 'Kategori berhasil ditambahkan!');
    }

    public function editkategori($id)
    {
        $kategori = \App\Models\kategorimodel::findOrFail($id);
        return view('AdminPage.kategori.editkategori', compact('kategori'));
    }

    public function updatekategori(Request $request, $id)
    {
        $kategori = \App\Models\kategorimodel::findOrFail($id);
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
        ]);

        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->save();

        return redirect()->route('admin.kategori')->with('success', 'Kategori berhasil diperbarui!');
    }

    public function hapuskategori($id)
    {
        $kategori = \App\Models\kategorimodel::findOrFail($id);
        $kategori->delete();

        return redirect()->route('admin.kategori')->with('success', 'Kategori berhasil dihapus!');
    }
}
