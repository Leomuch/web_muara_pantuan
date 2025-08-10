<?php

namespace App\Http\Controllers;

use App\Models\StrukturDesa;
use Illuminate\Http\Request;

class StrukturDesaController extends Controller
{
    public function index()
    {
        $kepalaDesa = StrukturDesa::where('jabatan', 'Kepala Desa')->first();
        $struktur = StrukturDesa::where('jabatan', '!=', 'Kepala Desa')->get();

        return view('pages.struktur', compact('kepalaDesa', 'struktur'));
    }
}
