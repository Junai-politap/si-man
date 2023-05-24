<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mapel;


class MapelController extends Controller{
    function index(){
       
        $data['list_mapel'] = Mapel::all();
        return view('admin.mapel.index', $data);
    }

    function create(){
       
        return view('admin.mapel.create');
        
    }

    function store(){
        $mapel = new Mapel;
        $mapel->mapel = request('mapel');       
        $mapel->save();
        
        return redirect('admin/mapel')->with('success', 'Data Berhasil Ditambahkan');
    
    }

    function show($mapel){
       
        $data['mapel'] = Mapel::find($mapel);
        return view('admin.mapel.show', $data);
        
    }

 
    function edit($mapel){
       
        $data['mapel'] = Mapel::find($mapel);
        return view('admin.mapel.edit', $data);
    }

    function update(Mapel $mapel){

        $mapel->mapel= request('mapel');     
        $mapel->save();

        return redirect('admin/mapel')->with('success', 'Data Berhasil Diedit');
    }

    function destroy(Mapel $mapel){
       
        $mapel->handleDelete();
        $mapel->delete($mapel);

        return redirect('admin/mapel')->with('danger', 'Data Berhasil Dihapus');
     
    }

    
}