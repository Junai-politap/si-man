<?php

namespace App\Models;
use App\Models\Model;
use App\Models\Nilai;
use App\Models\Kelas;
class Mapel extends Model
{
    
    protected $table = "mapel";

    function Nilai_10(){
        return $this->belongsTo(Nilai::class, 'id');
    }

    
    function Kelas(){
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }

    
}
