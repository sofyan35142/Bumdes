<?php

namespace App\Http\Controllers\Landingpage;

use App\Http\Controllers\Controller;
use App\Models\InformasiKontak;
use Illuminate\Http\Request;

class Contact extends Controller
{
    public function Contact()
    {
        $data = InformasiKontak::first();
        // dd($data);
        return view('Landingpage.contact.contact', compact('data'));
    }
}
