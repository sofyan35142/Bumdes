<?php

use App\Http\Controllers\Admin\Beranda;
use App\Http\Controllers\Admin\visiMisi;
use App\Http\Controllers\Landingpage\Blog;
use App\Http\Controllers\Landingpage\home;
use App\Http\Controllers\Landingpage\Profile;
use App\Http\Controllers\Landingpage\Contact;
use App\Http\Controllers\Landingpage\pages;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('Landingpage.index');
// });

Route::get('/', [home::class, 'home'])->name('home');

Route::get('/blog', [Blog::class, 'blog'])->name('blog');
Route::get('/blogdetail', [Blog::class, 'blogdetail'])->name('blogdetail');

Route::get('/profile/tentangBumdes', [Profile::class, 'tentangBumdes'])->name('profile.tentangBumdes');
Route::get('/profile/visimisi', [Profile::class, 'visiMisi'])->name('profile.visiMisi');
Route::get('/profile/strukturorganisasi', [Profile::class, 'strukturorganisasi'])->name('profile.strukturorganisasi');
Route::get('/profile/dasarhukum', [Profile::class, 'dasarhukum'])->name('profile.dasarhukum');


Route::get('/contact', [Contact::class, 'contact'])->name('contact');



Route::get('/galeri', [pages::class, 'galeri'])->name('galeri');
Route::get('/lowongan', [pages::class, 'lowongan'])->name('lowongan');
Route::get('/pages/galeri', [pages::class, 'galeri'])->name('galeri');
Route::get('/pages/lowongan', [pages::class, 'lowongan'])->name('lowongan');
Route::get('/pages/keuangan', [pages::class, 'keuangan'])->name('keuangan');


Route::get('/admin', [Beranda::class, 'beranda'])->name('admin.beranda');

<<<<<<< HEAD
Route::get('/admin/visi-misi', [visiMisi::class, 'index'])->name('admin.visiMisi');
Route::get('/admin/visi-misi/edit', [VisiMisi::class, 'edit'])->name('admin.visi_misi.edit');
Route::put('/admin/visi-misi/update', [VisiMisi::class, 'edit'])->name('admin.visi_misi.update');
=======
//////////////////////////////SLIDERRRRRRRRRRRRRRR////////////////////////////////////////
Route::get('/admin/slider', [Beranda::class, 'slider'])->name('admin.slider');
Route::get('/admin/editslider/{id}', [Beranda::class, 'editslider']);
Route::post('/admin/updateslider/{id}', [Beranda::class, 'updateslider'])->name('admin.updateslider');
//////////////////////////////Sambutan DIrektur/////////////////////////////////////////
Route::get('/admin/sambutan', [Beranda::class, 'sambutan'])->name('admin.sambutan');
Route::get('/admin/editsambutan/{id}', [Beranda::class, 'editsambutan']);
Route::post('/admin/updatesambutan/{id}', [Beranda::class, 'updatesambutan'])->name('admin.updatesambutan');


>>>>>>> 09828339ac63708b7be75e014660edb70ca4c781
