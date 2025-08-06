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
        $request->validate([
            'nama' => 'required',
            'keterangan' => 'required',
            'deskripsi_testimonial' => 'required',
            'rating' => 'required|numeric|min:1|max:5',
            'foto_testimonial' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $testimonial = new Testi;
        $testimonial->nama = $request->nama;
        $testimonial->keterangan = $request->keterangan;
        $testimonial->deskripsi_testimonial = $request->deskripsi_testimonial;
        $testimonial->rating = $request->rating;
        $testimonial->status = 0; // default pending

        if ($request->hasFile('foto_testimonial')) {
            $file = $request->file('foto_testimonial');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('Testimonial'), $filename);
            $testimonial->foto_testimonial = $filename;
        }
        $testimonial->save();
        
        return redirect('admin/testimonial/testimonial')->with('success', 'Data berhasil ditambahkan');
    }
    public function accept($id){
        $testimonial = Testi::where('id', $id)->first();
        $testimonial->status = 1;
        $testimonial->save();
   return redirect('admin/testimonial')->with('success', 'Data berhasil diaccept');

    }
}
