<?php

use App\Http\Controllers\Landingpage\Blog;
use App\Http\Controllers\Landingpage\home;
<<<<<<< HEAD
use App\Http\Controllers\Landingpage\Profile;
use App\Http\Controllers\Landingpage\Contact;
=======
use App\Http\Controllers\Landingpage\pages;
>>>>>>> 0834c6ef6f2c7e52a0e9d226daf298aa4c8ea7cb
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('Landingpage.index');
// });

Route::get('/', [home::class, 'home'])->name('home');

Route::get('/blog', [Blog::class, 'blog'])->name('blog');
Route::get('/blogdetail', [Blog::class, 'blogdetail'])->name('blogdetail');

<<<<<<< HEAD
Route::get('/profile/tentangBumdes', [Profile::class, 'tentangBumdes'])->name('profile.tentangBumdes');
Route::get('/profile/visimisi', [Profile::class, 'visiMisi'])->name('profile.visiMisi');
Route::get('/profile/strukturorganisasi', [Profile::class, 'strukturorganisasi'])->name('profile.strukturorganisasi');
Route::get('/profile/dasarhukum', [Profile::class, 'dasarhukum'])->name('profile.dasarhukum');


Route::get('/contact', [Contact::class, 'contact'])->name('contact');


=======

Route::get('/galeri', [pages::class, 'galeri'])->name('galeri');
Route::get('/lowongan', [pages::class, 'lowongan'])->name('lowongan');
>>>>>>> 0834c6ef6f2c7e52a0e9d226daf298aa4c8ea7cb
