<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LayananUnggulan;
use App\Models\SambutanDirektur;
use App\Models\slider;
use App\Models\statistik;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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



    //////////////////////////// S T A T I S T I K ///////////////////////////////////////
    public function statistik()
    {
        $statistik = statistik::all();
        return view('AdminPage.Home.Statistik.statistik', compact('statistik'));
    }
    public function editstatistik($id)
    {
        $statistik = statistik::findOrFail($id);
        return view('AdminPage.Home.Statistik.editstatistik', compact('statistik'));
    }

    public function updatestatistik(Request $request, $id)
    {
        $statistik = statistik::findOrFail($id);

        // Update data statistik
        $statistik->update([
            'Warga_aktif' => $request->input('Warga_aktif'),
            'Kepuasan_Mitra' => $request->input('Kepuasan_Mitra'),
            'Unit_Usaha' => $request->input('Unit_Usaha'),
            'Produk_Desa' => $request->input('Produk_Desa'),
        ]);

        return redirect()->route('admin.statistik')->with('success', 'Statistik berhasil diperbarui');
    }

    //////////////////////////// L A Y A N A N  U N G G U L A N ///////////////////////////////////////
        public function unggulan()
    {
        $unggulan = LayananUnggulan::all();
        return view('AdminPage.Home.Unggulan.unggulan', compact('unggulan'));
    }
    public function tambahunggulan()
    {
        return view('AdminPage.Home.Unggulan.tambahunggulan');
    }

    public function insertunggulan(Request $request)
    {
        // dd($request->all());
       // Validasi input
        $request->validate([
            'Nama_Layanan' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'kategori' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Simpan data
        $unggulan = new LayananUnggulan();
        $unggulan->Nama_Layanan = $request->Nama_Layanan;
        $unggulan->deskripsi = $request->deskripsi;
        $unggulan->kategori = $request->kategori;

        // Upload gambar jika ada
        if ($request->hasFile('foto_layanan')) {
            $file = $request->file('foto_layanan');
            $filename = time() . '_' . Str::slug($file->getClientOriginalName(), '_');
            $file->move(public_path('foto layanan unggulan'), $filename);
            $unggulan->foto_layanan = $filename;
        }

        $unggulan->save();

        return redirect()->route('admin.unggulan')->with('success', 'Data unggulan berhasil ditambahkan!');
    }


    public function editunggulan($id)
    {
        $unggulan = LayananUnggulan::findOrFail($id);
        return view('AdminPage.Home.Unggulan.editunggulan', compact('unggulan'));
    }

    public function updateunggulan(Request $request, $id)
    {
        $unggulan = LayananUnggulan::findOrFail($id);

        // Proses upload foto jika ada file baru
        if ($request->hasFile('foto_layanan')) {
            $file = $request->file('foto_layanan');
            $foto_layanan = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('Foto Layanan Unggulan'), $foto_layanan);
        } else {
            // Jika tidak ada file baru, gunakan foto lama
            $foto_layanan = $unggulan->foto_layanan;
        }

        // Update data layanan unggulan
        $unggulan->update([
            'nama_layanan' => $request->input('nama_layanan'),
            'deskripsi' => $request->input('deskripsi'),
            'kategori' => $request->input('kategori'),
            'foto_layanan' => $foto_layanan,
        ]);

        return redirect()->route('admin.unggulan')->with('success', 'Layanan Unggulan berhasil diperbarui');
    }
    public function hapusunggulan($id)
    {
        $unggulan = LayananUnggulan::findOrFail($id);
        $unggulan->delete();

        return redirect()->route('admin.unggulan')->with('success', 'Layanan Unggulan berhasil dihapus');
    }
}
