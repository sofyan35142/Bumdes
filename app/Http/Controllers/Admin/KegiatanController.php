<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\kategorimodel;
use App\Models\kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function kegiatan()
    {
        $kegiatan = kegiatan::latest()->get();

        return view('AdminPage.Kegiatan.kegiatan', compact('kegiatan'));
    }

    public function tambahkegiatan()
    {
        $kategoris = \App\Models\kategorimodel::all();
        return view('AdminPage.Kegiatan.tambahkegiatan', compact('kategoris'));
    }

    public function insertkegiatan(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'Judul_Kegiatan' => 'required|string|max:255',
            'tanggal_kegiatan' => 'required|date',
            'kategori_id' => 'required|string|max:255',
            'deskripsi_kegiatan' => 'required|string',
            'foto_kegiatan' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $kegiatan = new kegiatan();
        $kegiatan->Judul_Kegiatan = $request->Judul_Kegiatan;
        $kegiatan->tanggal_kegiatan = $request->tanggal_kegiatan;
        $kegiatan->kategori_id = $request->kategori_id; // fix di sini
        $kegiatan->deskripsi_kegiatan = $request->deskripsi_kegiatan;

        if ($request->hasFile('foto_kegiatan')) {
            $file = $request->file('foto_kegiatan');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('foto kegiatan BumDes'), $filename);
            $kegiatan->foto_kegiatan = $filename;
        }

        $kegiatan->save();

        return redirect()->route('admin.kegiatan')->with('success', 'Kegiatan berhasil ditambahkan!');
    }

    public function editkegiatan($id)
{
    $kegiatan = kegiatan::findOrFail($id);
    $kategoris = kategorimodel::all(); // <- Kirim daftar kategori
    return view('AdminPage.Kegiatan.editkegiatan', compact('kegiatan', 'kategoris'));
}

public function updatekegiatan(Request $request, $id)
{
    $kegiatan = kegiatan::findOrFail($id);

    $request->validate([
        'Judul_Kegiatan' => 'required|string|max:255',
        'tanggal_kegiatan' => 'required|date',
        'kategori_id' => 'required|integer|exists:kategorimodels,id', // <- Perhatikan ini
        'deskripsi_kegiatan' => 'required|string',
        'foto_kegiatan' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $kegiatan->Judul_Kegiatan = $request->Judul_Kegiatan;
    $kegiatan->tanggal_kegiatan = $request->tanggal_kegiatan;
    $kegiatan->kategori_id = $request->kategori_id; // <- Perhatikan ini
    $kegiatan->deskripsi_kegiatan = $request->deskripsi_kegiatan;

    if ($request->hasFile('foto_kegiatan')) {
        $file = $request->file('foto_kegiatan');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('foto kegiatan BumDes'), $filename);
        $kegiatan->foto_kegiatan = $filename;
    }

    $kegiatan->save();

    return redirect()->route('admin.kegiatan')->with('success', 'Kegiatan berhasil diperbarui!');
}


    public function hapuskegiatan($id)
    {
        $kegiatan = kegiatan::findOrFail($id);
        if ($kegiatan->foto_kegiatan) {
            $filePath = public_path('foto kegiatan BumDes/' . $kegiatan->foto_kegiatan);
            if (file_exists($filePath)) {
                unlink($filePath);
            }
        }

        $kegiatan->delete();
        return redirect()->route('admin.kegiatan')->with('success', 'Kegiatan berhasil dihapus!');
    }
}
