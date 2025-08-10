<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AgendaKegiatan extends Model
{

    protected $table = 'agenda_kegiatan';

    protected $fillable = [
        'judul',
        'tanggal_mulai',
        'tanggal_selesai',
        'lokasi',
        'deskripsi',
        'status',
    ];

    // Jika ingin, bisa menambahkan casting tanggal agar otomatis jadi Carbon instance
    protected $casts = [
        'tanggal_mulai' => 'datetime',
        'tanggal_selesai' => 'datetime',
    ];
}