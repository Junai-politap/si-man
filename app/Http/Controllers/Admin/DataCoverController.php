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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($datacover)
    {
     
        $data ['datacover'] = DataCover::find($datacover);
        return view('admin.datacover.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($datacover)
    {
       
        $data ['datacover'] = DataCover::find($datacover);
        return view('admin.datacover.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataCover $datacover)
    {
        $datacover->handleDelete();
        $datacover->delete();

        return redirect('admin/datacover');
    }

    public function cetak_pdf(DataCover $datacover)
    {
        $data ['datacover'] = $datacover;
        return view('admin.datacover.cetak_pdf', $data);
    }
}
