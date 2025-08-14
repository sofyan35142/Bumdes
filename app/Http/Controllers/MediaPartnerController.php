<?php

namespace App\Http\Controllers;

use App\Models\MediaPartner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MediaPartnerController extends Controller
{
    public function mediapartner()
    {
        $mediapartners = MediaPartner::latest()->get();
        return view('AdminPage.Home.MediaPartner.mediapartner', compact('mediapartners'));
    }

    public function tambahmediapartner()
    {
        // Logic to show form for adding a new media partner
        return view('AdminPage.Home.MediaPartner.tambahmediapartner');
    }

    public function insertmediapartner(Request $request)
    {
        // dd($request->all());
        $group = $request->input('group-a');

        if ($group && is_array($group)) {
            foreach ($group as $key => $item) {
                $namaMedia = $item['Nama_Media'] ?? null;
                $logoFile = $request->file("group-a.$key.Logo_Media");

                $filename = null;

                if ($logoFile) {
                    // Validasi file
                    $request->validate([
                        "group-a.$key.Logo_Media" => 'image|mimes:jpeg,png,jpg|max:2048'
                    ], [
                        "group-a.$key.Logo_Media.image" => 'File logo harus berupa gambar.',
                        "group-a.$key.Logo_Media.mimes" => 'Logo harus berformat jpeg, png, atau jpg.',
                        "group-a.$key.Logo_Media.max"   => 'Ukuran logo tidak boleh lebih dari 2MB.',
                    ]);

                    // Pastikan folder ada
                    $folderPath = public_path('Media Partner');
                    if (!file_exists($folderPath)) {
                        mkdir($folderPath, 0777, true);
                    }

                    // Nama file unik
                    $filename = time() . '_' . uniqid() . '.' . $logoFile->getClientOriginalExtension();
                    $logoFile->move($folderPath, $filename);
                }

                MediaPartner::create([
                    'Nama_Media' => $namaMedia,
                    'Logo_Media' => $filename,
                ]);
            }
        }

        return redirect()->route('admin.mediapartner')->with('success', 'Media partner berhasil disimpan.');
    }

    public function editmediapartner($id)
    {
        $mediapartner = MediaPartner::findOrFail($id);
        return view('AdminPage.Home.MediaPartner.editmediapartner', compact('mediapartner'));
    }

    public function updatemediapartner(Request $request, $id)
    {
        $request->validate([
            'Nama_Media' => 'required|string|max:255',
            'Logo_Media' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $mediapartner = MediaPartner::findOrFail($id);
        $mediapartner->Nama_Media = $request->Nama_Media;

        $folderPath = public_path('uploads/mediapartner');

        // Pastikan folder ada
        if (!file_exists($folderPath)) {
            mkdir($folderPath, 0777, true);
        }

        if ($request->hasFile('Logo_Media')) {
            // Hapus logo lama jika ada
            if ($mediapartner->Logo_Media && file_exists($folderPath . '/' . $mediapartner->Logo_Media)) {
                unlink($folderPath . '/' . $mediapartner->Logo_Media);
            }

            // Upload logo baru
            $file = $request->file('Logo_Media');
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move($folderPath, $filename);

            $mediapartner->Logo_Media = $filename;
        }

        $mediapartner->save();

        return redirect()->route('admin.mediapartner')->with('success', 'Media Partner berhasil diupdate!');
    }

    public function hapusmediapartner($id)
    {
        $mediapartner = MediaPartner::findOrFail($id);
        // Hapus file gambar dari folder jika ada
        if (!empty($mediapartner->Logo_Media)) {
            $logoPath = public_path('uploads/mediapartner/' . $mediapartner->Logo_Media);
            if (File::exists($logoPath)) {
                File::delete($logoPath);
            }
        }

        // Hapus data dari database
        $mediapartner->delete();
        return redirect()->route('admin.mediapartner')->with('success', 'Media Partner berhasil dihapus.');
    }
}
