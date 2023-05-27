<?php

namespace App\Models;

use App\Models\Model;
use App\Models\Anggota;
use App\Models\Mapel;

class Kelas extends Model
{
    protected $table = 'kelas';

   
    function Anggota(){
        return $this->belongsTo(Anggota::class, 'id');
    }
   
    function Mapel(){
        return $this->belongsTo(Mapel::class, 'id');
    }

    function NilaiTambahan(){
        return $this->belongsTo(NilaiTambahan::class, 'id');
    }

}
