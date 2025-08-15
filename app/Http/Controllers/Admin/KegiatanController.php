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
        $validatedData = $request->validate([
            'Judul_Kegiatan'    => 'required|string|max:255',
            'tanggal_kegiatan'  => 'required|date',
            'kategori_id'       => 'required|string|max:255',
            'deskripsi_kegiatan' => 'required|string',
            'foto_kegiatan'     => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        if (app()->environment('local')) {
            $uploadPath = public_path('foto kegiatan BumDes');

        } else {
            $uploadPath = base_path('../public_html/foto kegiatan BumDes');
            
        }

        // Simpan data kegiatan
        $kegiatan = new kegiatan();
        $kegiatan->Judul_Kegiatan = $validatedData['Judul_Kegiatan'];
        $kegiatan->tanggal_kegiatan = $validatedData['tanggal_kegiatan'];
        $kegiatan->kategori_id = $validatedData['kategori_id'];
        $kegiatan->deskripsi_kegiatan = $validatedData['deskripsi_kegiatan'];

        if ($request->hasFile('foto_kegiatan')) {
            $file = $request->file('foto_kegiatan');
            $filename = md5($file->getClientOriginalName() . microtime(true)) . '.' . $file->getClientOriginalExtension();
            $file->move($uploadPath, $filename);
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

        $validatedData = $request->validate([
            'Judul_Kegiatan'    => 'required|string|max:255',
            'tanggal_kegiatan'  => 'required|date',
            'kategori_id'       => 'required|integer|exists:kategorimodels,id',
            'deskripsi_kegiatan' => 'required|string',
            'foto_kegiatan'     => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        // Tentukan path upload berdasarkan environment
        if (app()->environment('local')) {
            $uploadPath = public_path('foto kegiatan BumDes');
            // dd('Upload path lokal: ' . $uploadPath);
        } else {
            $uploadPath = base_path('../public_html/foto kegiatan BumDes');
            // dd('Upload path hosting: ' . $uploadPath);
        }
        // Update data
        $kegiatan->Judul_Kegiatan = $validatedData['Judul_Kegiatan'];
        $kegiatan->tanggal_kegiatan = $validatedData['tanggal_kegiatan'];
        $kegiatan->kategori_id = $validatedData['kategori_id'];
        $kegiatan->deskripsi_kegiatan = $validatedData['deskripsi_kegiatan'];

        // Jika ada foto baru
        if ($request->hasFile('foto_kegiatan')) {
            // Hapus foto lama jika ada
            if ($kegiatan->foto_kegiatan && file_exists($uploadPath . '/' . $kegiatan->foto_kegiatan)) {
                unlink($uploadPath . '/' . $kegiatan->foto_kegiatan);
            }

            // Simpan file baru dengan nama hash MD5
            $file = $request->file('foto_kegiatan');
            $filename = md5($file->getClientOriginalName() . microtime(true)) . '.' . $file->getClientOriginalExtension();
            $file->move($uploadPath, $filename);

            $kegiatan->foto_kegiatan = $filename;
        }

        $kegiatan->save();

        return redirect()->route('admin.kegiatan')->with('success', 'Kegiatan berhasil diperbarui!');
    }

    public function hapuskegiatan($id)
    {
        $kegiatan = kegiatan::findOrFail($id);

        // Tentukan path upload berdasarkan environment
        $uploadPath = app()->environment('local')
            ? public_path('foto kegiatan BumDes')
            : base_path('../public_html/foto kegiatan BumDes');

        if ($kegiatan->foto_kegiatan && file_exists($uploadPath . '/' . $kegiatan->foto_kegiatan)) {
            unlink($uploadPath . '/' . $kegiatan->foto_kegiatan);
        }

        $kegiatan->delete();

        return redirect()->route('admin.kegiatan')->with('success', 'Kegiatan berhasil dihapus!');
    }
}
