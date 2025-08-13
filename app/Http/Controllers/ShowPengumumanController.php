<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengumuman;

class ShowPengumumanController extends Controller
{
    public function show(string $id)
    {
        $pengumuman = Pengumuman::findOrFail($id);

        return view('pages.pengumuman-show', compact('pengumuman'));
    }
}
