<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Tampilkan halaman profile admin
     */
    public function index()
    {
        /** @var User $user */
        $user = Auth::user();
        return view('AdminPage.profile.index', compact('user'));
    }

    /**
     * Tampilkan form edit profile admin
     */
    public function edit()
    {
        /** @var User $user */
        $user = Auth::user();
        return view('AdminPage.profile.edit', compact('user'));
    }

    /**
     * Update data profile admin
     */
    public function update(Request $request)
    {
        /** @var User $user */
        $user = Auth::user();

        // Validasi input
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email,' . $user->id],
            'password' => ['nullable', 'string', 'min:6', 'confirmed'], // harus ada input password_confirmation
        ]);

        // Update data user
        $user->name = $request->name;
        $user->email = $request->email;

        // Jika password diisi, update password (otomatis hashed sesuai casts di model User)
        if ($request->filled('password')) {
            $user->password = $request->password;
        }

        $user->save();

        return redirect()->route('admin.profile')->with('success', 'Profile berhasil diperbarui.');
    }
}
