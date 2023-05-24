<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Anggota;
use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\PesertaDidik;



class AnggotaController extends Controller{
   

    function store(){
        $anggota = new Anggota();
        $anggota->id_peserta_didik = request('id_peserta_didik');    
        $anggota->semester = request('semester');         
        $anggota->save();

        

        return redirect('admin/kelas')->with('success', 'Data Berhasil Ditambahkan');
    
    }

    function storeKelas()
    {
        foreach (request('pesertadidik') as $id => $value) {
            $anggota = new Anggota;
            $anggota->id_peserta_didik = $id;
            $anggota->id_kelas = request('id_kelas');
            $anggota->save();
        }


        return redirect('admin/kelas')->with('success', 'Data Berhasil Ditambahkan');
    }

    
    function update(Anggota $anggota)
    {
        $anggota->id = request('id');

        $anggota->save();


        return redirect('admin.kelas')->with('success', 'Data Berhasil Diedit');
    }


    function destroy(Kelas $kelas){
       
        $kelas->delete($kelas);

        return redirect('admin/kelas')->with('danger', 'Data Berhasil Dihapus');
     
    }

    
}