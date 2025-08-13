<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProfilDesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfilDesaController extends Controller
{
    public function index()
    {
        $profil = ProfilDesa::first();
        return view('admin.profil.index', compact('profil'));
    }

    public function create()
    {
        return view('admin.profil.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_desa' => 'required|string|max:255',
            'foto_hero' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $data = $request->only('nama_desa');

        if ($request->hasFile('foto_hero')) {
            $data['foto_hero'] = $request->file('foto_hero')->store('profil_desa', 'public');
        }

        ProfilDesa::create($data);

        return redirect()->route('profil.index')->with('success', 'Profil Desa berhasil dibuat.');
    }

    public function edit(ProfilDesa $profil)
    {
        return view('admin.profil.edit', compact('profil'));
    }

    public function update(Request $request, ProfilDesa $profil)
    {
        $request->validate([
            'nama_desa' => 'required|string|max:255',
            'foto_hero' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $data = $request->only('nama_desa');

        if ($request->hasFile('foto_hero')) {
            if ($profil->foto_hero) {
                Storage::disk('public')->delete($profil->foto_hero);
            }
            $data['foto_hero'] = $request->file('foto_hero')->store('profil_desa', 'public');
        }

        $profil->update($data);

        return redirect()->route('profil.index')->with('success', 'Profil Desa berhasil diperbarui.');
    }

    public function destroy(ProfilDesa $profil)
    {
        if ($profil->foto_hero) {
            Storage::disk('public')->delete($profil->foto_hero);
        }
        $profil->delete();

        return redirect()->route('profil.index')->with('success', 'Profil Desa berhasil dihapus.');
    }
}