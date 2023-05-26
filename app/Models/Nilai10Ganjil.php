<?php

namespace App\Models;
use App\Models\Model;

use App\Models\Mapel;
use App\Models\PesertaDidik;

class Nilai10Ganjil extends Model
{
    protected $table = 'nilai_kelas10ganjil';

   
    function Mapel(){
        return $this->belongsTo(Mapel::class, 'id_mapel');
    }

    function PesertaDidik(){
        return $this->belongsTo(PesertaDidik::class, 'id_peserta_didik');
    }
}  
