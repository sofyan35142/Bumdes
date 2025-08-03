<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Beranda;
use App\Http\Controllers\Admin\dasarHukumController;
use App\Http\Controllers\Admin\StrukturOrganisasiController;
use App\Http\Controllers\Admin\VisiMisi;
use App\Http\Controllers\Landingpage\Apdes;
use App\Http\Controllers\Landingpage\Home;
use App\Http\Controllers\Landingpage\Blog;
use App\Http\Controllers\Landingpage\Profile;
use App\Http\Controllers\Landingpage\Contact;
use App\Http\Controllers\Landingpage\Pages;
use App\Models\StrukturOrganisasi;

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

// --- Blog
Route::get('/blog', [Blog::class, 'blog'])->name('blog');
Route::get('/blogdetail', [Blog::class, 'blogdetail'])->name('blogdetail');

// --- Profil BUMDes
Route::get('/profile/tentangBumdes', [Profile::class, 'tentangBumdes'])->name('profile.tentangBumdes');
Route::get('/profile/visi-misi', [Profile::class, 'visiMisi'])->name('profile.visiMisi');
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

// --- Apdes
Route::get('/apdes', [Apdes::class, 'apdes'])->name('apdes');


// ==========================================================
// ===================== 2. ADMIN PANEL =====================
// ==========================================================

// --- Dashboard Admin
Route::get('/admin', [Beranda::class, 'beranda'])->name('admin.beranda');

// --- Visi & Misi
Route::get('/admin/visi-misi', [VisiMisi::class, 'index'])->name('admin.visiMisi');
Route::get('/admin/visi-misi/edit', [VisiMisi::class, 'editForm'])->name('admin.visi_misi.edit');
Route::put('/admin/visi-misi/update', [VisiMisi::class, 'update'])->name('admin.visi_misi.update');

// --- Struktur Organisasi
Route::get('/admin/struktur-organisasi', [StrukturOrganisasiController::class, 'index'])->name('admin.struktur.index');
Route::get('/admin/struktur-organisasi/create', [StrukturOrganisasiController::class, 'create'])->name('admin.struktur.create');
Route::post('/admin/struktur-organisasi/store', [StrukturOrganisasiController::class, 'store'])->name('admin.struktur.store');
Route::get('/admin/struktur-organisasi/edit/{id}', [StrukturOrganisasiController::class, 'edit'])->name('admin.struktur.edit');
Route::put('/admin/struktur-organisasi/update/{id}', [StrukturOrganisasiController::class, 'update'])->name('admin.struktur.update');
Route::delete('/admin/struktur-organisasi/delete/{id}', [StrukturOrganisasiController::class, 'destroy'])->name('admin.struktur.delete');
// --- Dasar Hukum
Route::get('/admin/dasar-hukum', [dasarHukumController::class, 'index'])->name('admin.visiMisi');
Route::get('/admin/dasar-hukum/edit', [dasarHukumController::class, 'editForm'])->name('admin.visi_misi.edit');
Route::put('/admin/dasar-hukum/update', [dasarHukumController::class, 'update'])->name('admin.visi_misi.update');

// --- Slider
Route::get('/admin/slider', [Beranda::class, 'slider'])->name('admin.slider');
Route::get('/admin/editslider/{id}', [Beranda::class, 'editslider']);
Route::post('/admin/updateslider/{id}', [Beranda::class, 'updateslider'])->name('admin.updateslider');

// --- Sambutan Direktur
Route::get('/admin/sambutan', [Beranda::class, 'sambutan'])->name('admin.sambutan');
Route::get('/admin/editsambutan/{id}', [Beranda::class, 'editsambutan']);
Route::post('/admin/updatesambutan/{id}', [Beranda::class, 'updatesambutan'])->name('admin.updatesambutan');
