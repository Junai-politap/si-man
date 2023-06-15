<?php

namespace App\Http\Controllers\SuperAdmin;
use App\Http\Controllers\Controller;
use App\Models\DataCover;
use Illuminate\Http\Request;

class DataCoverController extends Controller
{
   
    public function index()
    {
       
        $data ['list_datacover'] = DataCover::all();
        return view('super-admin.datacover.index', $data);
    }

   
    public function create()
    {
       
        return view('super-admin.datacover.create');
    }

   
    public function store()
    {
        $datacover = new DataCover;
        
        $datacover->tahun_pelajaran = request('tahun_pelajaran'); 
        $datacover->save();


        return redirect('super-admin/data-cover')->with('success', 'Data berhasil ditambahkan');
    }

    
    public function show($datacover)
    {
     
        $data ['datacover'] = DataCover::find($datacover);
        return view('super-admin.datacover.show', $data);
    }

    public function edit($datacover)
    {
       
        $data ['datacover'] = DataCover::find($datacover);
        return view('super-admin.datacover.edit', $data);
    }

    
    public function update(DataCover $datacover)
    {
        
        $datacover->tahun_pelajaran = request('tahun_pelajaran'); 
        $datacover->save();
        

        return redirect('super-admin/data-cover')->with('success', 'Data berhasil diubah');
    }

    public function destroy($datacover)
    {
        DataCover::destroy($datacover);

        return redirect('super-admin/data-cover');
    }

    public function cetak_pdf($datacover)
    {
        $data ['datacover'] = DataCover::find($datacover);
        return view('super-admin.datacover.cetak_pdf', $data);
    }
}
