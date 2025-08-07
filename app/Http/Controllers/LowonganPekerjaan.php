<?php

namespace App\Http\Controllers;

use App\Models\LowonganPekerjaan as ModelsLowonganPekerjaan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class LowonganPekerjaan extends Controller
{
    public function lowongan()
    {
        $lowongan = ModelsLowonganPekerjaan::latest()->get();
        return view('AdminPage.Lowongan.Lowongan', compact('lowongan'));
    }

    public function tambahlowongan()
    {
        return view('AdminPage.Lowongan.tambahlowongan');
    }

    public function insertlowongan(Request $request)
    {
         $request->validate([
            'judul_lowongan' => 'required|string|max:255',
            'deskripsi' => 'required',
            'tugas' => 'required',
            'kualifikasi' => 'required',
            'tanggal_dibuka' => 'required|date',
            'tanggal_ditutup' => 'required|date|after_or_equal:tanggal_dibuka',
            'lokasi' => 'nullable|string',
            'poster_lowongan' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->all();

        // upload gambar jika ada
        if ($request->hasFile('poster_lowongan')) {
            $file = $request->file('poster_lowongan');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('poster_lowongan'), $filename);
            $data['poster_lowongan'] = $filename;
        }

        ModelsLowonganPekerjaan::create($data);

        return redirect()->route('admin.lowongan')->with('success', 'Lowongan berhasil ditambahkan.');
    }

    public function editlowongan($id)
    {
        $lowongan = ModelsLowonganPekerjaan::findOrFail($id);
        return view('AdminPage.Lowongan.editlowongan', compact('lowongan'));
    }

    public function updatelowongan(Request $request, $id)
    {
         $lowongan = ModelsLowonganPekerjaan::findOrFail($id);

        $request->validate([
            'judul_lowongan' => 'required|string|max:255',
            'deskripsi' => 'required',
            'tugas' => 'required',
            'kualifikasi' => 'required',
            'tanggal_dibuka' => 'required|date',
            'tanggal_ditutup' => 'required|date|after_or_equal:tanggal_dibuka',
            'lokasi' => 'nullable|string',
            'poster_lowongan' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('poster_lowongan')) {
            $file = $request->file('poster_lowongan');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('poster_lowongan'), $filename);
            $data['poster_lowongan'] = $filename;
        }

        $lowongan->update($data);

        return redirect()->route('admin.lowongan')->with('success', 'Lowongan berhasil diperbarui.');
    }

    public function hapuslowongan($id)
    {
        $lowongan = ModelsLowonganPekerjaan::findOrFail($id);
        $lowongan->delete();

        return redirect()->route('admin.lowongan')->with('success', 'Lowongan berhasil dihapus.');
    }
}
