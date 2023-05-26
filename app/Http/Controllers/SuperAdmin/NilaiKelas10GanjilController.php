<?php
namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use Illuminate\Http\Request;
use App\Models\Nilai10Ganjil;
use App\Models\Mapel;
use App\Models\PesertaDidik;


class NilaiKelas10GanjilController extends Controller{
    function index(){
       
        $data['list_pesertadidik'] = PesertaDidik::all();
        return view('super-admin.nilai.index', $data);
    }

    function create(){
       
        return view('super-admin.nilai.create');
        
    }

    function store(){
        $nilai_kelas10ganjil = new Nilai10Ganjil();
        $nilai_kelas10ganjil->semester = request('semester');  
        $nilai_kelas10ganjil->sikap = request('sikap');
        $nilai_kelas10ganjil->pengetahuan = request('pengetahuan');
        $nilai_kelas10ganjil->keterampilan = request('keterampilan');       
        $nilai_kelas10ganjil->save();

        return redirect('super-admin/nilai')->with('success', 'Data Berhasil Ditambahkan');
    
    }

    function show($pesertadidik){
       
        $data['pesertadidik'] = PesertaDidik::find($pesertadidik);
        $data['list_kelas'] = Kelas::all();
        return view('super-admin.nilai.show', $data);
        
    }

    function edit(Nilai10Ganjil $nilai_kelas10ganjil){
       
        $data['nilai'] = $nilai_kelas10ganjil;
        return view('nilai.edit', $data);
    }

    function update(Nilai10Ganjil $nilai_kelas10ganjil){
        $nilai_kelas10ganjil->semester = request('semester');  
        $nilai_kelas10ganjil->sikap = request('sikap');
        $nilai_kelas10ganjil->pengetahuan = request('pengetahuan');
        $nilai_kelas10ganjil->keterampilan = request('keterampilan');     
        $nilai_kelas10ganjil->save();

        return redirect('super-admin/nilai')->with('success', 'Data Berhasil Diedit');
    
        
    }

    function destroy($nilai_kelas10ganjil){
       
        Nilai10Ganjil::destroy($nilai_kelas10ganjil);

        return redirect('super-admin/nilai')->with('danger', 'Data Berhasil Dihapus');
     
    }

    public function tambah_nilai10ganjil(Nilai10Ganjil $nilai_kelas10ganjil)
    {
        $data['list_mapel'] = Mapel::all();
        $data ['nilai'] = $nilai_kelas10ganjil;
        return view('super-admin.nilai.tambah-nilai-10-ganjil', $data);
    }

    // public function tambah_nilai10genap(Nilai $nilai)
    // {   
    //     $data['list_mapel'] = Mapel::all();
    //     $data ['nilai'] = $nilai;
    //     return view('super-admin.nilai.tambah-nilai-10-genap', $data);
    // }

    // public function tambah_nilai11ganjil(Nilai $nilai)
    // {   
    //     $data['list_mapel'] = Mapel::all();
    //     $data ['nilai'] = $nilai;
    //     return view('super-admin.nilai.tambah-nilai-11-ganjil', $data);
    // }

    // public function tambah_nilai11genap(Nilai $nilai)
    // {   
    //     $data['list_mapel'] = Mapel::all();
    //     $data ['nilai'] = $nilai;
    //     return view('super-admin.nilai.tambah-nilai-11-genap', $data);
    // }

    // public function tambah_nilai12ganjil(Nilai $nilai)
    // {   
    //     $data['list_mapel'] = Mapel::all();
    //     $data ['nilai'] = $nilai;
    //     return view('super-admin.nilai.tambah-nilai-12-ganjil', $data);
    // }

    // public function tambah_nilai12genap(Nilai $nilai)
    // {   
    //     $data['list_mapel'] = Mapel::all();
    //     $data ['nilai'] = $nilai;
    //     return view('super-admin.nilai.tambah-nilai-12-genap', $data);
    // }

    
}