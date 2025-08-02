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

        if ($request->hasFile('gambar_visi_misi')) {
            $file = $request->file('gambar_visi_misi');
            $originalName = $file->getClientOriginalName();
            $file->move(public_path('visimisi'), $originalName);
            $data->gambar_visi_misi = 'visimisi/' . $originalName;
        }

        if ($request->hasFile('gambar_panduan')) {
            $file = $request->file('gambar_panduan');
            $originalName = $file->getClientOriginalName();
            $file->move(public_path('visimisi'), $originalName);
            $data->gambar_panduan = 'visimisi/' . $originalName;
        }

        if ($request->hasFile('file_panduan')) {
            $file = $request->file('file_panduan');
            $originalName = $file->getClientOriginalName();
            $file->move(public_path('visimisi'), $originalName);
            $data->file_panduan = 'visimisi/' . $originalName;
        }

        // Convert repeatable fields to array
        $misi = collect($request->input('misi_raw'))->pluck('value')->toArray();
        $tujuan = collect($request->input('tujuan_raw'))->pluck('value')->toArray();
        $poin = collect($request->input('poin_panduan_raw'))->pluck('value')->toArray();

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
