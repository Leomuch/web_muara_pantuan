<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StrukturDesa;
use Illuminate\Http\Request;
use Exception;

class StrukturDesaController extends Controller
{
    public function index()
    {
        $struktur = StrukturDesa::all();
        return view('admin.struktur_desa.index', compact('struktur'));
    }

    public function create()
    {
        return view('admin.struktur_desa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'foto' => 'nullable|image|max:2048',
        ]);

        try {
            $struktur = $request->only(['nama', 'jabatan']);

            if ($request->hasFile('foto')) {
                $struktur['foto'] = $request->file('foto')->store('foto_struktur', 'public');
            }

            StrukturDesa::create($struktur);

            return redirect()->route('struktur_desa.index')
                             ->with('success', 'Data berhasil ditambahkan!');
        } catch (Exception $e) {
            return redirect()->back()
                             ->with('error', 'Gagal menambahkan data: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $struktur = StrukturDesa::findOrFail($id);
        return view('admin.struktur_desa.edit', compact('struktur'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'foto' => 'nullable|image|max:2048',
        ]);

        try {
            $struktur = StrukturDesa::findOrFail($id);
            $updateData = $request->only(['nama', 'jabatan']);

            if ($request->hasFile('foto')) {
                $updateData['foto'] = $request->file('foto')->store('foto_struktur', 'public');
            }

            $struktur->update($updateData);

            return redirect()->route('admin.struktur_desa.index')
                             ->with('success', 'Data berhasil diupdate!');
        } catch (Exception $e) {
            return redirect()->back()
                             ->with('error', 'Gagal mengupdate data: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $struktur = StrukturDesa::findOrFail($id);
            $struktur->delete();

            return redirect()->route('struktur_desa.index')
                             ->with('success', 'Data berhasil dihapus!');
        } catch (Exception $e) {
            return redirect()->back()
                             ->with('error', 'Gagal menghapus data: ' . $e->getMessage());
        }
    }
}