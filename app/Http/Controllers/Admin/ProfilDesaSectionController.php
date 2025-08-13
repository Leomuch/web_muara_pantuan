<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProfilDesa;
use App\Models\ProfilDesaSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfilDesaSectionController extends Controller
{
    public function index(ProfilDesa $profil)
    {
        $sections = $profil->sections;
        return view('admin.profil.sections.index', compact('profil', 'sections'));
    }

    public function create(ProfilDesa $profil)
    {
        return view('admin.profil.sections.create', compact('profil'));
    }

    public function store(Request $request, ProfilDesa $profil)
    {
        $request->validate([
            'tipe' => 'required|in:informasi_umum,kondisi_potensi,visi_misi',
            'judul' => 'nullable|string|max:255',
            'isi' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $data = $request->only('tipe', 'judul', 'isi');
        $data['profil_desa_id'] = $profil->id;

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('profil_desa_sections', 'public');
        }

        ProfilDesaSection::create($data);

        return redirect()->route('profil.sections.index', $profil->id)
            ->with('success', 'Section berhasil ditambahkan.');
    }

    public function edit(ProfilDesa $profil, ProfilDesaSection $section)
    {
        return view('admin.profil.sections.edit', compact('profil', 'section'));
    }

    public function update(Request $request, ProfilDesa $profil, ProfilDesaSection $section)
    {
        $request->validate([
            'tipe' => 'required|in:informasi_umum,kondisi_potensi,visi_misi',
            'judul' => 'nullable|string|max:255',
            'isi' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $data = $request->only('tipe', 'judul', 'isi');

        if ($request->hasFile('gambar')) {
            if ($section->gambar) {
                Storage::disk('public')->delete($section->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('profil_desa_sections', 'public');
        }

        $section->update($data);

        return redirect()->route('profil.sections.index', $profil->id)
            ->with('success', 'Section berhasil diperbarui.');
    }

    public function destroy(ProfilDesa $profil, ProfilDesaSection $section)
    {
        if ($section->gambar) {
            Storage::disk('public')->delete($section->gambar);
        }
        $section->delete();

        return redirect()->route('profil.sections.index', $profil->id)
            ->with('success', 'Section berhasil dihapus.');
    }
}