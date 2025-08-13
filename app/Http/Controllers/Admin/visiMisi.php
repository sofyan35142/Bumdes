<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VisiMisi as VisiMisiModel;

class visiMisi extends Controller
{
    public function index()
    {
        $data = VisiMisiModel::first();
        return view('AdminPage.visiMisi.index', compact('data'));
    }


    public function editForm()
    {
        $data = VisiMisiModel::first();
        return view('AdminPage.visiMisi.edit', compact('data'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'visi' => 'nullable|string',
            'misi_raw' => 'nullable|array',
            'tujuan_raw' => 'nullable|array',
            'gambar_visi_misi' => 'nullable|image|max:2048',
            'judul_panduan' => 'nullable|string',
            'poin_panduan_raw' => 'nullable|array',
            'gambar_panduan' => 'nullable|image|max:2048',
            'file_panduan' => 'nullable|file|mimes:pdf,doc,docx|max:5120',
        ]);

        $data = VisiMisiModel::first();

        // Lokasi folder upload di luar Laravel
        $uploadPath = base_path('../public_html/visimisi');

        // Buat folder jika belum ada
        if (!file_exists($uploadPath)) {
            mkdir($uploadPath, 0755, true);
        }

        // Upload gambar visi misi
        if ($request->hasFile('gambar_visi_misi')) {
            // Hapus file lama jika ada
            if (!empty($data->gambar_visi_misi) && file_exists(base_path('../public_html/' . $data->gambar_visi_misi))) {
                unlink(base_path('../public_html/' . $data->gambar_visi_misi));
            }

            $file = $request->file('gambar_visi_misi');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move($uploadPath, $filename);
            $data->gambar_visi_misi = 'visimisi/' . $filename;
        }

        // Upload gambar panduan
        if ($request->hasFile('gambar_panduan')) {
            if (!empty($data->gambar_panduan) && file_exists(base_path('../public_html/' . $data->gambar_panduan))) {
                unlink(base_path('../public_html/' . $data->gambar_panduan));
            }

            $file = $request->file('gambar_panduan');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move($uploadPath, $filename);
            $data->gambar_panduan = 'visimisi/' . $filename;
        }

        // Upload file panduan
        if ($request->hasFile('file_panduan')) {
            if (!empty($data->file_panduan) && file_exists(base_path('../public_html/' . $data->file_panduan))) {
                unlink(base_path('../public_html/' . $data->file_panduan));
            }

            $file = $request->file('file_panduan');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move($uploadPath, $filename);
            $data->file_panduan = 'visimisi/' . $filename;
        }

        // Convert repeatable fields ke array
        $misi = collect($request->input('misi_raw'))->pluck('value')->toArray();
        $tujuan = collect($request->input('tujuan_raw'))->pluck('value')->toArray();
        $poin = collect($request->input('poin_panduan_raw'))->pluck('value')->toArray();

        // Update database
        $data->update([
            'visi' => $request->visi,
            'misi' => $misi,
            'tujuan' => $tujuan,
            'poin_panduan' => $poin,
            'judul_panduan' => $request->judul_panduan,
            'gambar_visi_misi' => $data->gambar_visi_misi,
            'gambar_panduan' => $data->gambar_panduan,
            'file_panduan' => $data->file_panduan,
        ]);

        return redirect()->route('admin.visiMisi')->with('success', 'Data berhasil diperbarui!');
    }
}
