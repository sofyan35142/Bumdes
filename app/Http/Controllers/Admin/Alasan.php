<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AlasanMemilihBumdes;

class Alasan extends Controller
{
    public function index()
    {
        $alasan = AlasanMemilihBumdes::all();
        return view('AdminPage.alasan.index', compact('alasan'));
    }

    public function edit($id)
    {
        $alasan = AlasanMemilihBumdes::findOrFail($id);
        return view('AdminPage.alasan.edit', compact('alasan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'ikon' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        $alasan = AlasanMemilihBumdes::findOrFail($id);

        $alasan->update([
            'judul' => $request->judul,
            'ikon' => $request->ikon,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('admin.alasan.index')->with('success', 'Data alasan berhasil diperbarui.');
    }
}
