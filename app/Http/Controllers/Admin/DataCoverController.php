<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\DataCover;
use Illuminate\Http\Request;

class DataCoverController extends Controller
{
    
    public function index()
    {
       
        $data ['list_datacover'] = DataCover::all();
        return view('admin.datacover.index', $data);
    }

    
    public function create()
    {
       
        return view('admin.datacover.create');
    }

   
    public function store()
    {
        $datacover = new DataCover;
        $datacover->nama_sekolah = request('nama_sekolah');
        $datacover->nss_npsn = request('nss_npsn');      
        $datacover->alamat_sekolah = request('alamat_sekolah'); 
        $datacover->desa_kelurahan = request('desa_kelurahan'); 
        $datacover->kecamatan = request('kecamatan'); 
        $datacover->kabupaten = request('kabupaten'); 
        $datacover->provinsi = request('provinsi');
        $datacover->nama_kepala_sekolah = request('nama_kepala_sekolah');
        $datacover->nip_kepala_sekolah = request('nip_kepala_sekolah');
        $datacover->nama_petugas = request('nama_petugas');
        $datacover->nip_petugas = request('nip_petugas');
        $datacover->tahun_pelajaran = request('tahun_pelajaran'); 
        $datacover->save();

        $datacover->handleUploadFoto();

        return redirect('admin/datacover')->with('success', 'Data berhasil ditambahkan');
    }

   
    public function show($datacover)
    {
     
        $data ['datacover'] = DataCover::find($datacover);
        return view('admin.datacover.show', $data);
    }

    
    public function edit($datacover)
    {
       
        $data ['datacover'] = DataCover::find($datacover);
        return view('admin.datacover.edit', $data);
    }

    
    public function update(DataCover $datacover)
    {
        $datacover->nama_sekolah = request('nama_sekolah');
        $datacover->nss_npsn = request('nss_npsn');      
        $datacover->alamat_sekolah = request('alamat_sekolah'); 
        $datacover->desa_kelurahan = request('desa_kelurahan'); 
        $datacover->kecamatan = request('kecamatan'); 
        $datacover->kabupaten = request('kabupaten'); 
        $datacover->provinsi = request('provinsi');
        $datacover->nama_kepala_sekolah = request('nama_kepala_sekolah');
        $datacover->nip_kepala_sekolah = request('nip_kepala_sekolah');
        $datacover->nama_petugas = request('nama_petugas');
        $datacover->nip_petugas = request('nip_petugas');
        $datacover->tahun_pelajaran = request('tahun_pelajaran'); 
        $datacover->save();
        

        return redirect('admin/datacover')->with('success', 'Data berhasil diubah');
    }

    public function destroy($datacover)
    {
        $datacover->handleDelete();
        DataCover::destroy($datacover);

        return redirect('admin/datacover');
    }

    public function cetak_pdf(DataCover $datacover)
    {
        $data ['datacover'] = $datacover;
        return view('admin.datacover.cetak_pdf', $data);
    }
}
