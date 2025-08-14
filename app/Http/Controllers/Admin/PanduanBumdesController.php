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
        $data = PanduanBumdes::firstOrFail(); // asumsinya data cuma 1

        // Validasi
        $request->validate([
            'judul' => 'required|string|max:255',
            'points' => 'required|string',
            'file_ebook' => 'nullable|file|mimes:pdf|max:2048',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);



        $fileEbook = $data->file_ebook;
        $gambar = $data->gambar;

        if (app()->environment('local')) {
            $uploadPath = public_path('panduan_bumdes');
        } else {
            $uploadPath = base_path('../public_html/panduan_bumdes');
        }

        // Handle upload e-book baru
        if ($request->hasFile('file_ebook')) {
            $file = $request->file('file_ebook');
            $fileEbook = time() . '_' . $file->getClientOriginalName();
            $file->move($uploadPath, $fileEbook);
        }

        // Handle upload gambar baru
        if ($request->hasFile('gambar')) {
            $img = $request->file('gambar');
            $gambar = time() . '_' . $img->getClientOriginalName();
            $img->move($uploadPath, $gambar);
        }

        // Update ke database
        $data->update([
            'judul' => $request->input('judul'),
            'points' => $request->input('points'),
            'file_ebook' => $fileEbook,
            'gambar' => $gambar,
        ]);

        return redirect()->route('admin.bookPanduan.index')->with('success', 'Data Panduan berhasil diperbarui.');
    }
}
