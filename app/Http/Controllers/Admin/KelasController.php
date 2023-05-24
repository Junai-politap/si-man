<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\PesertaDidik;



class KelasController extends Controller{
    function index(){
       
        $data['list_kelas'] = Kelas::all();
        return view('admin.kelas.index', $data);
    }

    function create(){
       
        return view('admin.kelas.create');
        
    }

    function store(){
        $kelas = new Kelas;
        $kelas->kelas = request('kelas');    
        $kelas->semester = request('semester');         
        $kelas->save();

        

        return redirect('admin/kelas')->with('success', 'Data Berhasil Ditambahkan');
    
    }

    function show(Kelas $kelas){

        $data['list_pesertadidik'] =  PesertaDidik::all();
        return view('admin.kelas.show', $data);
        
    }

    function edit($kelas){
       
        $data['kelas'] = Kelas::find($kelas);
        return view('admin.kelas.edit', $data);
    }

    function update(Kelas $kelas){
        $kelas->kelas = request('kelas');     
        $kelas->semester = request('semester');   
        $kelas->save();

        return redirect('admin/kelas')->with('success', 'Data Berhasil Diedit');
    
        
    }

    function destroy(Kelas $kelas){
       
        $kelas->delete($kelas);

        return redirect('admin/kelas')->with('danger', 'Data Berhasil Dihapus');
     
    }

    
}