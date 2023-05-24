<?php
namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mapel;


class MapelController extends Controller{
    function index(){
       
        $data['list_mapel'] = Mapel::all();
        return view('pegawai.mapel.index', $data);
    }

    function create(){
       
        return view('pegawai.mapel.create');
        
    }

    function store(){
        $mapel = new Mapel;
        $mapel->mapel = request('mapel');       
        $mapel->save();

        

        return redirect('pegawai/mapel')->with('success', 'Data Berhasil Ditambahkan');
    
    }

    function show(Mapel $mapel){
       
        $data['mapel'] = $mapel;
        return view('pegawai.mapel.show', $data);
        
    }

 
    function edit(Mapel $mapel){
       
        $data['mapel'] = $mapel;
        return view('pegawai.mapel.edit', $data);
    }

    function update(Mapel $mapel){

        $mapel->mapel= request('mapel');     
        $mapel->save();

        

        

        return redirect('pegawai/mapel')->with('success', 'Data Berhasil Diedit');
    }

    function destroy(Mapel $mapel){
       
        $mapel->handleDelete();
        $mapel->delete($mapel);

        return redirect('pegawai/mapel')->with('danger', 'Data Berhasil Dihapus');
     
    }

    
}