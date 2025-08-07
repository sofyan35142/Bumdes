<?php

namespace App\Http\Controllers\Landingpage;

use Illuminate\Http\Request;
use App\Models\PanduanBumdes;
use App\Models\SambutanDirektur;
use App\Http\Controllers\Controller;

class home extends Controller
{
    public function home()
    {
        $data = SambutanDirektur::first();
        $book = PanduanBumdes::first();
        return view('Landingpage.index',compact('data','book'));
    }
    public function detailunggulan()
    {
        return view('Landingpage.detailunggulan');
    }
}
