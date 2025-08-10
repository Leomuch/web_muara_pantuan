<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AgendaKegiatan;
use Illuminate\Http\Request;

class AgendaKegiatanController extends Controller
{
    public function index()
    {
        $agenda = AgendaKegiatan::all();
        return view('admin.agenda_kegiatan.index', compact('agenda'));
    }

    public function create()
    {
        return view('admin.agenda_kegiatan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'jam_mulai' => 'nullable|date_format:H:i',
            'jam_selesai' => 'nullable|date_format:H:i|after_or_equal:jam_mulai',
            'lokasi' => 'nullable|string|max:255',
            'deskripsi' => 'nullable|string',
            'status' => 'required|in:Aktif,Selesai,Batal',
        ]);

        AgendaKegiatan::create($request->all());

        return redirect()->route('agenda_kegiatan.index')
                         ->with('success', 'Agenda kegiatan berhasil ditambahkan!');
    }

    public function show(string $id)
    {
        $agenda = AgendaKegiatan::findOrFail($id);
        return view('admin.agenda_kegiatan.show', compact('agenda'));
    }

    public function edit(string $id)
    {
        $agenda = AgendaKegiatan::findOrFail($id);
        return view('admin.agenda_kegiatan.edit', compact('agenda'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'jam_mulai' => 'nullable|date_format:H:i',
            'jam_selesai' => 'nullable|date_format:H:i|after_or_equal:jam_mulai',
            'lokasi' => 'nullable|string|max:255',
            'deskripsi' => 'nullable|string',
            'status' => 'required|in:Aktif,Selesai,Batal',
        ]);

        $agenda = AgendaKegiatan::findOrFail($id);
        $agenda->update($request->all());

        return redirect()->route('agenda_kegiatan.index')
                         ->with('success', 'Agenda kegiatan berhasil diupdate!');
    }

    public function destroy(string $id)
    {
        $agenda = AgendaKegiatan::findOrFail($id);
        $agenda->delete();

        return redirect()->route('agenda_kegiatan.index')
                         ->with('success', 'Agenda kegiatan berhasil dihapus!');
    }
}