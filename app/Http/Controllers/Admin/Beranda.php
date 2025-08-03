<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SambutanDirektur;
use App\Models\slider;
use Illuminate\Http\Request;

class Beranda extends Controller
{
    public function beranda()
    {
        return view('AdminPage.beranda');
    }


    //////////////////////////// S L I D E R ////////////////////////////////////////
    public function slider()
    {
        $slider = slider::all();
        return view('AdminPage.Home.Slider.slider', compact('slider'));
    }
    public function editslider($id)
    {
        $data = slider::findOrFail($id);
        return view('AdminPage.Home.Slider.editslider', compact('data'));
    }

    public function updateslider(Request $request, $id)
    {
        $data = slider::findOrFail($id);

        // Ambil nama file lama
        $foto1 = $data->foto_slider1;
        $foto2 = $data->foto_slider2;
        $foto3 = $data->foto_slider3;

        // Proses upload jika ada file baru
        if ($request->hasFile('foto_slider1')) {
            $file = $request->file('foto_slider1');
            $foto1 = time() . '_1_' . $file->getClientOriginalName();
            $file->move(public_path('Foto Slider'), $foto1);
        }

        if ($request->hasFile('foto_slider2')) {
            $file = $request->file('foto_slider2');
            $foto2 = time() . '_2_' . $file->getClientOriginalName();
            $file->move(public_path('Foto Slider'), $foto2);
        }

        if ($request->hasFile('foto_slider3')) {
            $file = $request->file('foto_slider3');
            $foto3 = time() . '_3_' . $file->getClientOriginalName();
            $file->move(public_path('Foto Slider'), $foto3);
        }

        // Simpan update ke database
        $data->update([
            'foto_slider1' => $foto1,
            'foto_slider2' => $foto2,
            'foto_slider3' => $foto3,
        ]);

        return redirect()->route('admin.slider')->with('success', 'Foto berhasil diperbarui.');
    }



    ////////////////////////////SAMBUTAN DIREKTUR/////////////////////////////////////
    public function sambutan()
    {
        $data = SambutanDirektur::all();
        return view('AdminPage.Home.Sambutan.sambutandirektur', compact('data'));
    }
    public function editsambutan($id)
    {
        $data = SambutanDirektur::findOrFail($id);
        return view('AdminPage.Home.Sambutan.editsambutandirektur', compact('data'));
    }
    public function updatesambutan(Request $request, $id)
    {
        dd($request->all());
        $sambutan = SambutanDirektur::findOrFail($id);
        // dd($sambutan);

        // Simpan nama file lama sebagai default
        $fotodirektur = $sambutan->foto_direktur;

        // Jika ada file baru di-upload
        if ($request->hasFile('foto_direktur')) {
            $posterFile = $request->file('foto_direktur');
            $fotodirektur = time() . '_' . $posterFile->getClientOriginalName();
            $posterFile->move(public_path('direktur'), $fotodirektur);
        }

        // Update data agenda
        $sambutan->update([
            'Nama_Direktur' => $request->input('Nama_Direktur'),
            'sambutan'  => $request->input('sambutan'),
            'foto_direktur'  => $fotodirektur,
        ]);
        // dd($sambutan);

        return redirect()->route('admin.sambutan')->with('success', 'Agenda berhasil diperbarui');
    }
}
