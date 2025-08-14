<?php

namespace App\Http\Controllers\Admin;

use App\Models\JenisLayanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JenisLayananController extends Controller
{
    // Tampil semua jenis layanan
    public function index()
    {
        $layanan = JenisLayanan::all();
        return view('Adminpage.jenisLayanan.index', compact('layanan'));
    }

    // Form tambah jenis layanan baru
    public function create()
    {
        return view('Adminpage.jenisLayanan.create');
    }

    // Simpan data jenis layanan baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'harga_sewa' => 'required|numeric|min:0',
            'satuan_sewa' => 'required|string|max:50',
            'beban_perbulan' => 'required|numeric|min:0',
        ]);

        JenisLayanan::create($request->all());

        return redirect()->route('admin.jenisLayanan.index')->with('success', 'Jenis layanan berhasil ditambahkan.');
    }

    // Form edit jenis layanan
    public function edit($id)
    {
        $layanan = JenisLayanan::findOrFail($id);
        return view('AdminPage.jenisLayanan.edit', compact('layanan'));
    }

    // Update data jenis layanan
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'harga_sewa' => 'required|numeric|min:0',
            'satuan_sewa' => 'required|string|max:50',
            'beban_perbulan' => 'required|numeric|min:0',
        ]);

        $layanan = JenisLayanan::findOrFail($id);
        $layanan->update($request->all());

        return redirect()->route('admin.jenisLayanan.index')->with('success', 'Jenis layanan berhasil diperbarui.');
    }

    // Hapus data jenis layanan
    public function destroy($id)
    {
        $layanan = JenisLayanan::findOrFail($id);
        $layanan->delete();

        return redirect()->route('admin.jenisLayanan.index')->with('success', 'Jenis layanan berhasil dihapus.');
    }
}
