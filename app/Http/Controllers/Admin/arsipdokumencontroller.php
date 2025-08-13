<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ArsipDokumen as Arsipmodel;
use Illuminate\Support\Facades\Storage;

class ArsipDokumenController extends Controller
{
    // Menampilkan daftar arsip dokumen
    public function index()
    {
        $arsip = Arsipmodel::latest()->get(); // ambil semua tanpa paginate
        return view('AdminPage.arsip-dokumen.index', compact('arsip'));
    }


    // Form tambah arsip
    public function create()
    {
        return view('AdminPage.arsip-dokumen.create');
    }

    // Simpan arsip baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nik' => 'required|string|max:20',
            'gambar' => 'required|image|mimes:jpg,jpeg,png',
        ]);

        $path = $request->file('gambar')->store('arsip', 'public');

        Arsipmodel::create([
            'nama' => $request->nama,
            'nik' => $request->nik,
            'gambar' => $path,
        ]);

        return redirect()->route('admin.arsip-dokumen.index')->with('success', 'Arsip dokumen berhasil ditambahkan.');
    }

    // Form edit arsip
    public function edit($id)
    {
        $arsip = Arsipmodel::findOrFail($id);
        return view('AdminPage.arsip-dokumen.edit', compact('arsip'));
    }

    // Update arsip
    public function update(Request $request, $id)
    {
        $arsip = Arsipmodel::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:255',
            'nik' => 'required|string|max:20',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            // hapus file lama
            if ($arsip->gambar && Storage::disk('public')->exists($arsip->gambar)) {
                Storage::disk('public')->delete($arsip->gambar);
            }
            $arsip->gambar = $request->file('gambar')->store('arsip', 'public');
        }

        $arsip->nama = $request->nama;
        $arsip->nik = $request->nik;
        $arsip->save();

        return redirect()->route('admin.arsip-dokumen.index')->with('success', 'Arsip dokumen berhasil diperbarui.');
    }

    // Hapus arsip
    public function destroy($id)
    {
        $arsip = Arsipmodel::findOrFail($id);

        if ($arsip->gambar && Storage::disk('public')->exists($arsip->gambar)) {
            Storage::disk('public')->delete($arsip->gambar);
        }

        $arsip->delete();

        return redirect()->route('admin.arsip-dokumen.index')->with('success', 'Arsip dokumen berhasil dihapus.');
    }
}
