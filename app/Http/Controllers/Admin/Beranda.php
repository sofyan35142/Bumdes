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
        // Validasi input
        $request->validate([
            // Title & Deskripsi wajib diisi, tapi bisa nullable kalau opsional
            'title_slider1' => 'nullable|string|max:255',
            'deskripsi_slider1' => 'nullable|string',
            'title_slider2' => 'nullable|string|max:255',
            'deskripsi_slider2' => 'nullable|string',
            'title_slider3' => 'nullable|string|max:255',
            'deskripsi_slider3' => 'nullable|string',

            // Foto
            'foto_slider1' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'foto_slider2' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'foto_slider3' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ], [
            // Foto Slider 1
            'foto_slider1.image' => 'Foto slider 1 harus berupa gambar.',
            'foto_slider1.mimes' => 'Foto slider 1 hanya boleh berformat JPG, JPEG, atau PNG.',
            'foto_slider1.max' => 'Ukuran foto slider 1 maksimal 2MB.',

            // Foto Slider 2
            'foto_slider2.image' => 'Foto slider 2 harus berupa gambar.',
            'foto_slider2.mimes' => 'Foto slider 2 hanya boleh berformat JPG, JPEG, atau PNG.',
            'foto_slider2.max' => 'Ukuran foto slider 2 maksimal 2MB.',

            // Foto Slider 3
            'foto_slider3.image' => 'Foto slider 3 harus berupa gambar.',
            'foto_slider3.mimes' => 'Foto slider 3 hanya boleh berformat JPG, JPEG, atau PNG.',
            'foto_slider3.max' => 'Ukuran foto slider 3 maksimal 2MB.',
        ]);

        $data = Slider::findOrFail($id);

        // Ambil nama file lama
        $foto1 = $data->foto_slider1;
        $foto2 = $data->foto_slider2;
        $foto3 = $data->foto_slider3;

        // Upload jika ada file baru (pakai hash)
        if ($request->hasFile('foto_slider1')) {
            $file = $request->file('foto_slider1');
            $foto1 = md5(time() . '_1_' . $file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('Foto Slider'), $foto1);
        }

        if ($request->hasFile('foto_slider2')) {
            $file = $request->file('foto_slider2');
            $foto2 = md5(time() . '_2_' . $file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('Foto Slider'), $foto2);
        }

        if ($request->hasFile('foto_slider3')) {
            $file = $request->file('foto_slider3');
            $foto3 = md5(time() . '_3_' . $file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('Foto Slider'), $foto3);
        }

        // Simpan update ke database
        $data->update([
            // Slider 1
            'title_slider1' => $request->title_slider1,
            'deskripsi_slider1' => $request->deskripsi_slider1,
            'foto_slider1' => $foto1,

            // Slider 2
            'title_slider2' => $request->title_slider2,
            'deskripsi_slider2' => $request->deskripsi_slider2,
            'foto_slider2' => $foto2,

            // Slider 3
            'title_slider3' => $request->title_slider3,
            'deskripsi_slider3' => $request->deskripsi_slider3,
            'foto_slider3' => $foto3,
        ]);


        return redirect()->route('admin.slider')->with('success', 'Foto berhasil diperbarui.');
    }



    ////////////////////////////SAMBUTAN DIREKTUR/////////////////////////////////////
    public function sambutan()
    {
        $data = SambutanDirektur::first();
        // dd($data);
        return view('AdminPage.Home.Sambutan.sambutandirektur', compact('data'));
    }
    public function editsambutan($id)
    {
        $data = SambutanDirektur::findOrFail($id);
        return view('AdminPage.Home.Sambutan.editsambutandirektur', compact('data'));
    }
    public function updatesambutan(Request $request, $id)
    {    // Validasi input
        $request->validate([
            'Nama_Direktur' => 'required|string|max:255',
            'sambutan'      => 'required|string',
            'foto_direktur' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ], [
            'Nama_Direktur.required' => 'Nama Direktur wajib diisi.',
            'Nama_Direktur.string'   => 'Nama Direktur harus berupa teks.',
            'Nama_Direktur.max'      => 'Nama Direktur maksimal 255 karakter.',

            'sambutan.required'      => 'Sambutan wajib diisi.',

            'foto_direktur.image'    => 'Foto Direktur harus berupa gambar.',
            'foto_direktur.mimes'    => 'Foto Direktur hanya boleh berformat JPG, JPEG, atau PNG.',
            'foto_direktur.max'      => 'Ukuran foto Direktur maksimal 2MB.',
        ]);

        $sambutan = SambutanDirektur::findOrFail($id);

        // Simpan nama file lama sebagai default
        $fotodirektur = $sambutan->foto_direktur;

        // Jika ada file baru di-upload
        if ($request->hasFile('foto_direktur')) {
            // Hapus file lama jika ada
            if ($fotodirektur && file_exists(public_path('direktur/' . $fotodirektur))) {
                unlink(public_path('direktur/' . $fotodirektur));
            }

            $posterFile = $request->file('foto_direktur');
            $fotodirektur = md5(time() . '_' . $posterFile->getClientOriginalName()) . '.' . $posterFile->getClientOriginalExtension();
            $posterFile->move(public_path('direktur'), $fotodirektur);
        }

        // Update data
        $sambutan->update([
            'Nama_Direktur' => $request->input('Nama_Direktur'),
            'sambutan'      => $request->input('sambutan'),
            'foto_direktur' => $fotodirektur,
        ]);

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
        $request->validate([
            'Warga_aktif'    => 'required|numeric|min:0',
            'Kepuasan_Mitra' => 'required|numeric|min:0|max:100',
            'Unit_Usaha'     => 'required|numeric|min:0',
            'Produk_Desa'    => 'required|numeric|min:0',
        ], [
            'Warga_aktif.required'    => 'Jumlah warga aktif wajib diisi.',
            'Warga_aktif.numeric'     => 'Jumlah warga aktif harus berupa angka.',
            'Warga_aktif.min'         => 'Jumlah warga aktif minimal 0.',

            'Kepuasan_Mitra.required' => 'Persentase kepuasan mitra wajib diisi.',
            'Kepuasan_Mitra.numeric'  => 'Persentase kepuasan mitra harus berupa angka.',
            'Kepuasan_Mitra.min'      => 'Persentase kepuasan mitra minimal 0%.',
            'Kepuasan_Mitra.max'      => 'Persentase kepuasan mitra maksimal 100%.',

            'Unit_Usaha.required'     => 'Jumlah unit usaha wajib diisi.',
            'Unit_Usaha.numeric'      => 'Jumlah unit usaha harus berupa angka.',
            'Unit_Usaha.min'          => 'Jumlah unit usaha minimal 0.',

            'Produk_Desa.required'    => 'Jumlah produk desa wajib diisi.',
            'Produk_Desa.numeric'     => 'Jumlah produk desa harus berupa angka.',
            'Produk_Desa.min'         => 'Jumlah produk desa minimal 0.',
        ]);

        $statistik = statistik::findOrFail($id);

        // Update data
        $statistik->update([
            'Warga_aktif'    => $request->input('Warga_aktif'),
            'Kepuasan_Mitra' => $request->input('Kepuasan_Mitra'),
            'Unit_Usaha'     => $request->input('Unit_Usaha'),
            'Produk_Desa'    => $request->input('Produk_Desa'),
        ]);

        return redirect()->route('admin.statistik')->with('success', 'Statistik berhasil diperbarui');
    }

    //////////////////////////// L A Y A N A N  U N G G U L A N ///////////////////////////////////////
    public function unggulan()
    {
        $unggulan = LayananUnggulan::with('kategori')->latest()->get();

        // $unggulan = LayananUnggulan::all();
        return view('AdminPage.Home.Unggulan.unggulan', compact('unggulan'));
    }
    public function tambahunggulan()
    {
        $kategoris = \App\Models\kategorimodel::all();
        return view('AdminPage.Home.Unggulan.tambahunggulan', compact('kategoris'));
    }

    public function insertunggulan(Request $request)
    {
        // dd($request->all());
        // Validasi input
        // Validasi input
        $request->validate([
            'Nama_Layanan'   => 'required|string|max:255',
            'deskripsi'      => 'required|string',
            'kategori_id'    => 'required|exists:kategorimodels,id',
            'foto_layanan'   => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'Nama_Layanan.required' => 'Nama layanan wajib diisi.',
            'Nama_Layanan.string'   => 'Nama layanan harus berupa teks.',
            'Nama_Layanan.max'      => 'Nama layanan maksimal 255 karakter.',

            'deskripsi.required'    => 'Deskripsi layanan wajib diisi.',

            'kategori_id.required'  => 'Kategori layanan wajib dipilih.',
            'kategori_id.exists'    => 'Kategori yang dipilih tidak valid.',

            'foto_layanan.required'  => 'Foto atau poster layanan wajib diisi.',
            'foto_layanan.image'    => 'Foto layanan harus berupa gambar.',
            'foto_layanan.mimes'    => 'Foto layanan hanya boleh berformat JPG, JPEG, atau PNG.',
            'foto_layanan.max'      => 'Ukuran foto layanan maksimal 2MB.',
        ]);

        // Simpan data
        $unggulan = new LayananUnggulan();
        $unggulan->Nama_Layanan = $request->Nama_Layanan;
        $unggulan->deskripsi    = $request->deskripsi;
        $unggulan->kategori_id  = $request->kategori_id;

        // Upload gambar jika ada
        if ($request->hasFile('foto_layanan')) {
            $file = $request->file('foto_layanan');
            $filename = md5(time() . '_' . $file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('foto layanan unggulan'), $filename);
            $unggulan->foto_layanan = $filename;
        }

        $unggulan->save();
        return redirect()->route('admin.unggulan')->with('success', 'Data unggulan berhasil ditambahkan!');
    }


    public function editunggulan($id)
    {
        $unggulan = LayananUnggulan::findOrFail($id);
        $kategoris = \App\Models\kategorimodel::all();
        return view('AdminPage.Home.Unggulan.editunggulan', compact('unggulan', 'kategoris'));
    }

    public function updateunggulan(Request $request, $id)
    {
        // Validasi data
        $request->validate([
            'nama_layanan'   => 'required|string|max:255',
            'deskripsi'      => 'required|string',
            // 'kategori'       => 'required|exists:kategorimodels,id',
            'foto_layanan'   => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'nama_layanan.required' => 'Nama layanan wajib diisi.',
            'deskripsi.required'    => 'Deskripsi wajib diisi.',
            // 'kategori.required'     => 'Kategori wajib dipilih.',
            // 'kategori.exists'       => 'Kategori yang dipilih tidak valid.',
            'foto_layanan.image'    => 'File harus berupa gambar.',
            'foto_layanan.mimes'    => 'Format gambar harus jpeg, png, atau jpg.',
            'foto_layanan.max'      => 'Ukuran gambar maksimal 2MB.',
        ]);

        // Ambil data lama
        $unggulan = LayananUnggulan::findOrFail($id);
        $foto_layanan = $unggulan->foto_layanan;

        // Upload foto baru jika ada
        if ($request->hasFile('foto_layanan')) {
            // Hapus foto lama kalau ada
            if ($unggulan->foto_layanan && file_exists(public_path('Foto Layanan Unggulan/' . $unggulan->foto_layanan))) {
                unlink(public_path('Foto Layanan Unggulan/' . $unggulan->foto_layanan));
            }

            // Simpan foto baru
            $file = $request->file('foto_layanan');
            $foto_layanan = $file->hashName();
            $file->move(public_path('Foto Layanan Unggulan'), $foto_layanan);
        }

        // Update data
        $unggulan->update([
            'nama_layanan'  => $request->input('nama_layanan'),
            'deskripsi'     => $request->input('deskripsi'),
            'kategori_id'   => $request->input('kategori'),
            'foto_layanan'  => $foto_layanan,
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
