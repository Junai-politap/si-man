<?php

namespace App\Models;

use App\Models\Model;
use App\Models\Anggota;
class Kelas extends Model
{
    protected $table = 'kelas';

   
    function Anggota(){
        return $this->belongsTo(Anggota::class, 'id');
    }
   

}
