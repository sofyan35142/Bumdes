<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DasarHukum;

class DasarHukumController extends Controller
{
    public function index()
    {
        $data = DasarHukum::first();
        return view('AdminPage.dasarHukum.index', compact('data'));
    }

    public function editForm()
    {
        $data = DasarHukum::first();
        return view('AdminPage.dasarHukum.edit', compact('data'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'points' => 'nullable|array',
            'points.*.title' => 'nullable|string',
            'points.*.body' => 'nullable|string',
            'gambar_samping' => 'nullable|image|max:2048',
            'panduan_judul' => 'nullable|string',
            'panduan_list' => 'nullable|string',
            'gambar_panduan' => 'nullable|image|max:2048',
            'panduan_file' => 'nullable|file|mimes:pdf|max:5120',
        ]);

        $data = DasarHukum::first();

        if ($request->hasFile('gambar_samping')) {
            $file = $request->file('gambar_samping');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('dasarhukum'), $filename);
            $data->gambar_samping = 'dasarhukum/' . $filename;
        }

        if ($request->hasFile('gambar_panduan')) {
            $file = $request->file('gambar_panduan');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('dasarhukum'), $filename);
            $data->gambar_panduan = 'dasarhukum/' . $filename;
        }

        if ($request->hasFile('panduan_file')) {
            $file = $request->file('panduan_file');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('dasarhukum'), $filename);
            $data->panduan_file = 'dasarhukum/' . $filename;
        }

        $data->update([
            'points' => json_encode($request->input('points')),
            'panduan_judul' => $request->panduan_judul,
            'panduan_list' => $request->panduan_list,
            'gambar_samping' => $data->gambar_samping,
            'gambar_panduan' => $data->gambar_panduan,
            'panduan_file' => $data->panduan_file,
        ]);

        return redirect()->route('admin.visiMisi')->with('success', 'Dasar Hukum berhasil diperbarui!');
    }
}
