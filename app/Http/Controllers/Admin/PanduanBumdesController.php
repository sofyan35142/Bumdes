<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\PanduanBumdes;
use App\Http\Controllers\Controller;

class PanduanBumdesController extends Controller
{
    // Tampilkan halaman Book Panduan
    public function index()
    {
        $data = PanduanBumdes::first(); // diasumsikan hanya 1 data
        // dd($data);
        return view('AdminPage.Home.BookPanduan.index', compact('data'));
    }

    // Halaman edit
    public function edit()
    {
        $data = PanduanBumdes::first(); // diasumsikan hanya 1 data
        return view('AdminPage.Home.BookPanduan.edit', compact('data'));
    }

    // Update data
    public function update(Request $request)
    {
        $data = PanduanBumdes::firstOrFail();

        // Validasi
        $request->validate([
            'judul' => 'required|string|max:255',
            'points' => 'required|string',
            'file_ebook' => 'nullable|file|mimes:pdf',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        $fileEbook = $data->file_ebook;
        $gambar = $data->gambar;

        if (app()->environment('local')) {
            $uploadPath = public_path('panduan_bumdes');
        } else {
            $uploadPath = base_path('../public_html/panduan_bumdes');
        }

        if (!file_exists($uploadPath)) {
            mkdir($uploadPath, 0755, true);
        }

        // Upload file ebook baru
        if ($request->hasFile('file_ebook')) {
            // Hapus file lama jika ada
            if ($fileEbook && file_exists(public_path($fileEbook))) {
                unlink(public_path($fileEbook));
            }

            $file = $request->file('file_ebook');
            $fileEbook = 'panduan_bumdes/' . $file->getClientOriginalName();
            $file->move($uploadPath, $file->getClientOriginalName());
        }

        // Upload gambar baru
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($gambar && file_exists(public_path($gambar))) {
                unlink(public_path($gambar));
            }

            $img = $request->file('gambar');
            $gambar = 'panduan_bumdes/' . $img->getClientOriginalName();
            $img->move($uploadPath, $img->getClientOriginalName());
        }

        // Update data di DB
        $data->update([
            'judul' => $request->input('judul'),
            'points' => $request->input('points'),
            'file_ebook' => $fileEbook,
            'gambar' => $gambar,
        ]);
        
        return redirect()->route('admin.bookPanduan.index')->with('success', 'Data Panduan berhasil diperbarui.');
    }
}
