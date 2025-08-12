<?php

namespace App\Http\Controllers\Landingpage;

use App\Models\JenisLayanan;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\PengajuanLayanan;
use App\Http\Controllers\Controller;
use PhpOffice\PhpWord\TemplateProcessor;

class LayananController extends Controller
{
    public function index()
    {
        $jenisLayanan = JenisLayanan::all();
        return view('Landingpage.layanan.index', compact('jenisLayanan'));
    }

    public function storePengajuan(Request $request)
    {
        // dd($request->all());
        // Validasi input form
        $validatedData = $request->validate([
            'nama_lengkap'       => 'required|string|max:255',
            'tempat_lahir'       => 'required|string|max:255',
            'tanggal_lahir'      => 'required|date',
            'nik'                => 'required|string|max:50',
            'alamat'             => 'required|string|max:255',
            'no_wa'              => 'required|string|max:20',
            'jenis_pengajuan'    => 'required|string',
            'keperluan'          => 'required|string',
            'durasi_sewa'        => 'required|numeric',
            'total_harga'        => 'required|string',

            'legalitas_usaha'    => 'nullable|string|max:255',
            'jenis_usaha'        => 'nullable|string|max:255',
            'produk'             => 'nullable|string|max:255',

            'file_ktp'           => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        // Ambil data jenis layanan dari DB berdasarkan ID yang dipilih user
        $jenisLayanan = JenisLayanan::find($validatedData['jenis_pengajuan']);
        $namaJenisLayanan = $jenisLayanan ? $jenisLayanan->nama : '-';

        // Template surat
        $templateFile = storage_path('app/templates/Template_Pengajuan_Layanan_BUMDes.docx');

        if (!file_exists($templateFile)) {
            dd('Template file tidak ditemukan di: ' . $templateFile);
        }

        try {
            $templateProcessor = new TemplateProcessor($templateFile);

            // Isi template surat dengan data dari form dan DB
            $templateProcessor->setValue('Nama', $validatedData['nama_lengkap']);
            $templateProcessor->setValue('Tempat', $validatedData['tempat_lahir']);
            $templateProcessor->setValue('Tgl_lahir', Carbon::parse($validatedData['tanggal_lahir'])->translatedFormat('d F Y'));
            $templateProcessor->setValue('NIK', $validatedData['nik']);
            $templateProcessor->setValue('Alamat', $validatedData['alamat']);
            $templateProcessor->setValue('no_wa', $validatedData['no_wa']);
            $templateProcessor->setValue('Jenis_tempat', $validatedData['jenis_pengajuan']);
            $templateProcessor->setValue('Jenis_usaha', $validatedData['jenis_usaha'] ?? '-');
            $templateProcessor->setValue('Produk', $validatedData['produk'] ?? '-');
            $templateProcessor->setValue(
                'Durasi_sewa',
                $validatedData['durasi_sewa'] . ' ' . $request->satuan_sewa
            );
            $templateProcessor->setValue('Harga', $validatedData['total_harga']);
            $templateProcessor->setValue('Tujuan_penggunaan', $validatedData['keperluan']);
            $templateProcessor->setValue('legalitas', $validatedData['legalitas_usaha'] ?? '-');
            $templateProcessor->setValue('tgl_pengajuan', Carbon::now()->translatedFormat('d F Y'));

            // Simpan file surat
            $fileSuratName = 'Surat_Pengajuan_BUMDes_' . time() . '.docx';
            $fileSuratPath = storage_path('app/public/surat/' . $fileSuratName);

            if (!file_exists(dirname($fileSuratPath))) {
                mkdir(dirname($fileSuratPath), 0775, true);
            }

            $templateProcessor->saveAs($fileSuratPath);

            // Simpan file KTP jika ada
            $ktpFileName = null;
            if ($request->hasFile('file_ktp')) {
                $ktpFileName = $request->file('file_ktp')->store('ktp', 'public');
            }

            // Simpan data pengajuan ke database
            $pengajuan = PengajuanLayanan::create([
                'nama_lengkap'   => $validatedData['nama_lengkap'],
                'tempat_lahir'   => $validatedData['tempat_lahir'],
                'tanggal_lahir'  => $validatedData['tanggal_lahir'],
                'nik'            => $validatedData['nik'],
                'alamat'         => $validatedData['alamat'],
                'no_wa'          => $validatedData['no_wa'],
                'file_ktp'       => $ktpFileName,
                'jenis_layanan'  => $validatedData['jenis_pengajuan'],
                'file_surat'     => 'surat/' . $fileSuratName,
                'data_lainnya'   => [
                    'keperluan'        => $validatedData['keperluan'],
                    'durasi_sewa' => $validatedData['durasi_sewa'] . ' ' . $request->satuan_sewa,
                    'total_harga'      => $validatedData['total_harga'],
                    'legalitas_usaha'  => $validatedData['legalitas_usaha'] ?? null,
                    'jenis_usaha'      => $validatedData['jenis_usaha'] ?? null,
                    'produk'           => $validatedData['produk'] ?? null,
                ],
            ]);

            return redirect('/sukses')->with('success', 'Pengajuan berhasil dikirim!');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return back()->withErrors(['error' => 'Terjadi kesalahan saat membuat surat: ' . $e->getMessage()]);
        }
    }
}
