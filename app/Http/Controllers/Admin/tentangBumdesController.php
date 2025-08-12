<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\TentangBumdes;
use App\Http\Controllers\Controller;

class tentangBumdesController extends Controller
{
    public function index()
    {
        // Ambil data pertama (anggap cuma 1 row saja)
        $data = TentangBumdes::first();
        return view('AdminPage.tentangbumdes.index', compact('data'));
    }

    public function edit()
    {
        $data = TentangBumdes::first();
        return view('AdminPage.tentangbumdes.edit', compact('data'));
    }

    public function update(Request $request)
    {
        $data = TentangBumdes::first();

        $request->validate([
            'gambar_1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'gambar_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'gambar_3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'gambar_4' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string|max:255',
            'deskripsi_singkat' => 'required|string',
            'points' => 'nullable|array',
            'points.*.title' => 'required_with:points|string',
            'points.*.subtitle' => 'required_with:points|string',
        ]);

        for ($i = 1; $i <= 4; $i++) {
            $field = 'gambar_' . $i;
            if ($request->hasFile($field)) {
                // Hapus file lama jika ada dan file benar-benar ada di folder public
                if ($data->$field && file_exists(public_path($data->$field))) {
                    unlink(public_path($data->$field));
                }

                $file = $request->file($field);
                $filename = time() . "_{$field}." . $file->getClientOriginalExtension();
                $file->move(public_path('tentangbumdes'), $filename);

                $data->$field = 'tentangbumdes/' . $filename;
            }
        }

        $data->title = $request->title;
        $data->deskripsi_singkat = $request->deskripsi_singkat;
        $data->points = $request->points ?? [];

        $data->save();

        return redirect()->route('admin.tentangbumdes.index')->with('success', 'Data berhasil diperbarui.');
    }
}
