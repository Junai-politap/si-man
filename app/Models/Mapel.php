<?php

namespace App\Models;
use App\Models\Model;
use App\Models\Nilai;
use App\Models\Kelas;
use App\Models\Nilai10Ganjil;

class Mapel extends Model
{
    
    protected $table = "mapel";

    function Nilai10Ganjil(){
        return $this->belongsTo(Nilai10Ganjil::class, 'id');
    }

    
    function Kelas(){
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }

    
}
