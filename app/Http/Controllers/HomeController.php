<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AgendaKegiatan;
use App\Models\Pengumuman;
use App\Models\Berita;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil agenda aktif terbaru, misalnya 5 data terbaru
        $agenda = AgendaKegiatan::where('status', 'Aktif')
                    ->orderBy('tanggal', 'asc')
                    ->take(5)
                    ->get();

        // Ambil pengumuman terbaru, misalnya 6 data terbaru
        $pengumuman = Pengumuman::orderBy('created_at', 'desc')
                        ->take(6)
                        ->get();

        $berita = Berita::orderBy('created_at', 'desc')
                    ->take(6)
                    ->get();


        // Kirim data agenda ke view 'home'
        return view('pages.home', compact('agenda', 'pengumuman', 'berita'));
    }
}