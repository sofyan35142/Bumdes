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
        ], [
            'judul_lowongan.required' => 'Judul lowongan wajib diisi.',
            'judul_lowongan.string' => 'Judul lowongan harus berupa teks.',
            'judul_lowongan.max' => 'Judul lowongan tidak boleh lebih dari 255 karakter.',

            'deskripsi.required' => 'Deskripsi wajib diisi.',
            'tugas.required' => 'Tugas wajib diisi.',
            'kualifikasi.required' => 'Kualifikasi wajib diisi.',

            'tanggal_dibuka.required' => 'Tanggal dibuka wajib diisi.',
            'tanggal_dibuka.date' => 'Format tanggal dibuka tidak valid.',

            'tanggal_ditutup.required' => 'Tanggal ditutup wajib diisi.',
            'tanggal_ditutup.date' => 'Format tanggal ditutup tidak valid.',
            'tanggal_ditutup.after_or_equal' => 'Tanggal ditutup tidak boleh sebelum tanggal dibuka.',

            'lokasi.string' => 'Lokasi harus berupa teks.',

            'poster_lowongan.image' => 'File poster harus berupa gambar.',
            'poster_lowongan.mimes' => 'Poster harus berformat jpeg, png, atau jpg.',
            'poster_lowongan.max' => 'Ukuran poster tidak boleh lebih dari 2MB.',
        ]);

        $data = $request->except('poster_lowongan');

        if ($request->hasFile('poster_lowongan')) {
            // Path penyimpanan di public_html
            $uploadPath = base_path('../public_html/poster_lowongan');
            if (!file_exists($uploadPath)) {
                mkdir($uploadPath, 0755, true);
            }

            $file = $request->file('poster_lowongan');
            $filename = time() . '_' . md5($file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
            $file->move($uploadPath, $filename);

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
            'lokasi' => 'required|string',
            'poster_lowongan' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'judul_lowongan.required' => 'Judul lowongan wajib diisi.',
            'judul_lowongan.string' => 'Judul lowongan harus berupa teks.',
            'judul_lowongan.max' => 'Judul lowongan tidak boleh lebih dari 255 karakter.',

            'deskripsi.required' => 'Deskripsi wajib diisi.',
            'tugas.required' => 'Tugas wajib diisi.',
            'kualifikasi.required' => 'Kualifikasi wajib diisi.',

            'tanggal_dibuka.required' => 'Tanggal dibuka wajib diisi.',
            'tanggal_dibuka.date' => 'Format tanggal dibuka tidak valid.',

            'tanggal_ditutup.required' => 'Tanggal ditutup wajib diisi.',
            'tanggal_ditutup.date' => 'Format tanggal ditutup tidak valid.',
            'tanggal_ditutup.after_or_equal' => 'Tanggal ditutup tidak boleh sebelum tanggal dibuka.',

            'lokasi.required' => 'Lokasi wajib diisi.',
            'lokasi.string' => 'Lokasi harus berupa teks.',

            'poster_lowongan.image' => 'File poster harus berupa gambar.',
            'poster_lowongan.mimes' => 'Poster harus berformat jpeg, png, atau jpg.',
            'poster_lowongan.max' => 'Ukuran poster tidak boleh lebih dari 2MB.',
        ]);

        $data = $request->except('poster_lowongan');

        if ($request->hasFile('poster_lowongan')) {
            // Hapus file lama
            if ($lowongan->poster_lowongan && file_exists(public_path('poster_lowongan/' . $lowongan->poster_lowongan))) {
                unlink(public_path('poster_lowongan/' . $lowongan->poster_lowongan));
            }

            // Upload file baru
            $file = $request->file('poster_lowongan');
            $filename = time() . '_' . md5($file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('poster_lowongan'), $filename);

            $data['poster_lowongan'] = $filename;
        }

        // Update data di database
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
