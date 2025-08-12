<?php

use App\Http\Controllers\Admin\Alasan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Beranda;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\KegiatanController;
use App\Http\Controllers\Admin\dasarHukumController;
use App\Http\Controllers\admin\GaleryController;
use App\Http\Controllers\Admin\StrukturOrganisasiController;
use App\Http\Controllers\Admin\VisiMisi;
use App\Http\Controllers\Landingpage\Blog;
use App\Http\Controllers\Landingpage\Home;
use App\Http\Controllers\Landingpage\Apdes;
use App\Http\Controllers\Landingpage\Pages;
use App\Http\Controllers\Landingpage\Contact;
use App\Http\Controllers\Landingpage\Profile;
use App\Http\Controllers\Admin\Layanan;
use App\Http\Controllers\Admin\PanduanBumdesController;
use App\Http\Controllers\Landingpage\LayananController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MediaPartnerController;
use App\Http\Controllers\Admin\Testimonial;
use App\Http\Controllers\Admin\InformasiKontak;
use App\Http\Controllers\LowonganPekerjaan;
use App\Http\Controllers\Admin\IndustryAdmin as IndustryController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\Admin\JenisLayananController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\tentangBumdesController;

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
Route::get('/p', function () {
    return view('p');
});

// --- Beranda
Route::get('/', [Home::class, 'home'])->name('home');
Route::get('/FormTestimonial', [Home::class, 'FormTestimonial'])->name('FormTestimonial');
Route::get('/detailunggulan/{id}', [Home::class, 'detailunggulan'])->name('home.detailunggulan');
Route::get('/listunggulan', [Home::class, 'listunggulan'])->name('home.listunggulan');
Route::get('/sukses', [Home::class, 'testimoni'])->name('home.testimoni');

// --- Blog
Route::get('/blog', [Blog::class, 'blog'])->name('blog');
Route::get('/blogdetail/{id}', [Blog::class, 'blogdetail'])->name('blogdetail');

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
Route::get('/pages/lowongan/detail/{id}', [Pages::class, 'lowongandetail'])->name('pages.lowongandetail');
Route::get('/pages/keuangan', [Pages::class, 'keuangan'])->name('pages.keuangan');
Route::get('/pages/umkm', [Pages::class, 'umkm'])->name('pages.umkm');

// --- Kontak
Route::get('/contact', [Contact::class, 'contact'])->name('landingpage.contact');

// --- Apdes
Route::get('/pages/laporan', [Apdes::class, 'apdes'])->name('apdes');

// --- Layanan Kami
Route::get('/layanan', [LayananController::class, 'index'])->name('landingpage.layanan');
Route::post('/layanan/store', [LayananController::class, 'storePengajuan'])->name('pengajuan.store');

// ==========================================================
// ===================== 2. ADMIN PANEL =====================
// ==========================================================

// Login & Logout (tanpa middleware)
Route::get('/admin/signin', [LoginController::class, 'login'])->name('login');
Route::post('/admin/postsignin', [LoginController::class, 'postsignin']);
Route::get('/logout', [LoginController::class, 'logout'])->name('admin.logout');

