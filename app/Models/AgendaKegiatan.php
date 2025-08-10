<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AgendaKegiatan extends Model
{
    protected $table = 'agenda_kegiatan';

    protected $fillable = [
        'judul',
        'tanggal',
        'jam_mulai',
        'jam_selesai',
        'lokasi',
        'deskripsi',
        'status',
    ];

    protected $casts = [
        'tanggal' => 'date',
    ];
}