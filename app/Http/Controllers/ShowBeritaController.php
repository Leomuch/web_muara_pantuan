<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class ShowBeritaController extends Controller
{
    public function show(string $id)
    {
        $berita = Berita::findOrFail($id);

        return view('pages.berita-show', compact('berita'));
    }
}
