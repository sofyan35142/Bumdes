<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function testimonial()
    {
        $testimonial = Testimonial::all();
        return view('AdminPage.Testimonial.testimonial', compact('testimonial'));
    }
    public function create()
    {
        return view('AdminPage.Testimonial.create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nama' => 'required|string|max:255',
            'keterangan' => 'required|string|max:255',
            'deskripsi_testimonial' => 'required|string|max:1000',
            'nomor_telepone' => 'required|numeric',
            'foto_testimonial' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ], [
            'nama.required' => 'Nama wajib diisi.',
            'nama.string' => 'Nama harus berupa teks.',
            'nama.max' => 'Nama maksimal 255 karakter.',

            'keterangan.required' => 'Keterangan wajib diisi.',
            'keterangan.string' => 'Keterangan harus berupa teks.',
            'keterangan.max' => 'Keterangan maksimal 255 karakter.',

            'deskripsi_testimonial.required' => 'Deskripsi testimonial wajib diisi.',
            'deskripsi_testimonial.string' => 'Deskripsi testimonial harus berupa teks.',
            'deskripsi_testimonial.max' => 'Deskripsi testimonial maksimal 1000 karakter.',

            'nomor_telepone.required' => 'Nomor telepon wajib diisi.',
            'nomor_telepone.numeric' => 'Nomor telepon harus berupa angka.',

            'foto_testimonial.required' => 'Foto testimonial wajib diunggah.',
            'foto_testimonial.image' => 'File harus berupa gambar.',
            'foto_testimonial.mimes' => 'Foto harus berformat jpeg, png, atau jpg.',
            'foto_testimonial.max' => 'Ukuran foto maksimal 2MB.'
        ]);


        $testimonial = new Testimonial;
        $testimonial->nama = $request->nama;
        $testimonial->keterangan = $request->keterangan;
        $testimonial->deskripsi_testimonial = $request->deskripsi_testimonial;
        $testimonial->nomor_telepone = $request->nomor_telepone;
        $testimonial->status = 0; // default pending

        if ($request->hasFile('foto_testimonial')) {
            $file = $request->file('foto_testimonial');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('Testimonial'), $filename);
            $testimonial->foto_testimonial = $filename;
        }
        $testimonial->save();

        return response()->json(['message' => 'Testimonial berhasil disimpan']);
        // return redirect('/FormTestimonial')->with('success', 'Data berhasil ditambahkan');
    }
    public function accept($id)
    {
        $testimonial = Testimonial::where('id', $id)->first();
        $testimonial->status = 1;
        $testimonial->save();
        return redirect('admin/testimonial')->with('success', 'Data berhasil diaccept');
    }
    public function reject($id)
    {
        $testimonial = Testimonial::where('id', $id)->first();
        $testimonial->status = 2; // 2 berarti 'ditolak'
        $testimonial->save();

        return redirect('admin/testimonial')->with('success', 'Testimoni berhasil ditolak.');
    }

    public function delete($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        // Hapus file gambar dari folder jika ada
        if ($testimonial->foto_testimonial && file_exists(public_path('Testimonial/' . $testimonial->foto_testimonial))) {
            unlink(public_path('Testimonial/' . $testimonial->foto_testimonial));
        }
        $testimonial->delete();
        return redirect('/admin/testimonial')->with('success', 'Data berhasil dihapus');
    }
}
