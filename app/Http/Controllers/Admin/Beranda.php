<?php

namespace App\Http\Controllers\Admin;

use App\Models\slider;
use App\Models\statistik;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\LayananUnggulan;
use App\Models\SambutanDirektur;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\kegiatan;

class Beranda extends Controller
{
    public function beranda()
    {
        $totalArsip = DB::table('arsip_dokumen')->count();
        $totalLayanan = DB::table('jenis_layanan')->count();
        $totalKegiatan = DB::table('kegiatans')->count();
        $totalLowongan = DB::table('lowongan_pekerjaan')->count();
        $totalPengajuan = DB::table('pengajuan_layanan')->count();
        $totalAnggota = DB::table('struktur_organisasi')->count();
        $totaltestimonials = DB::table('testimonials')->count();

        return view('AdminPage.beranda', compact('totalArsip', 'totalLayanan', 'totalKegiatan', 'totalLowongan', 'totalPengajuan', 'totalAnggota', 'totaltestimonials'));
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
        // Tentukan folder upload di public_html
        $uploadPath = base_path('../public_html/Foto_Slider');
        if (!file_exists($uploadPath)) {
            mkdir($uploadPath, 0755, true);
            // dd('p');
        }
        // dd($uploadPath);

        $request->validate([
            'title_slider1' => 'nullable|string|max:255',
            'deskripsi_slider1' => 'nullable|string',
            'title_slider2' => 'nullable|string|max:255',
            'deskripsi_slider2' => 'nullable|string',
            'title_slider3' => 'nullable|string|max:255',
            'deskripsi_slider3' => 'nullable|string',
            'foto_slider1' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'foto_slider2' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'foto_slider3' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = Slider::findOrFail($id);

        $foto1 = $data->foto_slider1;
        $foto2 = $data->foto_slider2;
        $foto3 = $data->foto_slider3;

        if ($request->hasFile('foto_slider1')) {
            if ($foto1 && file_exists($uploadPath . '/' . $foto1)) {
                unlink($uploadPath . '/' . $foto1);
            }
            $file = $request->file('foto_slider1');
            $foto1 = md5(time() . '_1_' . $file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
            $file->move($uploadPath, $foto1);
        }

        if ($request->hasFile('foto_slider2')) {
            if ($foto2 && file_exists($uploadPath . '/' . $foto2)) {
                unlink($uploadPath . '/' . $foto2);
            }
            $file = $request->file('foto_slider2');
            $foto2 = md5(time() . '_2_' . $file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
            $file->move($uploadPath, $foto2);
        }

        if ($request->hasFile('foto_slider3')) {
            if ($foto3 && file_exists($uploadPath . '/' . $foto3)) {
                unlink($uploadPath . '/' . $foto3);
            }
            $file = $request->file('foto_slider3');
            $foto3 = md5(time() . '_3_' . $file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
            $file->move($uploadPath, $foto3);
        }

        $data->update([
            'title_slider1' => $request->title_slider1,
            'deskripsi_slider1' => $request->deskripsi_slider1,
            'foto_slider1' => $foto1,
            'title_slider2' => $request->title_slider2,
            'deskripsi_slider2' => $request->deskripsi_slider2,
            'foto_slider2' => $foto2,
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

        // Tentukan folder upload di public_html
        $uploadPath = base_path('../public_html/direktur');
        if (!file_exists($uploadPath)) {
            mkdir($uploadPath, 0755, true);
        }

        // Simpan nama file lama sebagai default
        $fotodirektur = $sambutan->foto_direktur;

        // Jika ada file baru di-upload
        if ($request->hasFile('foto_direktur')) {
            // Hapus file lama jika ada
            if ($fotodirektur && file_exists($uploadPath . '/' . $fotodirektur)) {
                @unlink($uploadPath . '/' . $fotodirektur);
            }

            // Simpan file baru
            $file = $request->file('foto_direktur');
            $fotodirektur = md5(uniqid() . '_' . $file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
            $file->move($uploadPath, $fotodirektur);
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

            'foto_layanan.required' => 'Foto atau poster layanan wajib diisi.',
            'foto_layanan.image'    => 'Foto layanan harus berupa gambar.',
            'foto_layanan.mimes'    => 'Foto layanan hanya boleh berformat JPG, JPEG, atau PNG.',
            'foto_layanan.max'      => 'Ukuran foto layanan maksimal 2MB.',
        ]);

        // Tentukan folder upload berdasarkan environment
        if (app()->environment('local')) {
            $uploadPath = public_path('foto_layanan_unggulan');
        } else {
            $uploadPath = base_path('../public_html/foto_layanan_unggulan');
        }

        if (!file_exists($uploadPath)) {
            mkdir($uploadPath, 0755, true);
        }

        // Simpan data
        $unggulan = new LayananUnggulan();
        $unggulan->Nama_Layanan = $request->Nama_Layanan;
        $unggulan->deskripsi    = $request->deskripsi;
        $unggulan->kategori_id  = $request->kategori_id;

        // Upload gambar jika ada
        if ($request->hasFile('foto_layanan')) {
            $file = $request->file('foto_layanan');
            $filename = md5($file->getClientOriginalName() . microtime(true)) . '.' . $file->getClientOriginalExtension();
            $file->move($uploadPath, $filename);
            $unggulan->foto_layanan = $filename;
        }

        // Simpan ke database
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
    { // Validasi data
    $request->validate([
        'Nama_Layanan'   => 'required|string|max:255',
        'deskripsi'      => 'required|string',
        'kategori_id'    => 'required|exists:kategorimodels,id',
        'foto_layanan'   => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ], [
        'Nama_Layanan.required' => 'Nama layanan wajib diisi.',
        'deskripsi.required'    => 'Deskripsi wajib diisi.',
        'kategori_id.required'  => 'Kategori wajib dipilih.',
        'kategori_id.exists'    => 'Kategori yang dipilih tidak valid.',
        'foto_layanan.image'    => 'File harus berupa gambar.',
        'foto_layanan.mimes'    => 'Format gambar harus jpeg, png, atau jpg.',
        'foto_layanan.max'      => 'Ukuran gambar maksimal 2MB.',
    ]);

    // Ambil data lama
    $unggulan = LayananUnggulan::findOrFail($id);
    $fotoLama = $unggulan->foto_layanan;

    // Tentukan folder upload sesuai environment
    if (app()->environment('local')) {
        $uploadPath = public_path('foto_layanan_unggulan');
    } else {
        $uploadPath = base_path('../public_html/foto_layanan_unggulan');
    }

    // Pastikan folder ada
    if (!file_exists($uploadPath)) {
        mkdir($uploadPath, 0755, true);
    }

    // Upload foto baru jika ada
    if ($request->hasFile('foto_layanan')) {
        // Hapus foto lama jika ada
        if ($fotoLama && file_exists($uploadPath . '/' . $fotoLama)) {
            @unlink($uploadPath . '/' . $fotoLama);
        }

        // Simpan foto baru
        $file = $request->file('foto_layanan');
        $fotoBaru = md5($file->getClientOriginalName() . microtime(true)) . '.' . $file->getClientOriginalExtension();
        $file->move($uploadPath, $fotoBaru);

        $fotoLama = $fotoBaru; // Ganti foto lama dengan yang baru
    }

    // Update data
    $unggulan->update([
        'Nama_Layanan'  => $request->Nama_Layanan,
        'deskripsi'     => $request->deskripsi,
        'kategori_id'   => $request->kategori_id,
        'foto_layanan'  => $fotoLama,
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
