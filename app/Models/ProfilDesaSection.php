<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilDesaSection extends Model
{
    use HasFactory;

    protected $table = 'profil_desa_sections';
    protected $fillable = ['profil_desa_id', 'tipe', 'judul', 'isi', 'gambar'];

    public function profilDesa()
    {
        return $this->belongsTo(ProfilDesa::class);
    }
}
