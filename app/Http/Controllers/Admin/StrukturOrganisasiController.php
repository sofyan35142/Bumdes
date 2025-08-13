<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StrukturOrganisasi;
use Illuminate\Support\Facades\File;

class StrukturOrganisasiController extends Controller
{
    public function index()
    {
        $data = StrukturOrganisasi::orderBy('urutan')->get();
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
            // Path dinamis
            if (app()->environment('local')) {
                $destinationPath = public_path('struktur');
                $publicBasePath = public_path();
            } else {
                $destinationPath = base_path('../public_html/struktur');
                $publicBasePath = base_path('../public_html');
            }

            // Pastikan folder ada
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            $file = $request->file('foto');
            $filename = $file->getClientOriginalName();
            $file->move($destinationPath, $filename);

            $path = 'struktur/' . $filename;
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

        // Path dinamis
        if (app()->environment('local')) {
            $destinationPath = public_path('struktur');
            $publicBasePath = public_path();
        } else {
            $destinationPath = base_path('../public_html/struktur');
            $publicBasePath = base_path('../public_html');
        }

        if ($request->hasFile('foto')) {
            // Hapus foto lama
            if ($fotoLama && file_exists($publicBasePath . '/' . $fotoLama)) {
                unlink($publicBasePath . '/' . $fotoLama);
            }

            // Simpan foto baru
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move($destinationPath, $filename);
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

            // Path dinamis
            if (app()->environment('local')) {
                $publicBasePath = public_path();
            } else {
                $publicBasePath = base_path('../public_html');
            }

            // Hapus file jika ada
            if ($data->foto && file_exists($publicBasePath . '/' . $data->foto)) {
                unlink($publicBasePath . '/' . $data->foto);
            }

            // Hapus dari database
            $data->delete();

            return back()->with('success', 'Data dan file berhasil dihapus');
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan saat menghapus data');
        }
    }
}
