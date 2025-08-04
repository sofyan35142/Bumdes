<?php

namespace App\Http\Controllers\Landingpage;

use App\Http\Controllers\Controller;
use App\Models\SambutanDirektur;
use Illuminate\Http\Request;

class home extends Controller
{
    public function home()
    {
        $data = SambutanDirektur::first();
        return view('Landingpage.index',compact('data'));
    }
    public function detailunggulan()
    {
        return view('Landingpage.detailunggulan');
    }
}
