<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StrukturDesa extends Model
{
    protected $table = 'struktur_desa';

    // Kolom yang bisa diisi (mass assignable)
    protected $fillable = [
        'nama',
        'jabatan',
        'foto',
    ];
}