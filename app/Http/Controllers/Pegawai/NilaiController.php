<?php
namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use Illuminate\Http\Request;
use App\Models\Nilai;
use App\Models\PesertaDidik;


class NilaiController extends Controller{
    function index(){
       
        $data['list_pesertadidik'] = PesertaDidik::all();
        return view('pegawai.nilai.index', $data);
    }

    function create(){
       
        return view('pegawai.nilai.create');
        
    }

    function store(){
        $nilai = new Nilai;
        $nilai->semester = request('semester');  
        $nilai->sikap = request('sikap');
        $nilai->pengetahuan = request('pengetahuan');
        $nilai->keterampilan = request('keterampilan');       
        $nilai->save();

        return redirect('pegawai/nilai')->with('success', 'Data Berhasil Ditambahkan');
    
    }

    function show($pesertadidik){
       
        $data['pesertadidik'] = PesertaDidik::find($pesertadidik);
        $data['list_kelas'] = Kelas::all();
        return view('pegawai.nilai.show', $data);
        
    }

    function edit(Nilai $nilai){
       
        $data['nilai'] = $nilai;
        return view('nilai.edit', $data);
    }

    function update(Nilai $nilai){
        $nilai->semester = request('semester');  
        $nilai->sikap = request('sikap');
        $nilai->pengetahuan = request('pengetahuan');
        $nilai->keterampilan = request('keterampilan');     
        $nilai->save();

        return redirect('pegawai/nilai')->with('success', 'Data Berhasil Diedit');
    
    }

    function destroy(Nilai $nilai){
       
        $nilai->handleDelete();
        $nilai->delete($nilai);

        return redirect('pegawai/nilai')->with('danger', 'Data Berhasil Dihapus');
     
    }

    
}