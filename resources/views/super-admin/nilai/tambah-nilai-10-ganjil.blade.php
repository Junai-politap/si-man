<x-app>

    <div class="container-fluid mt-3">
        <div class="card">
            <div class="col-md-12">
                <div class="content">
                    <x-button.back-button url="super-admin/nilai" />


                    <div class="card-body">

                        <div class="mt-4 d-flex justify-content-center">
                            <span>
                                <h4>TAMBAH NILAI MAN 2 KETAPANG</h4>
                            </span>
                        </div>

                        <form action="{{ url('super-admin/nilai-10-ganjil') }}" method="post">
                            @csrf
                            <table class="table table-bordered table-striped table-sm">
                                <tbody>
                                    <input type="text" name="id_peserta_didik" value="{{ $pesertadidik->id }}"
                                        hidden>
                                    <tr>

                                        <td>NAMA PESERTA DIDIK</td>
                                        <td>{{ $pesertadidik->nama_lengkap }}</td>

                                    </tr>
                                    <tr>
                                        <td>NIS/NISN</td>
                                        <td>{{ $pesertadidik->nis }} / {{ $pesertadidik->nisn }}</td>

                                    </tr>
                                    @foreach ($list_kelas->where('kelas', 'Kelas X')->where('semester', 'Ganjil') as $kelas)
                                        <tr>

                                            <td>KELAS</td>
                                            <td>{{ $kelas->kelas }}</td>

                                        </tr>
                                        <tr>

                                            <td>SEMESTER</td>
                                            <td>{{ $kelas->semester }}</td>

                                        </tr>
                                        <input type="text" name="id_kelas" value="{{ $kelas->id }}"
                                            class="form-control" hidden>
                                            <input type="text" name="semester" value="{{ $kelas->semester }}" hidden>
                                    @endforeach

                                </tbody>
                            </table>

                            <table class="table table-bordered table-striped">


                                <tbody>
                                    <tr>
                                        <th colspan="2" class="text-center">

                                            <label for="" class="control-label">TAHUN PELAJARAN</label>
                                        </th>
                                        <th colspan="7">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="tahun_pelajaran">
                                            </div>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th colspan="2" class="text-center">ASPEK PENILAIAN</th>
                                        <th colspan="3"class="text-center">PENGETAHUAN</th>
                                        <th colspan="2" class="text-center">KETERAMPILAN</th>
                                        <th colspan="2"class="text-center">SIKAP</th>
                                    </tr>

                                    <tr>
                                        <th class="text-center">NO</th>
                                        <th class="text-center">MATA PELAJARAN</th>
                                        <th class="text-center">NILAI</th>
                                        <th class="text-center">KKM</th>
                                        <th class="text-center">PREDIK</th>
                                        <th class="text-center">NILAI</th>
                                        <th class="text-center">PREDIK</th>
                                        <th class="text-center">SPIRIT</th>
                                        <th class="text-center">SOSIAL</th>

                                    </tr>

                                    @foreach ($list_mapel as $mapel)
                                        @if ($mapel->id_kelas == $kelas->id)
                                            <tr>
                                                <input type="text" name="mapel[{{ $mapel->id }}]" value="{{ $mapel->id }}" hidden>
                                                <th>{{ $loop->iteration }}</th>
                                                <td>{{ $mapel->mapel }}</td>
                                                <td>
                                                    <div class="form-group">

                                                        <input type="text" class="form-control"
                                                            name="nilai_pengetahuan">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">

                                                        <input type="text" class="form-control"
                                                            name="kkm_pengetahuan">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">

                                                        <input type="text" class="form-control"
                                                            name="predikat_pengetahuan">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">

                                                        <input type="text" class="form-control"
                                                            name="nilai_keterampilan">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control"
                                                            name="predikat_keterampilan">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control"
                                                            name="spiritual_sikap">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="sosial_sikap">
                                                    </div>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>

                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <th colspan="2" class="text-center">KEGIATAN EKSTRAKURIKULER
                                        </th>
                                        <th class="text-center">KETERANGAN</th>
                                    </tr>
                                    <tr>
                                        <td width="40 px">1</td>
                                        <td>Pramuka</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="ekskul_pramuka">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Olahraga</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="ekskul_olahraga">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>BTQ</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="ekskul_btq">
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                            <br>
                            <table class="table table-bordered table-striped">

                                <tbody>
                                    <tr>
                                        <th colspan="2" class="text-center">KETIDAKHADIRAN</th>
                                        <th class="text-center">KETERANGAN</th>
                                    </tr>
                                    <tr>
                                        <td width="40 px">1</td>
                                        <td>Sakit</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="sakit">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Izin</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="izin">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Tanpa Keterangan</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="tanpaketerangan">
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                            <button class="btn btn-primary float-right"><i class="fa fa-save"></i> Simpan</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app>
