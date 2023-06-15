<?php

namespace App\Models;


use App\Models\Model;
use App\Models\Nilai;
use App\Models\Kelas;
use App\Models\PesertaDidik;



class Anggota extends Model
{
   
    protected $table = 'anggota';


    function Nilai(){
        return $this->belongsTo(Nilai::class, 'id');
    }

    function PesertaDidik(){
        return $this->belongsTo(PesertaDidik::class, 'id_peserta_didik');
    }

    function Kelas(){
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }

   
}
