<?php
namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PesertaDidik;


class PesertaDidikController extends Controller{

    function index(){
       
        $data['list_pesertadidik'] = PesertaDidik::all();
        return view('pegawai.pesertadidik.index', $data);
    }

    function create(){
       
        return view('pegawai.pesertadidik.create');
        
    }

    function store(){
        $pesertadidik = new PesertaDidik;
        $pesertadidik->nis = request('nis');    
        $pesertadidik->nisn = request('nisn');    
        $pesertadidik->nama_lengkap = request('nama_lengkap');    
        $pesertadidik->nama_panggilan = request('nama_panggilan');    
        $pesertadidik->jenis_kelamin = request('jenis_kelamin');    
        $pesertadidik->tempat_lahir = request('tempat_lahir');    
        $pesertadidik->tanggal_lahir = request('tanggal_lahir');         
        $pesertadidik->agama = request('agama');    
        $pesertadidik->kewarganegaraan = request('kewarganegaraan');    
        $pesertadidik->anak_ke = request('anak_ke');    
        $pesertadidik->saudara_kandung = request('saudara_kandung');    
        $pesertadidik->saudara_tiri = request('saudara_tiri');    
        $pesertadidik->saudara_angkat = request('saudara_angkat');    
        $pesertadidik->status = request('status');    
        $pesertadidik->bahasa_sehari_hari = request('bahasa_sehari_hari');    
        $pesertadidik->jalan = request('jalan');    
        $pesertadidik->desa = request('desa');    
        $pesertadidik->rt_rw = request('rt_rw');    
        $pesertadidik->kecamatan = request('kecamatan');
        $pesertadidik->kabupaten = request('kabupaten');    
        $pesertadidik->provinsi = request('provinsi');    
        $pesertadidik->kode_pos = request('kode_pos');        
        $pesertadidik->telepon = request('telepon');    
        $pesertadidik->tinggal_bersama = request('tinggal_bersama');    
        $pesertadidik->jarak_sekolah = request('jarak_sekolah');    
        $pesertadidik->gol_darah = request('gol_darah');    
        $pesertadidik->penyakit = request('penyakit');    
        $pesertadidik->kelainan_jasmani = request('kelainan_jasmani');    
        $pesertadidik->tinggi_badan = request('tinggi_badan');    
        $pesertadidik->berat_badan = request('berat_badan');    
        $pesertadidik->sekolah_asal_pendidikan_sebelumnya = request('sekolah_asal_pendidikan_sebelumnya');
        $pesertadidik->tanggal_ijazah_pendidikan_sebelumnya = request('tanggal_ijazah_pendidikan_sebelumnya');
        $pesertadidik->no_ijazah_pendidikan_sebelumnya = request('no_ijazah_pendidikan_sebelumnya');
        $pesertadidik->lama_belajar_pendidikan_sebelumnya = request('lama_belajar_pendidikan_sebelumnya');
        $pesertadidik->darisekolah_pindahan = request('darisekolah_pindahan');
        $pesertadidik->alasan_pindahan = request('alasan_pindahan');
        $pesertadidik->dikelas_diterima = request('dikelas_diterima');
        $pesertadidik->kelompok_diterima = request('kelompok_diterima');
        $pesertadidik->jurusan_diterima = request('jurusan_diterima');
        $pesertadidik->tanggal_diterima = request('tanggal_diterima');
        $pesertadidik->nama_ayah = request('nama_ayah');
        $pesertadidik->agama_ayah = request('agama_ayah');
        $pesertadidik->kewarganegaraan_ayah = request('kewarganegaraan_ayah');
        $pesertadidik->pend_terakhir_ayah = request('pend_terakhir_ayah');
        $pesertadidik->pekerjaan_ayah = request('pekerjaan_ayah');
        $pesertadidik->penghasilan_ayah = request('penghasilan_ayah');
        $pesertadidik->jalan_ayah = request('jalan_ayah');    
        $pesertadidik->rt_rw_ayah = request('rt_rw_ayah');
        $pesertadidik->desa_ayah = request('desa_ayah');
        $pesertadidik->kecamatan_ayah = request('kecamatan_ayah');
        $pesertadidik->kabupaten_ayah = request('kabupaten_ayah');
        $pesertadidik->provinsi_ayah = request('provinsi_ayah');
        $pesertadidik->kode_pos_ayah = request('kode_pos_ayah');
        $pesertadidik->telepon_ayah = request('telepon_ayah');
        $pesertadidik->keadaan_ayah = request('keadaan_ayah');
        $pesertadidik->nama_ibu = request('nama_ibu');
        $pesertadidik->agama_ibu = request('agama_ibu');
        $pesertadidik->kewarganegaraan_ibu = request('kewarganegaraan_ibu');
        $pesertadidik->pend_terakhir_ibu = request('pend_terakhir_ibu');
        $pesertadidik->pekerjaan_ibu = request('pekerjaan_ibu');
        $pesertadidik->penghasilan_ibu = request('penghasilan_ibu');
        $pesertadidik->jalan_ibu = request('jalan_ibu');    
        $pesertadidik->rt_rw_ibu = request('rt_rw_ibu');
        $pesertadidik->desa_ibu = request('desa_ibu');
        $pesertadidik->kecamatan_ibu = request('kecamatan_ibu');
        $pesertadidik->kabupaten_ibu = request('kabupaten_ibu');
        $pesertadidik->provinsi_ibu = request('provinsi_ibu');
        $pesertadidik->kode_pos_ibu = request('kode_pos_ibu');
        $pesertadidik->telepon_ibu = request('telepon_ibu');
        $pesertadidik->keadaan_ibu = request('keadaan_ibu');
        $pesertadidik->nama_wali = request('nama_wali');
        $pesertadidik->agama_wali = request('agama_wali');
        $pesertadidik->kewarganegaraan_wali = request('kewarganegaraan_wali');
        $pesertadidik->pend_terakhir_wali = request('pend_terakhir_wali');
        $pesertadidik->pekerjaan_wali = request('pekerjaan_wali');
        $pesertadidik->penghasilan_wali = request('penghasilan_wali');
        $pesertadidik->jalan_wali = request('jalan_wali');    
        $pesertadidik->rt_rw_wali = request('rt_rw_wali');
        $pesertadidik->desa_wali = request('desa_wali');
        $pesertadidik->kecamatan_wali = request('kecamatan_wali');
        $pesertadidik->kabupaten_wali = request('kabupaten_wali');
        $pesertadidik->provinsi_wali = request('provinsi_wali');
        $pesertadidik->kode_pos_wali = request('kode_pos_wali');
        $pesertadidik->telepon_wali = request('telepon_wali');
        $pesertadidik->keadaan_wali = request('keadaan_wali');
        $pesertadidik->tahun_1_beasiswa = request('tahun_1_beasiswa');
        $pesertadidik->tk_1_beasiswa = request('tk_1_beasiswa');
        $pesertadidik->dari_1_beasiswa = request('dari_1_beasiswa');
        $pesertadidik->tahun_2_beasiswa = request('tahun_2_beasiswa');
        $pesertadidik->tk_2_beasiswa = request('tk_2_beasiswa');
        $pesertadidik->dari_2_beasiswa = request('dari_2_beasiswa');
        $pesertadidik->tahun_3_beasiswa = request('tahun_3_beasiswa');
        $pesertadidik->tk_3_beasiswa = request('tk_3_beasiswa');
        $pesertadidik->dari_3_beasiswa = request('dari_3_beasiswa');
        $pesertadidik->tanggal_meninggalkan_sekolah = request('tanggal_meninggalkan_sekolah');
        $pesertadidik->alasan_meninggalkan_sekolah = request('alasan_meninggalkan_sekolah');
        $pesertadidik->tanggal_akhir_pendidikan = request('tanggal_akhir_pendidikan');
        $pesertadidik->no_ijazah_akhir_pendidikan = request('no_ijazah_akhir_pendidikan');
        $pesertadidik->melanjutkan_ke_setelah_selesai_pendidikan = request('melanjutkan_ke_setelah_selesai_pendidikan');
        $pesertadidik->mulai_bekerja_setelah_selesai_pendidikan = request('mulai_bekerja_setelah_selesai_pendidikan');
        $pesertadidik->nama_perusahaan_setelah_selesai_pendidikan = request('nama_perusahaan_setelah_selesai_pendidikan');
        $pesertadidik->penghasilan_setelah_selesai_pendidikan = request('penghasilan_setelah_selesai_pendidikan');
        $pesertadidik->kelas_sekarang = request('kelas_sekarang');
        $pesertadidik->save();

        

        return redirect('pegawai/peserta-didik')->with('success', 'Data Berhasil Ditambahkan');
    
    }

