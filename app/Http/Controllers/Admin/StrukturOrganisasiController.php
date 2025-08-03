<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StrukturOrganisasi;
use Illuminate\Support\Facades\File; // Atau use Storage jika pakai Storage facade

class StrukturOrganisasiController extends Controller
{
    public function index()
    {
        $data = StrukturOrganisasi::orderBy('urutan')->get();
        // dd($data);
        return view('AdminPage.struktur.index', compact('data'));
    }

    public function create()
    {
        return view('AdminPage.struktur.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'foto' => 'nullable|image|max:2048',
            'urutan' => 'nullable|integer',
        ]);

        $path = null;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = $file->getClientOriginalName(); // tidak di-hash
            $destinationPath = public_path('struktur');

            // pastikan folder public/struktur ada
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            $file->move($destinationPath, $filename);
            $path = 'struktur/' . $filename; // ini akan disimpan di database
        }

        StrukturOrganisasi::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'foto' => $path,
            'urutan' => $request->urutan ?? 0,
        ]);

        return redirect()->route('admin.struktur.index')->with('success', 'Data berhasil ditambahkan');
    }


    public function edit($id)
    {
        $data = StrukturOrganisasi::findOrFail($id);
        return view('AdminPage.struktur.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = StrukturOrganisasi::findOrFail($id);

        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'foto' => 'nullable|image|max:2048',
            'urutan' => 'nullable|integer',
        ]);

        $fotoLama = $data->foto;

        if ($request->hasFile('foto')) {
            // Hapus foto lama kalau ada
            if ($fotoLama && file_exists(public_path($fotoLama))) {
                unlink(public_path($fotoLama));
            }

            // Simpan foto baru ke public/struktur
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('struktur'), $filename);
            $pathBaru = 'struktur/' . $filename;
        } else {
            $pathBaru = $fotoLama;
        }

        $data->update([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'urutan' => $request->urutan ?? 0,
            'foto' => $pathBaru,
        ]);

        return redirect()->route('admin.struktur.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        try {
            $data = StrukturOrganisasi::findOrFail($id);

            // Hapus file jika ada
            if ($data->foto && File::exists(public_path($data->foto))) {
                File::delete(public_path($data->foto));
            }

            // Hapus dari database
            $data->delete();

            return back()->with('success', 'Data dan file berhasil dihapus');
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan saat menghapus data');
        }
    }
}
