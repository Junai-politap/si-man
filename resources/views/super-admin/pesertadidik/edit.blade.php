<x-app>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <x-button.back-button url="super-admin/peserta-didik" />
                <div class="card mt-2">
                    <div class="card-header">
                        <strong> Edit Data Peserta Didik</strong>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('super-admin/peserta-didik', $pesertadidik->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="col-md-12">
                                <div class="card card-primary card-outline card-outline-tabs">
                                    <div class="card-header p-0 border-bottom-0">
                                        <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="custom-tabs-four-pesetadidik-tab"
                                                    data-toggle="pill" href="#custom-tabs-four-pesetadidik"
                                                    role="tab" aria-controls="custom-tabs-four-pesetadidik"
                                                    aria-selected="true">Data Peserta Didik</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="custom-tabs-four-datapindahan-tab"
                                                    data-toggle="pill" href="#custom-tabs-four-datapindahan"
                                                    role="tab" aria-controls="custom-tabs-four-datapindahan"
                                                    aria-selected="false">Data
                                                    Pindahan</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="custom-tabs-four-dataayah-tab"
                                                    data-toggle="pill" href="#custom-tabs-four-dataayah" role="tab"
                                                    aria-controls="custom-tabs-four-dataayah" aria-selected="false">Data
                                                    Ayah</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="custom-tabs-four-dataibu-tab" data-toggle="pill"
                                                    href="#custom-tabs-four-dataibu" role="tab"
                                                    aria-controls="custom-tabs-four-dataibu" aria-selected="false">Data
                                                    Ibu</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="custom-tabs-four-datawali-tab"
                                                    data-toggle="pill" href="#custom-tabs-four-datawali" role="tab"
                                                    aria-controls="custom-tabs-four-datawali" aria-selected="false">Data
                                                    Wali</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="custom-tabs-four-beasiswa-tab"
                                                    data-toggle="pill" href="#custom-tabs-four-beasiswa" role="tab"
                                                    aria-controls="custom-tabs-four-beasiswa"
                                                    aria-selected="false">Beasiswa</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="custom-tabs-four-alumni-tab" data-toggle="pill"
                                                    href="#custom-tabs-four-alumni" role="tab"
                                                    aria-controls="custom-tabs-four-alumni"
                                                    aria-selected="false">Alumni</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content" id="custom-tabs-four-tabContent">
                                            <div class="tab-pane fade show active" id="custom-tabs-four-pesetadidik"
                                                role="tabpanel" aria-labelledby="custom-tabs-four-pesetadidik-tab">
                                                <div class="row">

                                                    <div class="col-md-6 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Nama Lengkap</label>
                                                            <input type="text" class="form-control"
                                                                name="nama_lengkap"
                                                                value="{{ $pesertadidik->nama_lengkap }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Nama Panggilan</label>
                                                            <input type="text" class="form-control"
                                                                name="nama_panggilan"
                                                                value="{{ $pesertadidik->nama_panggilan }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-3 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">NIS</label>
                                                            <input type="text" class="form-control" name="nis"
                                                                value="{{ $pesertadidik->nis }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">NISN</label>
                                                            <input type="text" class="form-control" name="nisn"
                                                                value="{{ $pesertadidik->nisn }}" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Tempat Lahir</label>
                                                            <input type="text" class="form-control"
                                                                name="tempat_lahir"
                                                                value="{{ $pesertadidik->tempat_lahir }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 mt-2">
                                                        <div class="form-group">
                                                            <label>Tanggal Lahir</label>
                                                            <input type="date" class="form-control"
                                                                name="tanggal_lahir"
                                                                value="{{ $pesertadidik->tanggal_lahir }}">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3 mt-2">
                                                        <label>Jenis Kelamin</label>
                                                        <div class="form-grup">
                                                            <select name="jenis_kelamin" class="form-control">
                                                                <option value="Laki-Laki"
                                                                    @if ($pesertadidik->jenis_kelamin == 'Laki-Laki') selected @endif>
                                                                    Laki-Laki</option>

                                                                <option value="Perempuan"
                                                                    @if ($pesertadidik->jenis_kelamin == 'Perempuan') selected @endif>
                                                                    Perempuan
                                                                </option>


                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 mt-2">
                                                        <label>Agama</label>
                                                        <div class="form-grup">
                                                            <select name="agama" class="form-control">
                                                                <option value="Islam"
                                                                    @if ($pesertadidik->agama == 'Islam') selected @endif>
                                                                    Islam</option>

                                                                <option value="Kristen"
                                                                    @if ($pesertadidik->agama == 'Kristen') selected @endif>
                                                                    Kristen
                                                                </option>

                                                                <option value="Khatolik"
                                                                    @if ($pesertadidik->agama == 'Khatolik') selected @endif>
                                                                    Khatolik
                                                                </option>

                                                                <option value="Hindhu"
                                                                    @if ($pesertadidik->agama == 'Hindhu') selected @endif>
                                                                    Hindhu</option>

                                                                <option value="Budha"
                                                                    @if ($pesertadidik->agama == 'Budha') selected @endif>
                                                                    Budha</option>

                                                                <option value="Kong Hu Chu"
                                                                    @if ($pesertadidik->agama == 'Konghucu') selected @endif>
                                                                    Kong Hu
                                                                    Chu</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Status</label>
                                                            <input type="text" class="form-control" name="status"
                                                                value="{{ $pesertadidik->status }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Anak Ke</label>
                                                            <input type="text" class="form-control" name="anak_ke"
                                                                value="{{ $pesertadidik->anak_ke }}">
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="row">

                                                    <div class="col-md-3 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Kewarganegaraan</label>
                                                            <input type="text" class="form-control"
                                                                name="kewarganegaraan"
                                                                value="{{ $pesertadidik->kewarganegaraan }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Bahasa Sehari hari</label>
                                                            <input type="text" class="form-control"
                                                                name="bahasa_sehari_hari"
                                                                value="{{ $pesertadidik->bahasa_sehari_hari }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Tinggi Badan</label>
                                                            <input type="text" class="form-control"
                                                                name="tinggi_badan"
                                                                value="{{ $pesertadidik->tinggi_badan }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Berat Badan</label>
                                                            <input type="text" class="form-control"
                                                                name="berat_badan"
                                                                value="{{ $pesertadidik->berat_badan }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">

                                                    <div class="col-md-4 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Gol.Darah</label>
                                                            <input type="text" class="form-control"
                                                                name="gol_darah"
                                                                value="{{ $pesertadidik->gol_darah }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Penyakit</label>
                                                            <input type="text" class="form-control"
                                                                name="penyaktit"
                                                                value="{{ $pesertadidik->penyakit }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Kelainan Jasmani</label>
                                                            <input type="text" class="form-control"
                                                                name="kelainan_jasmani"
                                                                value="{{ $pesertadidik->kelainan_jasmani }}">
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="row">
                                                    <div class="col-md-3 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Jarak Kesekolah</label>
                                                            <input type="text" class="form-control"
                                                                name="jarak_sekolah"
                                                                value="{{ $pesertadidik->jarak_sekolah }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Tinggal Bersama</label>
                                                            <input type="text" class="form-control"
                                                                name="tinggal_bersama"
                                                                value="{{ $pesertadidik->tinggal_bersama }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Kode Pos</label>
                                                            <input type="text" class="form-control"
                                                                name="kode_pos"
                                                                value="{{ $pesertadidik->kode_pos }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">No.Telepon/HP</label>
                                                            <input type="text" class="form-control" name="telepon"
                                                                value="{{ $pesertadidik->telepon }}">
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Saudara Kandung</label>
                                                            <input type="text" class="form-control"
                                                                name="saudara_kandung"
                                                                value="{{ $pesertadidik->saudara_kandung }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Saudara Tiri</label>
                                                            <input type="text" class="form-control"
                                                                name="saudara_tiri"
                                                                value="{{ $pesertadidik->saudara_tiri }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Saudara Angkat</label>
                                                            <input type="text" class="form-control"
                                                                name="saudara_angkat"
                                                                value="{{ $pesertadidik->saudara_angkat }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="card-header">
                                                    <strong>KELAS SEKARANG</strong>
                                                </div>
                                                <br>
                                                <div class="col-md-4">
                                                    <div class="form-grup">
                                                        <label for=""></label>
                                                        <input type="text" class="form-control"
                                                            name="kelas_sekarang"
                                                            value="{{ $pesertadidik->kelas_sekarang }}">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="card-header">
                                                    <strong>ALAMAT</strong>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-4 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Jalan</label>
                                                            <input type="text" class="form-control" name="jalan"
                                                                value="{{ $pesertadidik->jalan }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">RT/RW</label>
                                                            <input type="text" class="form-control" name="rt_rw"
                                                                value="{{ $pesertadidik->rt_rw }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Desa</label>
                                                            <input type="text" class="form-control" name="desa"
                                                                value="{{ $pesertadidik->desa }}">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Kecamatan</label>
                                                            <input type="text" class="form-control"
                                                                name="kecamatan"
                                                                value="{{ $pesertadidik->kecamatan }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Kabupaten</label>
                                                            <input type="text" class="form-control"
                                                                name="kabupaten"
                                                                value="{{ $pesertadidik->kabupaten }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Provinsi</label>
                                                            <input type="text" class="form-control"
                                                                name="provinsi"
                                                                value="{{ $pesertadidik->provinsi }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class=" d-grid gap-2 d-md-flex justify-content-md-end">
                                                    <button class="btn btn-primary" type="button"><i
                                                            class="fa fa-arrow-right"></i></button>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="custom-tabs-four-datapindahan"
                                                role="tabpanel" aria-labelledby="custom-tabs-four-datapindahan-tab">
                                                <div class="card-header">
                                                    <strong>MENINGGALKAN SEKOLAH</strong>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-grup">
                                                            <label for="">Tanggal</label>
                                                            <input type="text" class="form-control"
                                                                name="tanggal_meninggalkan_sekolah"
                                                                value="{{ $pesertadidik->tanggal_meninggalkan_sekolah }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-grup">
                                                            <label for="">Alasan</label>
                                                            <input type="text" class="form-control"
                                                                name="alasan_meninggalkan_sekolah"
                                                                value="{{ $pesertadidik->alasan_meninggalkan_sekolah }}">
                                                        </div>
                                                    </div>

                                                </div>
                                                <br>
                                                <div class="card-header">
                                                    <strong>PENDIDIKAN SEBELUMNYA</strong>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-3 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Sekolah Asal</label>
                                                            <input type="text" class="form-control"
                                                                name="sekolah_asal_pendidikan_sebelumnya"
                                                                value="{{ $pesertadidik->sekolah_asal_pendidikan_sebelumnya }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Tanggal Ijazah</label>
                                                            <input type="text" class="form-control"
                                                                name="tanggal_ijazah_pendidikan_sebelumnya"
                                                                value="{{ $pesertadidik->tanggal_ijazah_pendidikan_sebelumnya }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">No.Ijazah</label>
                                                            <input type="text" class="form-control"
                                                                name="no_ijazah_pendidikan_sebelumnya"
                                                                value="{{ $pesertadidik->no_ijazah_pendidikan_sebelumnya }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Lama Belajar</label>
                                                            <input type="text" class="form-control"
                                                                name="lama_belajar_pendidikan_sebelumnya"
                                                                value="{{ $pesertadidik->lama_belajar_pendidikan_sebelumnya }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="card-header">
                                                    <strong>PINDAHAN</strong>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-4 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Dari Sekolahan</label>
                                                            <input type="text" class="form-control"
                                                                name="darisekolah_pindahan"value="{{ $pesertadidik->darisekolah_pindahan }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Alasan</label>
                                                            <input type="text" class="form-control"
                                                                name="alasan_pindahan"
                                                                value="{{ $pesertadidik->alasan_pindahan }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="card-header">
                                                    <strong>DITERIMA DISEKOLAH INI</strong>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-3 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Di Kelas</label>
                                                            <input type="text" class="form-control"
                                                                name="dikelas_diterima"
                                                                value="{{ $pesertadidik->dikelas_diterima }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Kelompok</label>
                                                            <input type="text" class="form-control"
                                                                name="kelompok_diterima"
                                                                value="{{ $pesertadidik->kelompok_diterima }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Jurusan</label>
                                                            <input type="text" class="form-control"
                                                                name="jurusan_diterima"
                                                                value="{{ $pesertadidik->jurusan_diterima }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Tanggal</label>
                                                            <input type="text" class="form-control"
                                                                name="tanggal_diterima"
                                                                value="{{ $pesertadidik->tanggal_diterima }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                    <button class="btn btn-primary"type="button"><i
                                                            class="fa fa-arrow-left"></i></button>
                                                    <button class="btn btn-primary me-md-2" type="button"><i
                                                            class="fa fa-arrow-right"></i></button>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="custom-tabs-four-dataayah" role="tabpanel"
                                                aria-labelledby="custom-tabs-four-dataayah-tab">
                                                <div class="row">
                                                    <div class="col-md-6 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Nama</label>
                                                            <input type="text" class="form-control"
                                                                name="nama_ayah"
                                                                value="{{ $pesertadidik->nama_ayah }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Kewarganegaraan</label>
                                                            <input type="text" class="form-control"
                                                                name="kewarganegaraan_ayah"
                                                                value="{{ $pesertadidik->kewarganegaraan_ayah }}">
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mt-2">
                                                        <label>Agama</label>
                                                        <div class="form-grup">
                                                            <select name="agama_ayah" class="form-control">
                                                                <option value="Islam"
                                                                    @if ($pesertadidik->agama_ayah == 'Islam') selected @endif>
                                                                    Islam</option>

                                                                <option value="Kristen"
                                                                    @if ($pesertadidik->agama_ayah == 'Kristen') selected @endif>
                                                                    Kristen
                                                                </option>

                                                                <option value="Khatolik"
                                                                    @if ($pesertadidik->agama_ayah == 'Khatolik') selected @endif>
                                                                    Khatolik
                                                                </option>

                                                                <option value="Hindhu"
                                                                    @if ($pesertadidik->agama_ayah == 'Hindhu') selected @endif>
                                                                    Hindhu</option>

                                                                <option value="Budha"
                                                                    @if ($pesertadidik->agama_ayah == 'Budha') selected @endif>
                                                                    Budha</option>

                                                                <option value="Konghucu"
                                                                    @if ($pesertadidik->agama_ayah == 'Konghucu') selected @endif>
                                                                    Kong Hu
                                                                    Chu</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-2">
                                                        <label>Pendidikan Terakhir</label>
                                                        <div class="form-grup">
                                                            <select name="pend_terakhir_ayah" class="form-control">
                                                                <option value="Tidak Sekolah"
                                                                    @if ($pesertadidik->pend_terakhir_ayah == 'Tidak Sekolah') selected @endif>
                                                                    Tidak Sekolah</option>

                                                                <option value="SD/Sederajat"
                                                                    @if ($pesertadidik->pend_terakhir_ayah == 'SD/Sederajat') selected @endif>
                                                                    SD/Sederajat</option>

                                                                <option value="SMP/Sederajat"
                                                                    @if ($pesertadidik->pend_terakhir_ayah == 'SMP/Sederajat') selected @endif>
                                                                    SMP/Sederajat</option>

                                                                <option value="SMA/Sederajat"
                                                                    @if ($pesertadidik->pend_terakhir_ayah == 'SMA/Sederajat') selected @endif>
                                                                    SMA/Sederajat</option>

                                                                <option value="Sarjana"
                                                                    @if ($pesertadidik->pend_terakhir_ayah == 'Sarjana') selected @endif>
                                                                    Sarjana</option>

                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Pekerjaan</label>
                                                            <input type="text" class="form-control"
                                                                name="pekerjaan_ayah"
                                                                value="{{ $pesertadidik->pekerjaan_ayah }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Penghasilan Perbulan</label>
                                                            <input type="text" class="form-control"
                                                                name="penghasilan_ayah"
                                                                value="{{ $pesertadidik->penghasilan_ayah }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <br>
                                                <div class="card-header">
                                                    <strong>ALAMAT </strong>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-4 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Jalan</label>
                                                            <input type="text" class="form-control"
                                                                name="jalan_ayah"
                                                                value="{{ $pesertadidik->jalan_ayah }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">RT/RW</label>
                                                            <input type="text" class="form-control"
                                                                name="rt_rw_ayah"
                                                                value="{{ $pesertadidik->rt_rw_ayah }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Desa</label>
                                                            <input type="text" class="form-control"
                                                                name="desa_ayah"
                                                                value="{{ $pesertadidik->desa_ayah }}">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Kecamatan</label>
                                                            <input type="text" class="form-control"
                                                                name="kecamatan_ayah"
                                                                value="{{ $pesertadidik->kecamatan_ayah }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Kabupaten</label>
                                                            <input type="text" class="form-control"
                                                                name="kabupaten_ayah"
                                                                value="{{ $pesertadidik->kabupaten_ayah }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Provinsi</label>
                                                            <input type="text" class="form-control"
                                                                name="provinsi_ayah"
                                                                value="{{ $pesertadidik->provinsi_ayah }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Kode Pos</label>
                                                            <input type="text" class="form-control"
                                                                name="kode_pos_ayah"
                                                                value="{{ $pesertadidik->kode_pos_ayah }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">No.Telepon/HP</label>
                                                            <input type="text" class="form-control"
                                                                name="telepon_ayah"
                                                                value="{{ $pesertadidik->telepon_ayah }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Keadaan</label>
                                                            <input type="text" class="form-control"
                                                                name="keadaan_ayah"
                                                                value="{{ $pesertadidik->keadaan_ayah }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                    <button class="btn btn-primary"type="button"><i
                                                            class="fa fa-arrow-left"></i></button>
                                                    <button class="btn btn-primary me-md-2" type="button"><i
                                                            class="fa fa-arrow-right"></i></button>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="custom-tabs-four-dataibu" role="tabpanel"
                                                aria-labelledby="custom-tabs-four-dataibu-tab">
                                                <div class="row">
                                                    <div class="col-md-6 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Nama</label>
                                                            <input type="text" class="form-control"
                                                                name="nama_ibu"
                                                                value="{{ $pesertadidik->nama_ibu }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Kewarganegaraan</label>
                                                            <input type="text" class="form-control"
                                                                name="kewarganegaraan_ibu"
                                                                value="{{ $pesertadidik->kewarganegaraan_ibu }}">
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mt-2">
                                                        <label>Agama</label>
                                                        <div class="form-grup">
                                                            <select name="agama_ibu" class="form-control">
                                                                <option value="Islam"
                                                                    @if ($pesertadidik->agama_ibu == 'Islam') selected @endif>
                                                                    Islam</option>

                                                                <option value="Kristen"
                                                                    @if ($pesertadidik->agama_ibu == 'Kristen') selected @endif>
                                                                    Kristen
                                                                </option>

                                                                <option value="Khatolik"
                                                                    @if ($pesertadidik->agama_ibu == 'Khatolik') selected @endif>
                                                                    Khatolik
                                                                </option>

                                                                <option value="Hindhu"
                                                                    @if ($pesertadidik->agama_ibu == 'Hindhu') selected @endif>
                                                                    Hindhu</option>

                                                                <option value="Budha"
                                                                    @if ($pesertadidik->agama_ibu == 'Budha') selected @endif>
                                                                    Budha</option>

                                                                <option value="Konghucu"
                                                                    @if ($pesertadidik->agama_ibu == 'Konghucu') selected @endif>
                                                                    Kong Hu
                                                                    Chu</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-2">
                                                        <label>Pendidikan Terakhir</label>
                                                        <div class="form-grup">
                                                            <select name="pend_terakhir_ibu" class="form-control">
                                                                <option value="Tidak Sekolah"
                                                                    @if ($pesertadidik->pend_terakhir_ibu == 'Tidak Sekolah') selected @endif>
                                                                    Tidak Sekolah</option>

                                                                <option value="SD/Sederajat"
                                                                    @if ($pesertadidik->pend_terakhir_ibu == 'SD/Sederajat') selected @endif>
                                                                    SD/Sederajat</option>

                                                                <option value="SMP/Sederajat"
                                                                    @if ($pesertadidik->pend_terakhir_ibu == 'SMP/Sederajat') selected @endif>
                                                                    SMP/Sederajat</option>

                                                                <option value="SMA/Sederajat"
                                                                    @if ($pesertadidik->pend_terakhir_ibu == 'SMA/Sederajat') selected @endif>
                                                                    SMA/Sederajat</option>

                                                                <option value="Sarjana"
                                                                    @if ($pesertadidik->pend_terakhir_ibu == 'Sarjana') selected @endif>
                                                                    Sarjana</option>

                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Pekerjaan</label>
                                                            <input type="text" class="form-control"
                                                                name="pekerjaan_ibu"
                                                                value="{{ $pesertadidik->pekerjaan_ibu }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Penghasilan Perbulan</label>
                                                            <input type="text" class="form-control"
                                                                name="penghasilan_ibu"
                                                                value="{{ $pesertadidik->penghasilan_ibu }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <br>
                                                <div class="card-header">
                                                    <strong>ALAMAT </strong>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-4 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Jalan</label>
                                                            <input type="text" class="form-control"
                                                                name="jalan_ibu"
                                                                value="{{ $pesertadidik->jalan_ibu }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">RT/RW</label>
                                                            <input type="text" class="form-control"
                                                                name="rt_rw_ibu"
                                                                value="{{ $pesertadidik->rt_rw_ibu }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Desa</label>
                                                            <input type="text" class="form-control"
                                                                name="desa_ibu"
                                                                value="{{ $pesertadidik->desa_ibu }}">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Kecamatan</label>
                                                            <input type="text" class="form-control"
                                                                name="kecamatan_ibu"
                                                                value="{{ $pesertadidik->kecamatan_ibu }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Kabupaten</label>
                                                            <input type="text" class="form-control"
                                                                name="kabupaten_ibu"
                                                                value="{{ $pesertadidik->kabupaten_ibu }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Provinsi</label>
                                                            <input type="text" class="form-control"
                                                                name="provinsi_ibu"
                                                                value="{{ $pesertadidik->provinsi_ibu }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Kode Pos</label>
                                                            <input type="text" class="form-control"
                                                                name="kode_pos_ibu"
                                                                value="{{ $pesertadidik->kode_pos_ibu }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">No.Telepon/HP</label>
                                                            <input type="text" class="form-control"
                                                                name="telepon_ibu"
                                                                value="{{ $pesertadidik->telepon_ibu }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Keadaan</label>
                                                            <input type="text" class="form-control"
                                                                name="keadaan_ibu"
                                                                value="{{ $pesertadidik->keadaan_ibu }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                    <button class="btn btn-primary"type="button"><i
                                                            class="fa fa-arrow-left"></i></button>
                                                    <button class="btn btn-primary me-md-2" type="button"><i
                                                            class="fa fa-arrow-right"></i></button>
                                                </div>

                                            </div>

                                            <div class="tab-pane fade" id="custom-tabs-four-datawali" role="tabpanel"
                                                aria-labelledby="custom-tabs-four-datawali-tab">
                                                <div class="row">
                                                    <div class="col-md-6 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Nama</label>
                                                            <input type="text" class="form-control"
                                                                name="nama_wali"
                                                                value="{{ $pesertadidik->nama_wali }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Kewarganegaraan</label>
                                                            <input type="text" class="form-control"
                                                                name="kewarganegaraan_wali"
                                                                value="{{ $pesertadidik->kewarganegaraan_wali }}">
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mt-2">
                                                        <label>Agama</label>
                                                        <div class="form-grup">
                                                            <select name="agama_wali" class="form-control">
                                                                <option value="Islam"
                                                                    @if ($pesertadidik->agama_wali == 'Islam') selected @endif>
                                                                    Islam</option>

                                                                <option value="Kristen"
                                                                    @if ($pesertadidik->agama_wali == 'Kristen') selected @endif>
                                                                    Kristen
                                                                </option>

                                                                <option value="Khatolik"
                                                                    @if ($pesertadidik->agama_wali == 'Khatolik') selected @endif>
                                                                    Khatolik
                                                                </option>

                                                                <option value="Hindhu"
                                                                    @if ($pesertadidik->agama_wali == 'Hindhu') selected @endif>
                                                                    Hindhu</option>

                                                                <option value="Budha"
                                                                    @if ($pesertadidik->agama_wali == 'Budha') selected @endif>
                                                                    Budha</option>

                                                                <option value="Konghucu"
                                                                    @if ($pesertadidik->agama_wali == 'Konghucu') selected @endif>
                                                                    Kong Hu
                                                                    Chu</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-2">
                                                        <label>Pendidikan Terakhir</label>
                                                        <div class="form-grup">
                                                            <select name="pend_terakhir_wali" class="form-control">
                                                                <option value="Tidak Sekolah"
                                                                    @if ($pesertadidik->pend_terakhir_wali == 'Tidak Sekolah') selected @endif>
                                                                    Tidak Sekolah</option>

                                                                <option value="SD/Sederajat"
                                                                    @if ($pesertadidik->pend_terakhir_wali == 'SD/Sederajat') selected @endif>
                                                                    SD/Sederajat</option>

                                                                <option value="SMP/Sederajat"
                                                                    @if ($pesertadidik->pend_terakhir_wali == 'SMP/Sederajat') selected @endif>
                                                                    SMP/Sederajat</option>

                                                                <option value="SMA/Sederajat"
                                                                    @if ($pesertadidik->pend_terakhir_wali == 'SMA/Sederajat') selected @endif>
                                                                    SMA/Sederajat</option>

                                                                <option value="Sarjana"
                                                                    @if ($pesertadidik->pend_terakhir_wali == 'Sarjana') selected @endif>
                                                                    Sarjana</option>

                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Pekerjaan</label>
                                                            <input type="text" class="form-control"
                                                                name="pekerjaan_wali"
                                                                value="{{ $pesertadidik->pekerjaan_wali }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Penghasilan Perbulan</label>
                                                            <input type="text" class="form-control"
                                                                name="penghasilan_wali"
                                                                value="{{ $pesertadidik->penghasilan_wali }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <br>
                                                <div class="card-header">
                                                    <strong>ALAMAT </strong>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-4 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Jalan</label>
                                                            <input type="text" class="form-control"
                                                                name="jalan_wali"
                                                                value="{{ $pesertadidik->jalan_wali }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">RT/RW</label>
                                                            <input type="text" class="form-control"
                                                                name="rt_rw_wali"
                                                                value="{{ $pesertadidik->rt_rw_wali }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Desa</label>
                                                            <input type="text" class="form-control"
                                                                name="desa_wali"
                                                                value="{{ $pesertadidik->desa_wali }}">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Kecamatan</label>
                                                            <input type="text" class="form-control"
                                                                name="kecamatan_wali"
                                                                value="{{ $pesertadidik->kecamatan_wali }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Kabupaten</label>
                                                            <input type="text" class="form-control"
                                                                name="kabupaten_wali"
                                                                value="{{ $pesertadidik->kabupaten_wali }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Provinsi</label>
                                                            <input type="text" class="form-control"
                                                                name="provinsi_wali"
                                                                value="{{ $pesertadidik->provinsi_wali }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Kode Pos</label>
                                                            <input type="text" class="form-control"
                                                                name="kode_pos_wali"
                                                                value="{{ $pesertadidik->kode_pos_wali }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">No.Telepon/HP</label>
                                                            <input type="text" class="form-control"
                                                                name="telepon_wali"
                                                                value="{{ $pesertadidik->telepon_wali }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mt-2">
                                                        <div class="form-grup">
                                                            <label for="">Keadaan</label>
                                                            <input type="text" class="form-control"
                                                                name="keadaan_wali"
                                                                value="{{ $pesertadidik->keadaan_wali }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                    <button class="btn btn-primary"type="button"><i
                                                            class="fa fa-arrow-left"></i></button>
                                                    <button class="btn btn-primary me-md-2" type="button"><i
                                                            class="fa fa-arrow-right"></i></button>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="custom-tabs-four-beasiswa" role="tabpanel"
                                                aria-labelledby="custom-tabs-four-beasiswa-tab">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-grup">
                                                            <label for="">Tahun-1</label>
                                                            <input type="text" class="form-control"
                                                                name="tahun_1_beasiswa" value="{{$pesertadidik->tahun_1_beasiswa}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-grup">
                                                            <label for="">TK-1</label>
                                                            <input type="text" class="form-control"
                                                                name="tk_1_beasiswa" value="{{$pesertadidik->tk_1_beasiswa}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-grup">
                                                            <label for="">Dari-1</label>
                                                            <input type="text" class="form-control"
                                                                name="dari_1_beasiswa" value="{{$pesertadidik->dari_1_beasiswa}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-grup">
                                                            <label for="">Tahun-2</label>
                                                            <input type="text" class="form-control"
                                                                name="tahun_2_beasiswa" value="{{$pesertadidik->tahun_2_beasiswa}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-grup">
                                                            <label for="">TK-2</label>
                                                            <input type="text" class="form-control"
                                                                name="tk_2_beasiswa" value="{{$pesertadidik->tk_2_beasiswa}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-grup">
                                                            <label for="">Dari-2</label>
                                                            <input type="text" class="form-control"
                                                                name="dari_2_beasiswa" value="{{$pesertadidik->dari_2_beasiswa}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-grup">
                                                            <label for="">Tahun-3</label>
                                                            <input type="text" class="form-control"
                                                                name="tahun_3_beasiswa" value="{{$pesertadidik->tahun_3_beasiswa}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-grup">
                                                            <label for="">TK-3</label>
                                                            <input type="text" class="form-control"
                                                                name="tk_3_beasiswa" value="{{$pesertadidik->tk_3_beasiswa}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-grup">
                                                            <label for="">Dari-3</label>
                                                            <input type="text" class="form-control"
                                                                name="dari_3_beasiswa" value="{{$pesertadidik->dari_3_beasiswa}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                    <button class="btn btn-primary"type="button"><i
                                                            class="fa fa-arrow-left"></i></button>
                                                    <button class="btn btn-primary me-md-2" type="button"><i
                                                            class="fa fa-arrow-right"></i></button>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="custom-tabs-four-alumni" role="tabpanel"
                                                aria-labelledby="custom-tabs-four-alumni-tab">


                                                <div class="card-header">
                                                    <strong>AKHIR PENDIDIKAN</strong>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-grup">
                                                            <label for="">Tanggal</label>
                                                            <input type="text" class="form-control"
                                                                name="tanggal_akhir_pendidikan" value="{{$pesertadidik->tanggal_akhir_pendidikan}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-grup">
                                                            <label for="">No.Ijazah</label>
                                                            <input type="text" class="form-control"
                                                                name="no_ijazah_akhir_pendidikan" value="{{$pesertadidik->no_ijazah_akhir_pendidikan}}">
                                                        </div>
                                                    </div>

                                                </div>
                                                <br>
                                                <div class="card-header">
                                                    <strong>SETELAH SELESAI PENDIDIKAN</strong>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-grup">
                                                            <label for="">Melanjutkan Ke</label>
                                                            <input type="text" class="form-control"
                                                                name="melanjutkan_ke_setelah_selesai_pendidikan" value="{{$pesertadidik->melanjutkan_ke_setelah_selesai_pendidikan}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-grup">
                                                            <label for="">Mulai Bekerja</label>
                                                            <input type="text" class="form-control"
                                                                name="mulai_bekerja_setelah_selesai_pendidikan" value="{{$pesertadidik->mulai_bekerja_setelah_selesai_pendidikan}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-grup">
                                                            <label for="">Nama Perusahaan</label>
                                                            <input type="text" class="form-control"
                                                                name="nama_perusahaan_setelah_selesai_pendidikan" value="{{$pesertadidik->nama_perusahaan_setelah_selesai_pendidikan}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-grup">
                                                            <label for="">Penghasilan</label>
                                                            <input type="text" class="form-control"
                                                                name="penghasilan_setelah_selesai_pendidikan" value="{{$pesertadidik->penghasilan_setelah_selesai_pendidikan}}">
                                                        </div>
                                                    </div>

                                                </div>

                                                <br>
                                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                    <button class="btn btn-primary"type="button"><i
                                                            class="fa fa-arrow-left"></i></button>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card -->
                            </div>

                            <button class="btn btn-success float-right mt-3"> <i class="fa fa-save"></i>
                                Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app>