    function show($pesertadidik){
       
        $data['pesertadidik'] = PesertaDidik::find($pesertadidik);
        return view('pegawai.pesertadidik.show', $data);
        
    }

    function edit(PesertaDidik $pesertadidik){
       
        $data['pesertadidik'] = $pesertadidik;
        return view('pegawai.pesertadidik.edit', $data);
    }

    function update(PesertaDidik $pesertadidik){
        
        $pesertadidik->nis = request('nis');    
        $pesertadidik->nisn = request('nisn');    
        $pesertadidik->nama_lengkap = request('nama_lengkap');    
        $pesertadidik->nama_panggilan = request('nama_panggilan');    
        $pesertadidik->jenis_kelamin = request('jenis_kelamin');    
        $pesertadidik->tempat_lahir = request('tempat_lahir');    
        $pesertadidik->tanggal_lahir = request('tanggal_lahir');         
        $pesertadidik->agama = request('agama');    
        $pesertadidik->kewarganegaraan = request('kewarganegaraan');    
        $pesertadidik->anak_ke = request('anak_ke');    
        $pesertadidik->saudara_kandung = request('saudara_kandung');    
        $pesertadidik->saudara_tiri = request('saudara_tiri');    
        $pesertadidik->saudara_angkat = request('saudara_angkat');    
        $pesertadidik->status = request('status');    
        $pesertadidik->bahasa_sehari_hari = request('bahasa_sehari_hari');    
        $pesertadidik->jalan = request('jalan');    
        $pesertadidik->desa = request('desa');    
        $pesertadidik->rt_rw = request('rt_rw');    
        $pesertadidik->kecamatan = request('kecamatan');
        $pesertadidik->kabupaten = request('kabupaten');    
        $pesertadidik->provinsi = request('provinsi');    
        $pesertadidik->kode_pos = request('kode_pos');        
        $pesertadidik->telepon = request('telepon');    
        $pesertadidik->tinggal_bersama = request('tinggal_bersama');    
        $pesertadidik->jarak_sekolah = request('jarak_sekolah');    
        $pesertadidik->gol_darah = request('gol_darah');    
        $pesertadidik->penyakit = request('penyakit');    
        $pesertadidik->kelainan_jasmani = request('kelainan_jasmani');    
        $pesertadidik->tinggi_badan = request('tinggi_badan');    
        $pesertadidik->berat_badan = request('berat_badan');    
        $pesertadidik->sekolah_asal_pendidikan_sebelumnya = request('sekolah_asal_pendidikan_sebelumnya');
        $pesertadidik->tanggal_ijazah_pendidikan_sebelumnya = request('tanggal_ijazah_pendidikan_sebelumnya');
        $pesertadidik->no_ijazah_pendidikan_sebelumnya = request('no_ijazah_pendidikan_sebelumnya');
        $pesertadidik->lama_belajar_pendidikan_sebelumnya = request('lama_belajar_pendidikan_sebelumnya');
        $pesertadidik->darisekolah_pindahan = request('darisekolah_pindahan');
        $pesertadidik->alasan_pindahan = request('alasan_pindahan');
        $pesertadidik->dikelas_diterima = request('dikelas_diterima');
        $pesertadidik->kelompok_diterima = request('kelompok_diterima');
        $pesertadidik->jurusan_diterima = request('jurusan_diterima');
        $pesertadidik->tanggal_diterima = request('tanggal_diterima');
        $pesertadidik->nama_ayah = request('nama_ayah');
        $pesertadidik->agama_ayah = request('agama_ayah');
        $pesertadidik->kewarganegaraan_ayah = request('kewarganegaraan_ayah');
        $pesertadidik->pend_terakhir_ayah = request('pend_terakhir_ayah');
        $pesertadidik->pekerjaan_ayah = request('pekerjaan_ayah');
        $pesertadidik->penghasilan_ayah = request('penghasilan_ayah');
        $pesertadidik->jalan_ayah = request('jalan_ayah');    
        $pesertadidik->rt_rw_ayah = request('rt_rw_ayah');
        $pesertadidik->desa_ayah = request('desa_ayah');
        $pesertadidik->kecamatan_ayah = request('kecamatan_ayah');
        $pesertadidik->kabupaten_ayah = request('kabupaten_ayah');
        $pesertadidik->provinsi_ayah = request('provinsi_ayah');
        $pesertadidik->kode_pos_ayah = request('kode_pos_ayah');
        $pesertadidik->telepon_ayah = request('telepon_ayah');
        $pesertadidik->keadaan_ayah = request('keadaan_ayah');
        $pesertadidik->nama_ibu = request('nama_ibu');
        $pesertadidik->agama_ibu = request('agama_ibu');
        $pesertadidik->kewarganegaraan_ibu = request('kewarganegaraan_ibu');
        $pesertadidik->pend_terakhir_ibu = request('pend_terakhir_ibu');
        $pesertadidik->pekerjaan_ibu = request('pekerjaan_ibu');
        $pesertadidik->penghasilan_ibu = request('penghasilan_ibu');
        $pesertadidik->jalan_ibu = request('jalan_ibu');    
        $pesertadidik->rt_rw_ibu = request('rt_rw_ibu');
        $pesertadidik->desa_ibu = request('desa_ibu');
        $pesertadidik->kecamatan_ibu = request('kecamatan_ibu');
        $pesertadidik->kabupaten_ibu = request('kabupaten_ibu');
        $pesertadidik->provinsi_ibu = request('provinsi_ibu');
        $pesertadidik->kode_pos_ibu = request('kode_pos_ibu');
        $pesertadidik->telepon_ibu = request('telepon_ibu');
        $pesertadidik->keadaan_ibu = request('keadaan_ibu');
        $pesertadidik->nama_wali = request('nama_wali');
        $pesertadidik->agama_wali = request('agama_wali');
        $pesertadidik->kewarganegaraan_wali = request('kewarganegaraan_wali');
        $pesertadidik->pend_terakhir_wali = request('pend_terakhir_wali');
        $pesertadidik->pekerjaan_wali = request('pekerjaan_wali');
        $pesertadidik->penghasilan_wali = request('penghasilan_wali');
        $pesertadidik->jalan_wali = request('jalan_wali');    
        $pesertadidik->rt_rw_wali = request('rt_rw_wali');
        $pesertadidik->desa_wali = request('desa_wali');
        $pesertadidik->kecamatan_wali = request('kecamatan_wali');
        $pesertadidik->kabupaten_wali = request('kabupaten_wali');
        $pesertadidik->provinsi_wali = request('provinsi_wali');
        $pesertadidik->kode_pos_wali = request('kode_pos_wali');
        $pesertadidik->telepon_wali = request('telepon_wali');
        $pesertadidik->keadaan_wali = request('keadaan_wali');
        $pesertadidik->tahun_1_beasiswa = request('tahun_1_beasiswa');
        $pesertadidik->tk_1_beasiswa = request('tk_1_beasiswa');
        $pesertadidik->dari_1_beasiswa = request('dari_1_beasiswa');
        $pesertadidik->tahun_2_beasiswa = request('tahun_2_beasiswa');
        $pesertadidik->tk_2_beasiswa = request('tk_2_beasiswa');
        $pesertadidik->dari_2_beasiswa = request('dari_2_beasiswa');
        $pesertadidik->tahun_3_beasiswa = request('tahun_3_beasiswa');
        $pesertadidik->tk_3_beasiswa = request('tk_3_beasiswa');
        $pesertadidik->dari_3_beasiswa = request('dari_3_beasiswa');
        $pesertadidik->tanggal_meninggalkan_sekolah = request('tanggal_meninggalkan_sekolah');
        $pesertadidik->alasan_meninggalkan_sekolah = request('alasan_meninggalkan_sekolah');
        $pesertadidik->tanggal_akhir_pendidikan = request('tanggal_akhir_pendidikan');
        $pesertadidik->no_ijazah_akhir_pendidikan = request('no_ijazah_akhir_pendidikan');
        $pesertadidik->melanjutkan_ke_setelah_selesai_pendidikan = request('melanjutkan_ke_setelah_selesai_pendidikan');
        $pesertadidik->mulai_bekerja_setelah_selesai_pendidikan = request('mulai_bekerja_setelah_selesai_pendidikan');
        $pesertadidik->nama_perusahaan_setelah_selesai_pendidikan = request('nama_perusahaan_setelah_selesai_pendidikan');
        $pesertadidik->penghasilan_setelah_selesai_pendidikan = request('penghasilan_setelah_selesai_pendidikan');
        $pesertadidik->kelas_sekarang = request('kelas_sekarang');       
        $pesertadidik->save();

        

        

        return redirect('pegawai/peserta-didik')->with('success', 'Data Berhasil Diedit');
    
        
    }

    function destroy(PesertaDidik $pesertadidik){
       
        $pesertadidik->handleDelete();
        $pesertadidik->delete($pesertadidik);

        return redirect('pegawai/peserta-didik')->with('danger', 'Data Berhasil Dihapus');
     
    }

    
    public function cetak_pdf(PesertaDidik $pesertadidik)
    {
        $data ['pesertadidik'] = $pesertadidik;
        return view('pegawai.pesertadidik.cetak_pdf', $data);
    }

    
}