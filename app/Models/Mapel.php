<?php

namespace App\Models;
use App\Models\Model;
use App\Models\Nilai;

class Mapel extends Model
{
    
    protected $table = "mapel";

    function Nilai(){
        return $this->belongsTo(Nilai::class, 'id');
    }

}
