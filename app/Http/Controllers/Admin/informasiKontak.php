<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\InformasiKontak as InformasiKontakModel;
use App\Http\Controllers\Controller;

class informasiKontak extends Controller
{
    public function index()
    {
        $kontak = InformasiKontakModel::first();
        return view('AdminPage.contact.index', compact('kontak'));
    }

    public function edit()
    {
        $kontak = InformasiKontakModel::first();
        return view('AdminPage.contact.edit', compact('kontak'));
    }

    public function update(Request $request)
    {
        // dd($request->all());
        $kontak = InformasiKontakModel::first();

        $request->validate([
            'alamat' => 'nullable|string',
            'email' => 'nullable|email',
            'telepon' => 'nullable|string',
            'iframe_maps' => 'nullable|url',
        ]);

        $kontak->update($request->all());

        return redirect()->route('admin.contact.index')->with('success', 'Informasi kontak berhasil diperbarui.');
    }
}
