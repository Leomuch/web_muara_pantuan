<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilDesa extends Model
{
    use HasFactory;

    protected $table = 'profil_desa';
    protected $fillable = ['nama_desa', 'foto_hero'];

    public function sections()
    {
        return $this->hasMany(ProfilDesaSection::class);
    }
}
