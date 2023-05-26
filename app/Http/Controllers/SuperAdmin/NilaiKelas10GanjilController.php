<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use Illuminate\Http\Request;
use App\Models\Nilai10Ganjil;
use App\Models\NilaiTambahan;
use App\Models\Mapel;
use App\Models\PesertaDidik;


class NilaiKelas10GanjilController extends Controller
{
    function index()
    {

        $data['list_pesertadidik'] = PesertaDidik::all();
        return view('super-admin.nilai.index', $data);
    }

    function create()
    {

        return view('super-admin.nilai.create');
    }

    function store()
    {

        
            $nilai_kelas10ganjil = new Nilai10Ganjil();
            $nilai_kelas10ganjil->id_mapel = request('id_mapel');
            $nilai_kelas10ganjil->id_peserta_didik = request('id_peserta_didik');
            $nilai_kelas10ganjil->tahun_pelajaran = request('tahun_pelajaran');
            $nilai_kelas10ganjil->semester = request('semester');
            $nilai_kelas10ganjil->kkm_pengetahuan = request('kkm_pengetahuan');
            $nilai_kelas10ganjil->nilai_pengetahuan = request('nilai_pengetahuan');
            $nilai_kelas10ganjil->predikat_pengetahuan = request('predikat_pengetahuan');
            $nilai_kelas10ganjil->nilai_keterampilan = request('nilai_keterampilan');
            $nilai_kelas10ganjil->predikat_keterampilan = request('predikat_keterampilan');
            $nilai_kelas10ganjil->spiritual_sikap = request('spiritual_sikap');
            $nilai_kelas10ganjil->sosial_sikap = request('sosial_sikap');
            $nilai_kelas10ganjil->ekskul_pramuka = request('ekskul_pramuka');
            $nilai_kelas10ganjil->ekskul_olahraga = request('ekskul_olahraga');
            $nilai_kelas10ganjil->ekskul_btq = request('ekskul_btq');
            $nilai_kelas10ganjil->sakit = request('sakit');
            $nilai_kelas10ganjil->izin = request('izin');
            $nilai_kelas10ganjil->tanpaketerangan = request('tanpaketerangan');

            $nilai_kelas10ganjil->save();

            
            $nilai_tambahan = new NilaiTambahan();
            $nilai_tambahan->sakit = request('sakit');
            $nilai_tambahan->izin = request('izin');
            $nilai_tambahan->tanpaketerangan = request('tanpaketerangan');
            $nilai_tambahan->ekskul_pramuka = request('ekskul_pramuka');
            $nilai_tambahan->ekskul_btq = request('ekskul_btq');        
            $nilai_tambahan->ekskul_olahraga = request('ekskul_olahraga');
            $nilai_tambahan->save();

    
        
        
        

        return redirect('super-admin/nilai')->with('success', 'Data Berhasil Ditambahkan');
    }

    function show($pesertadidik)
    {

        $data['pesertadidik'] = PesertaDidik::find($pesertadidik);
        $data['list_kelas'] = Kelas::all();
        return view('super-admin.nilai.show', $data);
    }

    function edit(Nilai10Ganjil $nilai_kelas10ganjil)
    {

        $data['nilai'] = $nilai_kelas10ganjil;
        return view('nilai.edit', $data);
    }

    function update(Nilai10Ganjil $nilai_kelas10ganjil)
    {
        $nilai_kelas10ganjil->id_mapel = request('id_mapel');
        $nilai_kelas10ganjil->t = request('id_peserta_didik');
        $nilai_kelas10ganjil->tahun_pelajaran = request('tahun_pelajaran');
        $nilai_kelas10ganjil->semester = request('semester');
        $nilai_kelas10ganjil->kkm_pengetahuan = request('kkm_pengetahuan');
        $nilai_kelas10ganjil->nilai_pengetahuan = request('nilai_pengetahuan');
        $nilai_kelas10ganjil->predikat_pengetahuan = request('predikat_pengetahuan');
        $nilai_kelas10ganjil->nilai_keterampilan = request('nilai_keterampilan');
        $nilai_kelas10ganjil->predikat_keterampilan = request('predikat_keterampilan');
        $nilai_kelas10ganjil->spiritual_sikap = request('spiritual_sikap');
        $nilai_kelas10ganjil->sosial_sikap = request('sosial_sikap');
        $nilai_kelas10ganjil->ekskul_pramuka = request('ekskul_pramuka');
        $nilai_kelas10ganjil->ekskul_olahraga = request('ekskul_olahraga');
        $nilai_kelas10ganjil->ekskul_btq = request('ekskul_btq');
        $nilai_kelas10ganjil->sakit = request('sakit');
        $nilai_kelas10ganjil->izin = request('izin');
        $nilai_kelas10ganjil->tanpaketerangan = request('tanpaketerangan');
        $nilai_kelas10ganjil->save();

        return redirect('super-admin/nilai')->with('success', 'Data Berhasil Diedit');
    }

    function destroy($nilai_kelas10ganjil)
    {

        Nilai10Ganjil::destroy($nilai_kelas10ganjil);

        return redirect('super-admin/nilai')->with('danger', 'Data Berhasil Dihapus');
    }

    public function tambah_nilai10ganjil(PesertaDidik $pesertadidik)
    {
        $data['list_mapel'] = Mapel::all();
        $data['list_kelas'] = Kelas::all();
        $data['pesertadidik'] = $pesertadidik;
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