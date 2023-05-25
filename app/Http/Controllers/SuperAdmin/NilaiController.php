<?php
namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use Illuminate\Http\Request;
use App\Models\Nilai;
use App\Models\Mapel;
use App\Models\PesertaDidik;


class NilaiController extends Controller{
    function index(){
       
        $data['list_pesertadidik'] = PesertaDidik::all();
        return view('super-admin.nilai.index', $data);
    }

    function create(){
       
        return view('super-admin.nilai.create');
        
    }

    function store(){
        $nilai = new Nilai;
        $nilai->semester = request('semester');  
        $nilai->sikap = request('sikap');
        $nilai->pengetahuan = request('pengetahuan');
        $nilai->keterampilan = request('keterampilan');       
        $nilai->save();

        return redirect('super-admin/nilai')->with('success', 'Data Berhasil Ditambahkan');
    
    }

    function show($pesertadidik){
       
        $data['pesertadidik'] = PesertaDidik::find($pesertadidik);
        $data['list_kelas'] = Kelas::all();
        return view('super-admin.nilai.show', $data);
        
    }

    function edit(Nilai $nilai){
       
        $data['nilai'] = $nilai;
        return view('nilai.edit', $data);
    }

    function update(Nilai $nilai){
        $nilai->semester = request('semester');  
        $nilai->sikap = request('sikap');
        $nilai->pengetahuan = request('pengetahuan');
        $nilai->keterampilan = request('keterampilan');     
        $nilai->save();

        return redirect('super-admin/nilai')->with('success', 'Data Berhasil Diedit');
    
        
    }

    function destroy($nilai){
       
        Nilai::destroy($nilai);

        return redirect('super-admin/nilai')->with('danger', 'Data Berhasil Dihapus');
     
    }

    public function tambah_nilai10ganjil(Nilai $nilai)
    {
        $data['list_mapel'] = Mapel::all();
        $data ['nilai'] = $nilai;
        return view('super-admin.nilai.tambah_nilai10ganjil', $data);
    }

    public function tambah_nilai10genap(Nilai $nilai)
    {   
        $data['list_mapel'] = Mapel::all();
        $data ['nilai'] = $nilai;
        return view('super-admin.nilai.tambah_nilai10genap', $data);
    }

    public function tambah_nilai11ganjil(Nilai $nilai)
    {   
        $data['list_mapel'] = Mapel::all();
        $data ['nilai'] = $nilai;
        return view('super-admin.nilai.tambah_nilai11ganjil', $data);
    }

    public function tambah_nilai11genap(Nilai $nilai)
    {   
        $data['list_mapel'] = Mapel::all();
        $data ['nilai'] = $nilai;
        return view('super-admin.nilai.tambah_nilai11genap', $data);
    }

    public function tambah_nilai12ganjil(Nilai $nilai)
    {   
        $data['list_mapel'] = Mapel::all();
        $data ['nilai'] = $nilai;
        return view('super-admin.nilai.tambah_nilai12ganjil', $data);
    }

    public function tambah_nilai12genap(Nilai $nilai)
    {   
        $data['list_mapel'] = Mapel::all();
        $data ['nilai'] = $nilai;
        return view('super-admin.nilai.tambah_nilai12genap', $data);
    }

    
}