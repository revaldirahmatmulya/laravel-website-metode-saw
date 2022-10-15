<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matrik extends Model
{
    use HasFactory;
    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class, 'id_kriteria');
    }
    public function alternatif()
    {
        return $this->belongsTo(Alternatif::class, 'id_alternatif');
    }
    public function bobot()
    {
        return $this->belongsTo(Bobot::class, 'id_bobot');
    }
    public function skala()
    {
        return $this->belongsTo(Skala::class, 'id_bobot');
    }
}