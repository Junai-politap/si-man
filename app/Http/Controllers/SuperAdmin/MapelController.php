<?php
namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mapel;
use App\Models\Kelas;


class MapelController extends Controller{
    function index(){
       
        $data['list_mapel'] = Mapel::all();
        
        return view('super-admin.mapel.index', $data);
    }

    function create(){
       
        $data['list_kelas'] = Kelas::all();
        return view('super-admin.mapel.create', $data);
        
    }

    function store(){
        $mapel = new Mapel;
        $mapel->id_kelas = request('id_kelas');    
        $mapel->mapel = request('mapel');       
        $mapel->save();

        return redirect('super-admin/mapel')->with('success', 'Data Berhasil Ditambahkan');
    
    }

    function show(Mapel $mapel){
       
        $data['mapel'] = $mapel;
        return view('super-admin.mapel.show', $data);
        
    }

 
    function edit(Mapel $mapel){
        $data['list_kelas'] = Kelas::all();
        $data['mapel'] = $mapel;
        return view('super-admin.mapel.edit', $data);
    }

    function update(Mapel $mapel){
        
        $mapel->id_kelas = request('id_kelas');
        $mapel->mapel= request('mapel');     
        $mapel->save();

        return redirect('super-admin/mapel')->with('success', 'Data Berhasil Diedit');
    }

    function destroy($mapel){
       
        Mapel::destroy($mapel);

        return redirect('super-admin/mapel')->with('danger', 'Data Berhasil Dihapus');
     
    }

    
}