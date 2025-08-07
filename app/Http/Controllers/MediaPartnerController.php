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
            $namaMedia = $item['Nama_Media'];
            $logoFile = $request->file("group-a.$key.Logo_Media");

            if ($logoFile) {
                $filename = time() . '_' . $logoFile->getClientOriginalName();
                $logoFile->move(public_path('Media Partner'), $filename);
            } else {
                $filename = null;
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

    // Jika ada file logo baru
    if ($request->hasFile('Logo_Media')) {
        // Hapus logo lama jika ada
        if ($mediapartner->Logo_Media && file_exists(public_path('uploads/mediapartner/' . $mediapartner->Logo_Media))) {
            unlink(public_path('uploads/mediapartner/' . $mediapartner->Logo_Media));
        }

        // Upload logo baru
        $file = $request->file('Logo_Media');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('Media Partner'), $filename);

        $mediapartner->Logo_Media = $filename;
    }

    $mediapartner->save();

    return redirect()->route('admin.mediapartner')->with('success', 'Media Partner berhasil diupdate!');
    }

    public function hapusmediapartner($id)
    {
        $mediapartner = MediaPartner::findOrFail($id);

    // Hapus file gambar dari folder jika ada
    $logoPath = public_path('Media Partner/' . $mediapartner->Logo_Media);
    if (File::exists($logoPath)) {
        File::delete($logoPath);
    }

    // Hapus data dari database
    $mediapartner->delete();

    return redirect()->route('admin.mediapartner')->with('success', 'Media Partner berhasil dihapus.');
    }
}
