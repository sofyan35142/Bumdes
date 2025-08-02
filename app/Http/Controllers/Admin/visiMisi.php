<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VisiMisi as VisiMisiModel;

class visiMisi extends Controller
{
    public function index()
    {
        $data = VisiMisiModel::first();
        return view('AdminPage.visiMisi.index', compact('data'));
    }

    public function edit()
    {
        $data = VisiMisiModel::first();
        return view('AdminPage.visiMisi.index');
    }
}
