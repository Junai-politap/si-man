<?php

namespace App\Models;

use App\Models\Model;
use App\Models\Nilai;
use App\Models\Anggota;

class PesertaDidik extends Model
{
    
    protected $table = 'pesertadidik';

    function Nilai(){
        return $this->belongsTo(Nilai::class, 'id');
    }

    
    function Anggota(){
        return $this->belongsTo(Anggota::class, 'id');
    }
   
}
