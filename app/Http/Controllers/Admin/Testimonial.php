<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial as Testi;

class Testimonial extends Controller
{
    public function testimonial()
    {
        $testimonial = Testi::all();
        return view('AdminPage.Testimonial.testimonial', compact('testimonial'));
    }
    public function create()
    {
        return view('AdminPage.Testimonial.create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        // $request->validate([
        //     'nama' => 'required',
        //     'keterangan' => 'required',
        //     'deskripsi_testimonial' => 'required',
        //     'nomor_telepone' => 'required',
        //     'foto_testimonial' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        // ]);
        $request->validate([
            'nama' => 'required|string|max:255',
            'keterangan' => 'required|string|max:255',
            'deskripsi_testimonial' => 'required|string|max:1000',
            'nomor_telepone' => 'required|numeric',
            'foto_testimonial' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $testimonial = new Testi;
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
        
        return redirect('/FormTestimonial')->with('success', 'Data berhasil ditambahkan');
    }
    public function accept($id)
    {
        $testimonial = Testi::where('id', $id)->first();
        $testimonial->status = 1;
        $testimonial->save();
        return redirect('admin/testimonial')->with('success', 'Data berhasil diaccept');
    }
    public function reject($id)
    {
        $testimonial = Testi::where('id', $id)->first();
        $testimonial->status = 2; // 2 berarti 'ditolak'
        $testimonial->save();

        return redirect('admin/testimonial')->with('success', 'Testimoni berhasil ditolak.');
    }

    public function delete($id)
    {
        $testimonial = Testi::findOrFail($id);
        // Hapus file gambar dari folder jika ada
        if ($testimonial->foto_testimonial && file_exists(public_path('Testimonial/' . $testimonial->foto_testimonial))) {
            unlink(public_path('Testimonial/' . $testimonial->foto_testimonial));
        }
        $testimonial->delete();
        return redirect('/admin/testimonial')->with('success', 'Data berhasil dihapus');
    }
}
