<?php
namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Anggota;
use App\Models\Kelas;
use App\Models\PesertaDidik;

class KelasController extends Controller{
    function index(){
       
        $data['list_kelas'] = Kelas::all();
        
        return view('super-admin.kelas.index', $data);
    }

    function create(){
       
        return view('super-admin.kelas.create');
        
    }

    function store(){
        $kelas = new Kelas;
        $kelas->kelas = request('kelas');    
        $kelas->semester = request('semester');         
        $kelas->save();

        

        return redirect('super-admin/kelas')->with('success', 'Data Berhasil Ditambahkan');
    
    }

    function show($kelas){

        $data['kelas'] =  Kelas::find($kelas);
        $data['list_anggota'] = Anggota::where('id_kelas', $kelas)->get();
        $data['list_peserta_didik'] = PesertaDidik::all();

        return view('super-admin.kelas.show', $data);
        
    }

    function edit($kelas){
       
        $data['kelas'] = Kelas::find($kelas);
        return view('super-admin.kelas.edit', $data);
    }

    function update(Kelas $kelas){
        $kelas->kelas = request('kelas');     
        $kelas->semester = request('semester');   
        $kelas->save();

        return redirect('super-admin/kelas')->with('success', 'Data Berhasil Diedit');
    
        
    }

    function destroy($kelas){
       
        Kelas::destroy($kelas);

        return redirect('super-admin/kelas')->with('danger', 'Data Berhasil Dihapus');
     
    }

    public function storeKelas()
    {
        foreach (request('peserta_didik') as $id_peserta_didik => $value) {
            $anggota = new Anggota;
            $anggota->id_peserta_didik = $id_peserta_didik;
            $anggota->id_kelas = request('id_kelas');
            $anggota->save();
        }
        return back()->with('success', 'Anggota Berhasil di Tambahkan');
    }
    
}