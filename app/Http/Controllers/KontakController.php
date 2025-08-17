<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class KontakController extends Controller
{
    public function kirim(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'required|email',
            'pesan' => 'required|string',
        ]);

        // Kirim email
        Mail::send('emails.kontak', $data, function ($message) use ($data) {
            $message->to('infodesamuarapantuan@gmail.com')
                    ->subject('Pesan Baru dari Website Desa')
                    ->from($data['email'], $data['nama']);
        });

        return back()->with('success', 'Pesan berhasil dikirim!');
    }
}