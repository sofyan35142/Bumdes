<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\GaleryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str; // Tambahkan di atas controller

class GaleryController extends Controller
{
    public function galery()
    {
        $galerys = GaleryModel::all();
        // Logic to display the gallery
        return view('AdminPage.Galery.Galery', compact('galerys'));
    }

    public function tambahgalery()
    {
        // Logic to show the form for adding a new gallery item
        return view('AdminPage.Galery.tambahGalery');
    }

    public function insertgalery(Request $request)
    {
        $request->validate([
            'tipe' => 'required|in:foto,video',
            // 'nama_kegiatan' => 'required|string|max:255',
            'link_video' => 'required_if:tipe,video|nullable|url|max:255',
            // 'foto_path.*' => 'required_if:tipe,foto|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'link_video.required_if' => 'Link video wajib diisi jika tipe video.',
            // 'foto_path.*.required_if' => 'Foto wajib diupload jika tipe foto.',
        ]);

        if ($request->tipe === 'video') {
            GaleryModel::create([
                'tipe' => 'video',
                'nama_kegiatan_video' => $request->nama_kegiatan_video,
                'link_video' => $request->link_video,
                'foto_path' => null,
            ]);
        } elseif ($request->tipe === 'foto') {
            if ($request->hasFile('foto_path')) {
                // Tentukan folder upload di public_html
                $uploadPath = base_path('../public_html/Galery');
                if (!file_exists($uploadPath)) {
                    mkdir($uploadPath, 0755, true);
                }

                foreach ($request->file('foto_path') as $file) {
                    // buat nama unik
                    $filename = time() . '_' . Str::uuid() . '.' . $file->getClientOriginalExtension();

                    // simpan file ke folder upload
                    $file->move($uploadPath, $filename);

                    GaleryModel::create([
                        'tipe' => 'foto',
                        'nama_kegiatan_foto' => $request->nama_kegiatan_foto,
                        'link_video' => null,
                        'foto_path' => $filename,
                    ]);
                }
            } else {
                return back()
                    ->withErrors(['foto_path' => 'Minimal satu foto harus diupload.'])
                    ->withInput();
            }
        }
        // Redirect ke halaman galeri dengan pesan sukses
        return redirect()->route('admin.galery')->with('success', 'Gallery item added successfully.');
    }

    public function editgalery($id)
    {
        $item = GaleryModel::findOrFail($id);
        return view('AdminPage.Galery.editGalery', compact('item', 'id'));
    }

    public function updategalery(Request $request, $id)
    {
        $request->validate([
            'tipe' => 'required|in:foto,video',
            'link_video' => 'required_if:tipe,video|nullable|url|max:255',
        ], [
            'link_video.required_if' => 'Link video wajib diisi jika tipe video.',
        ]);

        $galery = GaleryModel::findOrFail($id);

        // Tentukan folder upload di public_html
        $uploadPath = base_path('../public_html/Galery');
        if (!file_exists($uploadPath)) {
            mkdir($uploadPath, 0755, true);
        }

        if ($request->tipe === 'video') {
            $galery->update([
                'tipe' => 'video',
                'nama_kegiatan_video' => $request->nama_kegiatan_video,
                'link_video' => $request->link_video,
                'foto_path' => null,
            ]);
        } elseif ($request->tipe === 'foto') {
            $updateData = [
                'tipe' => 'foto',
                'nama_kegiatan_foto' => $request->nama_kegiatan_foto,
                'link_video' => null,
            ];

            // Kalau ada file baru, ganti foto lama
            if ($request->hasFile('foto_path')) {
                // Hapus foto lama jika ada
                if ($galery->foto_path && file_exists($uploadPath . '/' . $galery->foto_path)) {
                    @unlink($uploadPath . '/' . $galery->foto_path);
                }

                $file = $request->file('foto_path')[0]; // ambil file pertama
                $filename = time() . '_' . \Illuminate\Support\Str::uuid() . '.' . $file->getClientOriginalExtension();
                $file->move($uploadPath, $filename);

                $updateData['foto_path'] = $filename;
            }

            // Update data
            $galery->update($updateData);
        }


        return redirect()->route('admin.galery')->with('success', 'Data galeri berhasil diupdate.');
    }

    public function deletegalery($id)
    {
        $galery = GaleryModel::findOrFail($id);

        // Tentukan folder upload di public_html
        $uploadPath = base_path('../public_html/Galery');

        // Hapus foto dari folder jika ada
        if ($galery->foto_path && file_exists($uploadPath . '/' . $galery->foto_path)) {
            @unlink($uploadPath . '/' . $galery->foto_path);
        }

        // Hapus data dari database
        $galery->delete();

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Data galeri berhasil dihapus.');

        return redirect()->route('admin.galery')->with('success', 'Galeri berhasil dihapus.');
    }
}
