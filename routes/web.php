<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Beranda;
use App\Http\Controllers\Admin\VisiMisi;
use App\Http\Controllers\Landingpage\Home;
use App\Http\Controllers\Landingpage\Blog;
use App\Http\Controllers\Landingpage\Profile;
use App\Http\Controllers\Landingpage\Contact;
use App\Http\Controllers\Landingpage\Pages;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Terbagi menjadi dua menu utama:
| 1. Landing Page (Publik)
| 2. Admin (Panel Backend)
|
*/


// ==========================================================
// =============== 1. LANDING PAGE / PUBLIK =================
// ==========================================================

// --- Beranda
Route::get('/', [Home::class, 'home'])->name('home');
Route::get('/detailunggulan', [Home::class, 'detailunggulan'])->name('home.detailunggulan');

// --- Blog
Route::get('/blog', [Blog::class, 'blog'])->name('blog');
Route::get('/blogdetail', [Blog::class, 'blogdetail'])->name('blogdetail');

// --- Profil BUMDes
Route::get('/profile/tentangBumdes', [Profile::class, 'tentangBumdes'])->name('profile.tentangBumdes');
Route::get('/profile/visimisi', [Profile::class, 'visiMisi'])->name('profile.visiMisi');
Route::get('/profile/strukturorganisasi', [Profile::class, 'strukturorganisasi'])->name('profile.strukturorganisasi');
Route::get('/profile/dasarhukum', [Profile::class, 'dasarhukum'])->name('profile.dasarhukum');

// --- Halaman Tambahan
Route::get('/galeri', [Pages::class, 'galeri'])->name('galeri');
Route::get('/lowongan', [Pages::class, 'lowongan'])->name('lowongan');
Route::get('/pages/galeri', [Pages::class, 'galeri'])->name('pages.galeri');
Route::get('/pages/lowongan', [Pages::class, 'lowongan'])->name('pages.lowongan');
Route::get('/pages/keuangan', [Pages::class, 'keuangan'])->name('pages.keuangan');

// --- Kontak
Route::get('/contact', [Contact::class, 'contact'])->name('contact');



// ==========================================================
// ===================== 2. ADMIN PANEL =====================
// ==========================================================

// --- Dashboard Admin
Route::get('/admin', [Beranda::class, 'beranda'])->name('admin.beranda');

// --- Visi & Misi
Route::get('/admin/visi-misi', [VisiMisi::class, 'index'])->name('admin.visiMisi');
Route::get('/admin/visi-misi/edit', [VisiMisi::class, 'edit'])->name('admin.visi_misi.edit');
Route::put('/admin/visi-misi/update', [VisiMisi::class, 'edit'])->name('admin.visi_misi.update');

// --- Slider
Route::get('/admin/slider', [Beranda::class, 'slider'])->name('admin.slider');
Route::get('/admin/editslider/{id}', [Beranda::class, 'editslider']);
Route::post('/admin/updateslider/{id}', [Beranda::class, 'updateslider'])->name('admin.updateslider');

// --- STATISTIK SINGKAT
Route::get('/admin/statistik', [Beranda::class, 'statistik'])->name('admin.statistik');
Route::get('/admin/editstatistik/{id}', [Beranda::class, 'editstatistik']);
Route::post('/admin/updatestatistik/{id}', [Beranda::class, 'updatestatistik'])->name('admin.updatestatistik');

// --- Sambutan Direktur
Route::get('/admin/sambutan', [Beranda::class, 'sambutan'])->name('admin.sambutan');
Route::get('/admin/editsambutan/{id}', [Beranda::class, 'editsambutan']);
Route::post('/admin/updatesambutan/{id}', [Beranda::class, 'updatesambutan'])->name('admin.updatesambutan');

// --- Layanan Unggulan
Route::get('/admin/unggulan', [Beranda::class, 'unggulan'])->name('admin.unggulan');
Route::get('/admin/tambahunggulan', [Beranda::class, 'tambahunggulan'])->name('admin.tambahunggulan');
Route::post('/admin/insertunggulan', [Beranda::class, 'insertunggulan'])->name('admin.insertunggulan');
Route::get('/admin/editunggulan/{id}', [Beranda::class, 'editunggulan']);
Route::post('/admin/updateunggulan/{id}', [Beranda::class, 'updateunggulan'])->name('admin.updateunggulan');
Route::get('/admin/hapusunggulan/{id}', [Beranda::class, 'hapusunggulan'])->name('admin.hapusunggulan');

// --- Kegiatan BumDes
Route::get('/admin/kegiatan', [Beranda::class, 'kegiatan'])->name('admin.kegiatan');
Route::get('/admin/tambahkegiatan', [Beranda::class, 'tambahkegiatan'])->name('admin.tambahkegiatan');
Route::post('/admin/insertkegiatan', [Beranda::class, 'insertkegiatan'])->name('admin.insertkegiatan');
Route::get('/admin/editkegiatan/{id}', [Beranda::class, 'editkegiatan']);
Route::post('/admin/updatekegiatan/{id}', [Beranda::class, 'updatekegiatan'])->name('admin.updatekegiatan');
Route::get('/admin/hapuskegiatan/{id}', [Beranda::class, 'hapuskegiatan'])->name('admin.hapuskegiatan');
