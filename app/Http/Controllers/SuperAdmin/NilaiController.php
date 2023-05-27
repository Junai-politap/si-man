<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Anggota;
use App\Models\Kelas;
use Illuminate\Http\Request;
use App\Models\Nilai;
use App\Models\NilaiTambahan;
use App\Models\Mapel;
use App\Models\PesertaDidik;


class NilaiController extends Controller
{
    public function index()
    {

        $data['list_kelas'] = Kelas::all();
        return view('super-admin.nilai.index', $data);
    }

    public function create()
    {

        return view('super-admin.nilai.create');
    }

    public function store(Request $request){
        
        foreach (request('mapel') as $id_mapel => $id_mapel) {

        $nilai = New Nilai();
        $nilai->id_mapel = $id_mapel;
        $nilai->id_kelas = request('id_kelas');
        $nilai->id_peserta_didik = request('id_peserta_didik');
        $nilai->tahun_pelajaran = request('tahun_pelajaran');
        $nilai->semester = request('semester');
        $nilai->kkm_pengetahuan = request('kkm_pengetahuan');
        $nilai->nilai_pengetahuan = request('nilai_pengetahuan');
        $nilai->predikat_pengetahuan = request('predikat_pengetahuan');
        $nilai->nilai_keterampilan = request('nilai_keterampilan');
        $nilai->predikat_keterampilan = request('predikat_keterampilan');
        $nilai->spiritual_sikap = request('spiritual_sikap');
        $nilai->sosial_sikap = request('sosial_sikap');
        $nilai->save();      

        }

        $nilai_tambahan = new NilaiTambahan();
        $nilai_tambahan->id_peserta_didik = request('id_peserta_didik');
        $nilai_tambahan->id_kelas = request('id_kelas');
        $nilai_tambahan->sakit = request('sakit');
        $nilai_tambahan->izin = request('izin');
        $nilai_tambahan->tanpaketerangan = request('tanpaketerangan');
        $nilai_tambahan->ekskul_pramuka = request('ekskul_pramuka');
        $nilai_tambahan->ekskul_btq = request('ekskul_btq');
        $nilai_tambahan->ekskul_olahraga = request('ekskul_olahraga');
        $nilai_tambahan->save();


        $id_kelas = request('id_kelas');
        return redirect('super-admin/nilai/'.$id_kelas)->with('success', 'Data Berhasil Ditambahkan');
    }

    public function show($kelas)
    {

        $data['kelas'] = Kelas::find($kelas);
        $data['list_anggota'] = Anggota::where('id_kelas', $kelas)->get();
        return view('super-admin.nilai.show', $data);
    }

    public function edit(nilai $nilai_kelas10ganjil)
    {

        $data['nilai'] = $nilai_kelas10ganjil;
        return view('nilai.edit', $data);
    }

    public function update(nilai $nilai_kelas10ganjil)
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

    public function destroy($nilai_kelas10ganjil)
    {

        nilai::destroy($nilai_kelas10ganjil);

        return redirect('super-admin/nilai')->with('danger', 'Data Berhasil Dihapus');
    }

    public function nilai($anggota)
    {
        $data['anggota']= Anggota::find($anggota);
        $data['list_mapel'] = Mapel::all();

        return view('super-admin.nilai.nilai', $data);
    }

}
