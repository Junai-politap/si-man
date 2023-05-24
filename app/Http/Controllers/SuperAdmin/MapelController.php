<?php
namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mapel;


class MapelController extends Controller{
    function index(){
       
        $data['list_mapel'] = Mapel::all();
        return view('super-admin.mapel.index', $data);
    }

    function create(){
       
        return view('super-admin.mapel.create');
        
    }

    function store(){
        $mapel = new Mapel;
        $mapel->mapel = request('mapel');       
        $mapel->save();

        return redirect('super-admin/mapel')->with('success', 'Data Berhasil Ditambahkan');
    
    }

    function show(Mapel $mapel){
       
        $data['mapel'] = $mapel;
        return view('super-admin.mapel.show', $data);
        
    }

 
    function edit(Mapel $mapel){
       
        $data['mapel'] = $mapel;
        return view('super-admin.mapel.edit', $data);
    }

    function update(Mapel $mapel){

        $mapel->mapel= request('mapel');     
        $mapel->save();

        return redirect('super-admin/mapel')->with('success', 'Data Berhasil Diedit');
    }

    function destroy(Mapel $mapel){
       
        $mapel->handleDelete();
        $mapel->delete($mapel);

        return redirect('super-admin/mapel')->with('danger', 'Data Berhasil Dihapus');
     
    }

    
}