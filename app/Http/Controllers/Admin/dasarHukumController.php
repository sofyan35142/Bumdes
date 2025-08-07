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

        // Convert points (string JSON) jadi array
        if ($data && is_string($data->points)) {
            $data->points = json_decode($data->points, true);
        }

        return view('AdminPage.dasarHukum.index', compact('data'));
    }

    public function edit()
    {
        $data = DasarHukum::first();

        // Decode points jika masih string JSON
        if ($data && is_string($data->points)) {
            $decoded = json_decode($data->points, true);
            $data->points = is_array($decoded) ? $decoded : [];
        }

        return view('AdminPage.DasarHukum.edit', compact('data'));
    }


    public function update(Request $request)
    {

        // dd($request->all());
        $request->validate([
            'points' => 'nullable|array',
            'points.*.title' => 'nullable|string',
            'points.*.body' => 'nullable|string',

            'gambar_samping' => 'nullable|image|max:2048',

            'judul' => 'nullable|string',
            'sertifikat_list' => 'nullable|string',

            'gambar_buku' => 'nullable|image|max:2048',
            'sertifikat_file' => 'nullable|file|mimes:pdf|max:5120',
        ]);

        $data = DasarHukum::first();

        // Upload gambar_samping
        if ($request->hasFile('gambar_samping')) {
            $file = $request->file('gambar_samping');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('dasarhukum'), $filename);
            $data->gambar_samping = 'dasarhukum/' . $filename;
        }

        // Upload gambar_buku
        if ($request->hasFile('gambar_buku')) {
            $file = $request->file('gambar_buku');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('dasarhukum'), $filename);
            $data->gambar_buku = 'dasarhukum/' . $filename;
        }

        // Upload sertifikat_file
        if ($request->hasFile('sertifikat_file')) {
            $file = $request->file('sertifikat_file');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('dasarhukum'), $filename);
            $data->sertifikat_file = 'dasarhukum/' . $filename;
        }

        // Update data
        $data->update([
            'points' => json_encode($request->input('points_raw')),
            'judul' => $request->judul,
            'sertifikat_list' => $request->sertifikat_list,
            'gambar_samping' => $data->gambar_samping,
            'gambar_buku' => $data->gambar_buku,
            'sertifikat_file' => $data->sertifikat_file,
        ]);

        return redirect()->route('admin.dasarHukum')->with('success', 'Dasar Hukum berhasil diperbarui!');
    }
}