// Middleware Admin Panel
Route::middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('/admin', [Beranda::class, 'beranda'])->name('admin.beranda');

    // Profile Admin
    Route::get('/admin/profile', [ProfileController::class, 'index'])->name('admin.profile');
    Route::get('/admin/profile/edit', [ProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::put('/admin/profile/update', [ProfileController::class, 'update'])->name('admin.profile.update');

    // Visi Misi
    Route::get('/admin/visi-misi', [VisiMisi::class, 'index'])->name('admin.visiMisi');
    Route::get('/admin/visi-misi/edit', [VisiMisi::class, 'editForm'])->name('admin.visi_misi.edit');
    Route::put('/admin/visi-misi/update', [VisiMisi::class, 'update'])->name('admin.visi_misi.update');

    // Struktur Organisasi
    Route::get('/admin/struktur-organisasi', [StrukturOrganisasiController::class, 'index'])->name('admin.struktur.index');
    Route::get('/admin/struktur-organisasi/create', [StrukturOrganisasiController::class, 'create'])->name('admin.struktur.create');
    Route::post('/admin/struktur-organisasi/store', [StrukturOrganisasiController::class, 'store'])->name('admin.struktur.store');
    Route::get('/admin/struktur-organisasi/edit/{id}', [StrukturOrganisasiController::class, 'edit'])->name('admin.struktur.edit');
    Route::put('/admin/struktur-organisasi/update/{id}', [StrukturOrganisasiController::class, 'update'])->name('admin.struktur.update');
    Route::delete('/admin/struktur-organisasi/delete/{id}', [StrukturOrganisasiController::class, 'destroy'])->name('admin.struktur.delete');

    // Dasar Hukum
    Route::get('/admin/dasar-hukum', [dasarHukumController::class, 'index'])->name('admin.dasarhukum');
    Route::get('/admin/dasar-hukum/edit', [dasarHukumController::class, 'edit'])->name('admin.dasarHukum.edit');
    Route::put('/admin/dasar-hukum/update', [dasarHukumController::class, 'update'])->name('admin.dasarHukum.update');

    // Slider
    Route::get('/admin/slider', [Beranda::class, 'slider'])->name('admin.slider');
    Route::get('/admin/editslider/{id}', [Beranda::class, 'editslider']);
    Route::post('/admin/updateslider/{id}', [Beranda::class, 'updateslider'])->name('admin.updateslider');

    // Statistik
    Route::get('/admin/statistik', [Beranda::class, 'statistik'])->name('admin.statistik');
    Route::get('/admin/editstatistik/{id}', [Beranda::class, 'editstatistik']);
    Route::post('/admin/updatestatistik/{id}', [Beranda::class, 'updatestatistik'])->name('admin.updatestatistik');

    // Sambutan
    Route::get('/admin/sambutan', [Beranda::class, 'sambutan'])->name('admin.sambutan');
    Route::get('/admin/editsambutan/{id}', [Beranda::class, 'editsambutan']);
    Route::post('/admin/updatesambutan/{id}', [Beranda::class, 'updatesambutan'])->name('admin.updatesambutan');

    // ApDes
    Route::get('/admin/apdes', [Apdes::class, 'index'])->name('admin.apdes');
    Route::get('/admin/apdes/create', [Apdes::class, 'create'])->name('admin.apdes.create');
    Route::post('/admin/apdes/store', [Apdes::class, 'store'])->name('admin.apdes.store');

    // Layanan Unggulan
    Route::get('/admin/unggulan', [Beranda::class, 'unggulan'])->name('admin.unggulan');
    Route::get('/admin/tambahunggulan', [Beranda::class, 'tambahunggulan'])->name('admin.tambahunggulan');
    Route::post('/admin/insertunggulan', [Beranda::class, 'insertunggulan'])->name('admin.insertunggulan');
    Route::get('/admin/editunggulan/{id}', [Beranda::class, 'editunggulan']);
    Route::put('/admin/updateunggulan/{id}', [Beranda::class, 'updateunggulan'])->name('admin.updateunggulan');
    Route::get('/admin/hapusunggulan/{id}', [Beranda::class, 'hapusunggulan'])->name('admin.hapusunggulan');

    // Kegiatan
    Route::get('/admin/kegiatan', [KegiatanController::class, 'kegiatan'])->name('admin.kegiatan');
    Route::get('/admin/tambahkegiatan', [KegiatanController::class, 'tambahkegiatan'])->name('admin.tambahkegiatan');
    Route::post('/admin/insertkegiatan', [KegiatanController::class, 'insertkegiatan'])->name('admin.insertkegiatan');
    Route::get('/admin/editkegiatan/{id}', [KegiatanController::class, 'editkegiatan']);
    Route::put('/admin/updatekegiatan/{id}', [KegiatanController::class, 'updatekegiatan'])->name('admin.updatekegiatan');
    Route::get('/admin/hapuskegiatan/{id}', [KegiatanController::class, 'hapuskegiatan'])->name('admin.hapuskegiatan');

    // Kategori
    Route::get('/admin/kategori', [KategoriController::class, 'kategori'])->name('admin.kategori');
    Route::get('/admin/tambahkategori', [KategoriController::class, 'tambahkategori'])->name('admin.tambahkategori');
    Route::post('/admin/insertkategori', [KategoriController::class, 'insertkategori'])->name('admin.insertkategori');
    Route::get('/admin/editkategori/{id}', [KategoriController::class, 'editkategori']);
    Route::post('/admin/updatekategori/{id}', [KategoriController::class, 'updatekategori'])->name('admin.updatekategori');
    Route::get('/admin/hapuskategori/{id}', [KategoriController::class, 'hapuskategori'])->name('admin.hapuskategori');

    // Media Partner
    Route::get('/admin/mediapartner', [MediaPartnerController::class, 'mediapartner'])->name('admin.mediapartner');
    Route::get('/admin/tambahmediapartner', [MediaPartnerController::class, 'tambahmediapartner'])->name('admin.tambahmediapartner');
    Route::post('/admin/insertmediapartner', [MediaPartnerController::class, 'insertmediapartner'])->name('admin.insertmediapartner');
    Route::get('/admin/editmediapartner/{id}', [MediaPartnerController::class, 'editmediapartner']);
    Route::post('/admin/updatemediapartner/{id}', [MediaPartnerController::class, 'updatemediapartner'])->name('admin.updatemediapartner');
    Route::get('/admin/hapusmediapartner/{id}', [MediaPartnerController::class, 'hapusmediapartner'])->name('admin.hapusmediapartner');

    // Testimonial
    Route::get('/admin/testimonial/create', [TestimonialController::class, 'create'])->name('admin.testimonial.create');
    Route::post('/admin/testimonial/store', [TestimonialController::class, 'store'])->name('admin.testimonial.store');
    Route::get('/admin/testimonial', [TestimonialController::class, 'testimonial'])->name('admin.testimonial.testimonial');
    Route::get('/admin/testimonial/accept/{id}', [TestimonialController::class, 'accept'])->name('admin.testimonial.accept');
    Route::get('/admin/testimonial/reject/{id}', [TestimonialController::class, 'reject'])->name('admin.testimonial.reject');
    Route::get('/admin/testimonial/delete/{id}', [TestimonialController::class, 'delete'])->name('admin.testimonial.delete');

    // Lowongan
    Route::get('/admin/lowongan', [LowonganPekerjaan::class, 'lowongan'])->name('admin.lowongan');
    Route::get('/admin/tambahlowongan', [LowonganPekerjaan::class, 'tambahlowongan'])->name('admin.tambahlowongan');
    Route::post('/admin/insertlowongan', [LowonganPekerjaan::class, 'insertlowongan'])->name('admin.insertlowongan');
    Route::get('/admin/editlowongan/{id}', [LowonganPekerjaan::class, 'editlowongan']);
    Route::put('/admin/updatelowongan/{id}', [LowonganPekerjaan::class, 'updatelowongan'])->name('admin.updatelowongan');
    Route::get('/admin/hapuslowongan/{id}', [LowonganPekerjaan::class, 'hapuslowongan'])->name('admin.hapuslowongan');

    // Book Panduan
    Route::get('/admin/book-panduan', [PanduanBumdesController::class, 'index'])->name('admin.bookPanduan.index');
    Route::get('/admin/book-panduan/edit', [PanduanBumdesController::class, 'edit'])->name('admin.bookPanduan.edit');
    Route::put('/admin/book-panduan/update', [PanduanBumdesController::class, 'update'])->name('admin.bookPanduan.update');

    // Layanan
    Route::get('/admin/layanan', [Layanan::class, 'index'])->name('admin.layanan.index');
    Route::delete('/admin/layanan/{id}', [Layanan::class, 'destroy'])->name('admin.layanan.destroy');

    // Jenis Layanan
    Route::get('admin/jenis-layanan', [JenisLayananController::class, 'index'])->name('admin.jenisLayanan.index');
    Route::get('admin/jenis-layanan/create', [JenisLayananController::class, 'create'])->name('admin.jenisLayanan.create');
    Route::post('admin/jenis-layanan', [JenisLayananController::class, 'store'])->name('admin.jenisLayanan.store');
    Route::get('admin/jenis-layanan/{id}/edit', [JenisLayananController::class, 'edit'])->name('admin.jenisLayanan.edit');
    Route::put('admin/jenis-layanan/{id}', [JenisLayananController::class, 'update'])->name('admin.jenisLayanan.update');
    Route::delete('admin/jenis-layanan/{id}', [JenisLayananController::class, 'destroy'])->name('admin.jenisLayanan.destroy');

    // Contact
    Route::get('/admin/contact', [InformasiKontak::class, 'index'])->name('admin.contact.index');
    Route::get('/admin/contact/edit', [InformasiKontak::class, 'edit'])->name('admin.contact.edit');
    Route::put('/admin/contact', [InformasiKontak::class, 'update'])->name('admin.contact.update');

    // Alasan
    Route::get('/admin/alasan', [Alasan::class, 'index'])->name('admin.alasan.index');
    Route::get('/admin/alasan/edit/{id}', [Alasan::class, 'edit'])->name('admin.alasan.edit');
    Route::put('/admin/alasan/{id}', [Alasan::class, 'update'])->name('admin.alasan.update');

    // Industries
    Route::get('/admin/industries', [IndustryController::class, 'index'])->name('admin.industries.index');
    Route::get('/admin/industries/create', [IndustryController::class, 'create'])->name('admin.industries.create');
    Route::post('/admin/industries/store', [IndustryController::class, 'store'])->name('admin.industries.store');
    Route::get('/admin/industries/edit/{id}', [IndustryController::class, 'edit'])->name('admin.industries.edit');
    Route::put('/admin/industries/update/{id}', [IndustryController::class, 'update'])->name('admin.industries.update');
    Route::delete('/admin/industries/delete/{id}', [IndustryController::class, 'destroy'])->name('admin.industries.delete');

    // Gallery
    Route::get('/admin/galery', [GaleryController::class, 'galery'])->name('admin.galery');
    Route::get('/admin/tambahgalery', [GaleryController::class, 'tambahgalery'])->name('admin.tambahgalery');
    Route::post('/admin/insertgalery', [GaleryController::class, 'insertgalery'])->name('admin.insertgalery');
    Route::get('/admin/editgalery/{id}', [GaleryController::class, 'editgalery'])->name('admin.editgalery');
    Route::put('/admin/updategalery/{id}', [GaleryController::class, 'updategalery'])->name('admin.updategalery');
    Route::get('/admin/deletegalery/{id}', [GaleryController::class, 'deletegalery'])->name('admin.deletegalery');

    // tentang bumdes
    Route::get('/admin/tentangBumdes', [tentangBumdesController::class, 'index'])->name('admin.tentangbumdes.index');
    Route::get('/admin/tentangBumdes/edit', [tentangBumdesController::class, 'edit'])->name('admin.tentangbumdes.edit');
    Route::put('/admin/tentangBumdes', [tentangBumdesController::class, 'update'])->name('admin.tentangbumdes.update');
});
