<?php

namespace App\Models;
use App\Models\Model;

use App\Models\Mapel;
use App\Models\Anggota;

class Nilai extends Model
{
    protected $table = 'nilai';

   
    function Mapel(){
        return $this->belongsTo(Mapel::class, 'id_mapel');
    }

    function Anggota(){
        return $this->belongsTo(Anggota::class, 'id_anggota');
    }
}  
