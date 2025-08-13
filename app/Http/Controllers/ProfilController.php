<?php

namespace App\Http\Controllers;

use App\Models\ProfilDesa;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        // Ambil profil desa beserta sections
        $profil = ProfilDesa::with('sections')->first();
        // Kalau banyak desa, bisa pakai find($id) atau where('id', ...)

        return view('pages.profil', compact('profil'));
    }
}