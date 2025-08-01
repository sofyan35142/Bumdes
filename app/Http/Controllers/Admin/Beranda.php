<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Beranda extends Controller
{
    public function beranda()
    {
        return view('Admin.beranda');
    }
}
