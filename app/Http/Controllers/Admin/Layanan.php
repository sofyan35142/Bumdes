<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PengajuanLayanan;
use Illuminate\Http\Request;

class Layanan extends Controller
{
    public function index()
    {
        $permohonan = PengajuanLayanan::latest()->get();
        return view('Adminpage.Pengajuan.index', compact('permohonan'));
    }

    public function destroy($id)
    {
        $pengajuan = PengajuanLayanan::findOrFail($id);

        // Hapus file terkait jika ada
        if ($pengajuan->file_ktp && file_exists(storage_path('app/public/' . $pengajuan->file_ktp))) {
            unlink(storage_path('app/public/' . $pengajuan->file_ktp));
        }

        if ($pengajuan->file_surat && file_exists(storage_path('app/public/' . $pengajuan->file_surat))) {
            unlink(storage_path('app/public/' . $pengajuan->file_surat));
        }

        $pengajuan->delete();

        return response()->json(['success' => true, 'message' => 'Data berhasil dihapus']);
    }
}
