<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Industry;
use Illuminate\Http\Request;

class IndustryAdmin extends Controller
{
    // Tampilkan semua data
    public function index()
    {
        $industries = Industry::all();
        return view('AdminPage.industries.index', compact('industries'));
    }

    // Form tambah data
    public function create()
    {
        return view('AdminPage.industries.create');
    }

    // Simpan data baru
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
            'staff_count' => 'required|integer',
        ]);

        Industry::create([
            'name' => $request->name,
            'icon' => $request->icon,
            'staff_count' => $request->staff_count,
        ]);

        return redirect()->route('admin.industries.index')->with('success', 'Data berhasil ditambahkan');
    }

    // Form edit data
    public function edit($id)
    {
        $industry = Industry::findOrFail($id);
        return view('AdminPage.industries.edit', compact('industry'));
    }

    // Update data
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
            'staff_count' => 'required|integer',
        ]);

        $industry = Industry::findOrFail($id);
        $industry->update([
            'name' => $request->name,
            'icon' => $request->icon,
            'staff_count' => $request->staff_count,
        ]);

        return redirect()->route('admin.industries.index')->with('success', 'Data berhasil diperbarui');
    }

    // Hapus data
    public function destroy($id)
    {
        $industry = Industry::findOrFail($id);
        $industry->delete();

        return redirect()->route('admin.industries.index')->with('success', 'Data berhasil dihapus');
    }
}
