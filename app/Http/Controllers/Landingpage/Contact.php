<?php

namespace App\Http\Controllers\Landingpage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Contact extends Controller
{
    public function Contact()
    {
        return view('Landingpage.contact.contact');
    }
}
