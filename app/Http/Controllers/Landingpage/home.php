<?php

namespace App\Http\Controllers\Landingpage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class home extends Controller
{
    public function home()
    {
        return view('Landingpage.index');
    }
    public function detailunggulan()
    {
        return view('Landingpage.detailunggulan');
    }
}
