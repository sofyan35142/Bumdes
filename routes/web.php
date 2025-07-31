<?php

use App\Http\Controllers\Landingpage\Blog;
use App\Http\Controllers\Landingpage\home;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('Landingpage.index');
// });

Route::get('/', [home::class, 'home'])->name('home');

Route::get('/blog', [Blog::class, 'blog'])->name('blog');
Route::get('/blogdetail', [Blog::class, 'blogdetail'])->name('blogdetail');
