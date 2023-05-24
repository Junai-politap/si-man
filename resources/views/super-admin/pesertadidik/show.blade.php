<x-app>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <x-button.back-button url="super-admin/peserta-didik" />
                <div class="card mt-3">
                    <div class="card-header">
                        <div class="card-title">
                            Detail Peserta Didik
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>{{ $pesertadidik->nama_lengkap }}</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Nama Panggilan</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->nama_panggilan }}</div>


                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">NIS</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->nis }}</div>


                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">NISN</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->nisn }}</div>


                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Jenis Kelamin</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->jenis_kelamin }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Tempat Lahir</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->tempat_lahir }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Tanggal Lahir</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->tanggal_lahir }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Agama</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->agama }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Kewarganegaraan</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->kewarganegaraan }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Anak ke</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->anak_ke }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Saudara Kandung</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->saudara_kandung }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Saudara Tiri</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->saudara_tiri }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Saudara Angkat</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->saudara_angkat }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Status</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->status }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Bahasa Sehari hari</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->bahasa_sehari_hari }}</div>
                                    </div>
                                </div>
                                <hr>
                                
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Tinggal Bersama</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->tinggal_bersama }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Jarak Sekolah</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->jarak_sekolah }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Gol Darah</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->gol_darah }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Penyakit</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->penyakit }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Kelainan Jasmani</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->kelainan_jasmani }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Tinggi Badan</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->tinggi_badan }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Berat Badan</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->berat_badan }}</div>
                                    </div>
                                </div>
                                <hr>
                                <strong class="col-md-4">ALAMAT</strong>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Jalan</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->jalan }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Desa</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->desa }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">RT/RW</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->rt_rw }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Kecamatan</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->kecamatan }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">kabupaten</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->kabupaten }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Provinsi</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->provinsi }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Kode Pos</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->kode_pos }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Telepon</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->telepon }}</div>
                                    </div>
                                </div>
                                <hr>
                                <strong class="col-md-4">PENDIDIKAN SEBELUMNYA</strong>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Sekolah Asal</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->sekolah_asal_pendidikan_sebelumnya }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Tanggal Ijazah</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->tanggal_ijazah_pendidikan_sebelumnya }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">No Ijazah</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->no_ijazah_pendidikan_sebelumnya }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Lama Belajar</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->lama_belajar_pendidikan_sebelumnya }}</div>
                                    </div>
                                </div>
                                <hr>
                                <strong class="col-md-4">PINDAHAN</strong>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Dari Sekolah</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->darisekolah_pindahan }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Alasan</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->alasan_pindahan }}</div>
                                    </div>
                                </div>
                                <hr>
                                <strong class="col-md-4">DITERIMA DISEKOLAH INI</strong>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Dikelas</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->dikelas_diterima }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Kelompok</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->kelompok_diterima }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Jurusan</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->jurusan_diterima }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Tanggal</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->tanggal_diterima }}</div>
                                    </div>
                                </div>
                                <hr>
                                <strong class="col-md-4">BEASISWA</strong>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Tahun-1</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->tahun_1_beasiswa }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">TK-1</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->tk_1_beasiswa }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Dari-1</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->dari_1_beasiswa }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Tahun-2</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->tahun_2_beasiswa }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">TK-2</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->tk_2_beasiswa }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Dari-2</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->dari_2_beasiswa }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Tahun-3</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->tahun_3_beasiswa }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">TK-3</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->tk_3_beasiswa }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Dari-3</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->dari_3_beasiswa }}</div>
                                    </div>
                                </div>
                                <hr>
                                <strong class="col-md-4">MENINGGALKAN SEKOLAH</strong>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Tanggal</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->tanggal_meninggalkan_sekolah }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Alasan</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->alasan_meninggalkan_sekolah }}</div>
                                    </div>
                                </div>
                                <hr>
                                <strong class="col-md-4">AKHIR PENDIDIKAN</strong>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Tanggal</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->tanggal_akhir_pendidikan }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">No Ijazah</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->no_ijazah_akhir_pendidikan}}</div>
                                    </div>
                                </div>
                                <hr>
                                <strong class="col-md-4">SETELAH SELESAI PENDIDIKAN</strong>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Melanjutkan Ke</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->melanjutkan_ke_setelah_selesai_pendidikan }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Mulai Bekerja</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->mulai_bekerja_setelah_selesai_pendidikan }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Nama Perusahaan</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->nama_perusahaan_setelah_selesai_pendidikan }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Penghasilan</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->penghasilan_setelah_selesai_pendidikan }}</div>
                                    </div>
                                </div>
                                <hr>
                               <strong class="col-md-4">KELAS SEKARANG</strong>
                               <hr>
                                <div class="container">
                                     <div class="row">
                                          <div class="col-md-4">Kelas</div>
                                          <div>:</div>
                                          <div class="col-md-4">{{ $pesertadidik->kelas_sekarang }}</div>
                                     </div>
                                </div>
                                <hr>



                            </div>
                            <div class="col-md-6">
                                <strong class="col-md-4">DATA AYAH</strong>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Nama </div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->nama_ayah }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Agama </div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->agama_ayah }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Kewarganegaraan </div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->kewarganegaraan_ayah }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Pendidikan Terakhir </div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->pend_terakhir_ayah }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Pekerjaan </div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->pekerjaan_ayah }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Penghasilan </div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->penghasilan_ayah }}</div>
                                    </div>
                                </div>
                                <hr>
                                <strong class="col-md-4">ALAMAT AYAH</strong>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Jalan </div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->jalan_ayah }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">RT/RW </div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->rt_rw_ayah }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Desa </div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->desa_ayah }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Kecamatan </div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->kecamatan_ayah }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Provinsi</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->provinsi_ayah }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Kode Pos</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->kode_pos_ayah }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Telepon</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->telepon_ayah }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Keadaan</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->keadaan_ayah }}</div>
                                    </div>
                                </div>
                                <hr>
                                <strong class="col-md-4">DATA IBU</strong>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Nama </div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->nama_ibu}}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Agama </div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->agama_ibu}}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Kewarganegaraan </div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->kewarganegaraan_ibu}}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Pendidikan Terakhir </div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->pend_terakhir_ibu}}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Pekerjaan </div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->pekerjaan_ibu}}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Penghasilan </div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->penghasilan_ibu}}</div>
                                    </div>
                                </div>
                                <hr>
                                <strong class="col-md-4">ALAMAT IBU</strong>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Jalan </div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->jalan_ibu}}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">RT/RW </div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->rt_rw_ibu}}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Desa </div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->desa_ibu}}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Kecamatan </div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->kecamatan_ibu}}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Provinsi</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->provinsi_ibu}}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Kode Pos</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->kode_pos_ibu}}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Telepon</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->telepon_ibu}}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Keadaan</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->keadaan_ibu}}</div>
                                    </div>
                                </div>
                                <hr>
                                <strong class="col-md-4">DATA WALI</strong>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Nama </div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->nama_wali }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Agama </div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->agama_wali }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Kewarganegaraan </div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->kewarganegaraan_wali }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Pendidikan Terakhir </div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->pend_terakhir_wali }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Pekerjaan </div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->pekerjaan_wali }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Penghasilan </div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->penghasilan_wali }}</div>
                                    </div>
                                </div>
                                <hr>
                                <strong class="col-md-4">ALAMAT WALI</strong>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Jalan </div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->jalan_wali }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">RT/RW </div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->rt_rw_wali }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Desa </div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->desa_wali }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Kecamatan </div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->kecamatan_wali }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Provinsi</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->provinsi_wali }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Kode Pos</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->kode_pos_wali }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Telepon</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->telepon_wali }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">Keadaan</div>
                                        <div>:</div>
                                        <div class="col-md-4">{{ $pesertadidik->keadaan_wali }}</div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="row">
                           
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
   
</x-app>