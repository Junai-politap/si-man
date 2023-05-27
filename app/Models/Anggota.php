<?php

namespace App\Models;


use App\Models\Model;
use App\Models\PesertaDidik;
use App\Models\Kelas;

class Anggota extends Model
{
   
    protected $table = 'anggota';


    function PesertaDidik(){
        return $this->belongsTo(PesertaDidik::class, 'id_peserta_didik');
    }

    function Kelas(){
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }

   
}
