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
            'foto_kegiatan'     => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'Judul_Kegiatan.required'     => 'Judul kegiatan wajib diisi.',
            'Judul_Kegiatan.string'       => 'Judul kegiatan harus berupa teks.',
            'Judul_Kegiatan.max'          => 'Judul kegiatan tidak boleh lebih dari 255 karakter.',

            'tanggal_kegiatan.required'   => 'Tanggal kegiatan wajib diisi.',
            'tanggal_kegiatan.date'       => 'Format tanggal kegiatan tidak valid.',

            'kategori_id.required'        => 'Kategori kegiatan wajib dipilih.',
            'kategori_id.string'          => 'Kategori kegiatan tidak valid.',

            'deskripsi_kegiatan.required' => 'Deskripsi kegiatan wajib diisi.',
            'deskripsi_kegiatan.string'   => 'Deskripsi kegiatan harus berupa teks.',

            'foto_kegiatan.required' => 'Foto Kegiatan kegiatan wajib diisi.',
            'foto_kegiatan.image'         => 'File yang diunggah harus berupa gambar.',
            'foto_kegiatan.mimes'         => 'Gambar harus berformat jpeg, png, jpg, atau gif.',
            'foto_kegiatan.max'           => 'Ukuran gambar tidak boleh lebih dari 2MB.',
        ]);

        // Simpan data kegiatan
        $kegiatan = new kegiatan();
        $kegiatan->Judul_Kegiatan = $validatedData['Judul_Kegiatan'];
        $kegiatan->tanggal_kegiatan = $validatedData['tanggal_kegiatan'];
        $kegiatan->kategori_id = $validatedData['kategori_id'];
        $kegiatan->deskripsi_kegiatan = $validatedData['deskripsi_kegiatan'];

        if ($request->hasFile('foto_kegiatan')) {
            $file = $request->file('foto_kegiatan');
            $extension = $file->getClientOriginalExtension();
            $filename = md5($file->getClientOriginalName() . microtime(true)) . '.' . $extension;
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

        $validatedData = $request->validate([
            'Judul_Kegiatan'    => 'required|string|max:255',
            'tanggal_kegiatan'  => 'required|date',
            'kategori_id'       => 'required|integer|exists:kategorimodels,id',
            'deskripsi_kegiatan' => 'required|string',
            'foto_kegiatan'     => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'Judul_Kegiatan.required'     => 'Judul kegiatan wajib diisi.',
            'Judul_Kegiatan.string'       => 'Judul kegiatan harus berupa teks.',
            'Judul_Kegiatan.max'          => 'Judul kegiatan tidak boleh lebih dari 255 karakter.',

            'tanggal_kegiatan.required'   => 'Tanggal kegiatan wajib diisi.',
            'tanggal_kegiatan.date'       => 'Format tanggal kegiatan tidak valid.',

            'kategori_id.required'        => 'Kategori kegiatan wajib dipilih.',
            'kategori_id.integer'         => 'Kategori kegiatan tidak valid.',
            'kategori_id.exists'          => 'Kategori kegiatan tidak ditemukan.',

            'deskripsi_kegiatan.required' => 'Deskripsi kegiatan wajib diisi.',
            'deskripsi_kegiatan.string'   => 'Deskripsi kegiatan harus berupa teks.',

            'foto_kegiatan.image'         => 'File yang diunggah harus berupa gambar.',
            'foto_kegiatan.mimes'         => 'Gambar harus berformat jpeg, png, jpg, atau gif.',
            'foto_kegiatan.max'           => 'Ukuran gambar tidak boleh lebih dari 2MB.',
        ]);

        // Update data
        $kegiatan->Judul_Kegiatan = $validatedData['Judul_Kegiatan'];
        $kegiatan->tanggal_kegiatan = $validatedData['tanggal_kegiatan'];
        $kegiatan->kategori_id = $validatedData['kategori_id'];
        $kegiatan->deskripsi_kegiatan = $validatedData['deskripsi_kegiatan'];

        // Jika ada foto baru
        if ($request->hasFile('foto_kegiatan')) {
            // Hapus foto lama jika ada
            if ($kegiatan->foto_kegiatan && file_exists(public_path('foto kegiatan BumDes/' . $kegiatan->foto_kegiatan))) {
                unlink(public_path('foto kegiatan BumDes/' . $kegiatan->foto_kegiatan));
            }

            // Simpan dengan nama hash MD5
            $file = $request->file('foto_kegiatan');
            $extension = $file->getClientOriginalExtension();
            $filename = md5($file->getClientOriginalName() . microtime(true)) . '.' . $extension;

            // Pindahkan file
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
