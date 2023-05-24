<?php

namespace App\Http\Controllers\Pegawai;
use App\Http\Controllers\Controller;
use App\Models\DataCover;
use Illuminate\Http\Request;

class DataCoverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $data ['list_datacover'] = DataCover::all();
        return view('pegawai.datacover.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('pegawai.datacover.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

        return redirect('pegawai/datacover')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(DataCover $datacover)
    {
     
        $data ['datacover'] = $datacover;
        return view('pegawai.datacover.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(DataCover $datacover)
    {
       
        $data ['datacover'] = $datacover;
        return view('pegawai.datacover.edit', $data);
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
        

        return redirect('pegawai/datacover')->with('success', 'Data berhasil diubah');
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

        return redirect('pegawai/datacover');
    }

    public function cetak_pdf(DataCover $datacover)
    {
        $data ['datacover'] = $datacover;
        return view('pegawai.datacover.cetak_pdf', $data);
    }
}
