<?php

namespace App\Http\Controllers\Landingpage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Blog extends Controller
{
    public function blog()
    {
        return view('Landingpage.blog.blog');
    }
    public function blogdetail()
    {
        return view('Landingpage.blog.blogdetail');
    }
}
