<x-app>

    <div class="container-fluid mt-3">
        <div class="card">
            <div class="row">
            <div class="col-md-6">
                <div class="content">
                    <x-button.back-button url="super-admin/nilai" />


                    <div class="card-body">

                        <div class="mt-4 d-flex justify-content-center">
                            <span>
                                <h4>Detail NILAI MAN 2 KETAPANG</h4>
                            </span>
                        </div>

                        <table class="table table-bordered table-striped table-sm">
                            <tbody>
                                <input type="text" name="id_peserta_didik" value="{{ $pesertadidik->id }}" hidden>
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



                        <table class="table table-bordered table-striped" style="margin-top: 3%">



                            <tbody>
                                @foreach ($list_tahun_ajar as $nilai10ganjil)
                                <tr>
                                    <th colspan="2" class="text-center">

                                        <label for="" class="control-label">TAHUN PELAJARAN</label>
                                    </th>
                                   
                                    <th colspan="7">
                                        <div class="form-group">
                                            <p class="text-center">{{ $nilai10ganjil->tahun_pelajaran }}</p>
                                        </div>
                                    </th>
                                    
                                </tr>
                                @endforeach
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
                                @foreach ($list_nilai10ganjil as $nilai10ganjil)
                                   
                                        <tr>

                                            <th>{{ $loop->iteration }}</th>
                                            <td>{{ $nilai10ganjil->mapel->mapel }}</td>
                                            <td>
                                                <div class="form-group">

                                                    <p class="text-center">{{ $nilai10ganjil->nilai_pengetahuan }}</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <p class="text-center">{{ $nilai10ganjil->kkm_pengetahuan }}</p>
                                                    
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <p class="text-center">{{ $nilai10ganjil->predikat_pengetahuan }}</p>
                                                    
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <p class="text-center">{{ $nilai10ganjil->nilai_keterampilan }}</p>
                                                   
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <p class="text-center">{{ $nilai10ganjil->predikat_keterampilan }}</p>
                                                   
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <p class="text-center">{{ $nilai10ganjil->spiritual_sikap }}</p>
                                                    
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <p class="text-center">{{ $nilai10ganjil->sosial_sikap }}</p>
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                    
                                @endforeach

                            </tbody>
                        </table>

                        @foreach ($list_nilai_tambahan as $nilai_tambahan)
                        
                        <table class="table table-bordered table-striped" style="margin-top: 3%">
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
                                            <p class="text-center">{{ $nilai_tambahan->ekskul_pramuka }}</p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Olahraga</td>
                                    <td>
                                        <div class="form-group">
                                            <p class="text-center">{{ $nilai_tambahan->ekskul_olahraga }}</p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>BTQ</td>
                                    <td>
                                        <div class="form-group">
                                            <p class="text-center">{{ $nilai_tambahan->ekskul_btq }}</p>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        
                        <table class="table table-bordered table-striped" style="margin-top: 3%">

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
                                            <p class="text-center">{{ $nilai_tambahan->sakit }}</p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Izin</td>
                                    <td>
                                        <div class="form-group">
                                            <p class="text-center">{{ $nilai_tambahan->izin }}</p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Tanpa Keterangan</td>
                                    <td>
                                        <div class="form-group">
                                            <p class="text-center">{{ $nilai_tambahan->tanpaketerangan }}</p>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="content">
                   
                    <div class="card-body">

                        <div class="mt-4 d-flex justify-content-center">
                            <span>
                                <h4>Detail NILAI MAN 2 KETAPANG</h4>
                            </span>
                        </div>

                        <table class="table table-bordered table-striped table-sm">
                            <tbody>
                                <input type="text" name="id_peserta_didik" value="{{ $pesertadidik->id }}" hidden>
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



                        <table class="table table-bordered table-striped" style="margin-top: 3%">



                            <tbody>
                                @foreach ($list_tahun_ajar as $nilai10ganjil)
                                <tr>
                                    <th colspan="2" class="text-center">

                                        <label for="" class="control-label">TAHUN PELAJARAN</label>
                                    </th>
                                   
                                    <th colspan="7">
                                        <div class="form-group">
                                            <p class="text-center">{{ $nilai10ganjil->tahun_pelajaran }}</p>
                                        </div>
                                    </th>
                                    
                                </tr>
                                @endforeach
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
                                @foreach ($list_nilai10ganjil as $nilai10ganjil)
                                   
                                        <tr>

                                            <th>{{ $loop->iteration }}</th>
                                            <td>{{ $nilai10ganjil->mapel->mapel }}</td>
                                            <td>
                                                <div class="form-group">

                                                    <p class="text-center">{{ $nilai10ganjil->nilai_pengetahuan }}</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <p class="text-center">{{ $nilai10ganjil->kkm_pengetahuan }}</p>
                                                    
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <p class="text-center">{{ $nilai10ganjil->predikat_pengetahuan }}</p>
                                                    
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <p class="text-center">{{ $nilai10ganjil->nilai_keterampilan }}</p>
                                                   
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <p class="text-center">{{ $nilai10ganjil->predikat_keterampilan }}</p>
                                                   
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <p class="text-center">{{ $nilai10ganjil->spiritual_sikap }}</p>
                                                    
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <p class="text-center">{{ $nilai10ganjil->sosial_sikap }}</p>
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                    
                                @endforeach

                            </tbody>
                        </table>

                        @foreach ($list_nilai_tambahan as $nilai_tambahan)
                        
                        <table class="table table-bordered table-striped" style="margin-top: 3%">
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
                                            <p class="text-center">{{ $nilai_tambahan->ekskul_pramuka }}</p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Olahraga</td>
                                    <td>
                                        <div class="form-group">
                                            <p class="text-center">{{ $nilai_tambahan->ekskul_olahraga }}</p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>BTQ</td>
                                    <td>
                                        <div class="form-group">
                                            <p class="text-center">{{ $nilai_tambahan->ekskul_btq }}</p>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        
                        <table class="table table-bordered table-striped" style="margin-top: 3%">

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
                                            <p class="text-center">{{ $nilai_tambahan->sakit }}</p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Izin</td>
                                    <td>
                                        <div class="form-group">
                                            <p class="text-center">{{ $nilai_tambahan->izin }}</p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Tanpa Keterangan</td>
                                    <td>
                                        <div class="form-group">
                                            <p class="text-center">{{ $nilai_tambahan->tanpaketerangan }}</p>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        
                        @endforeach
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

</x-app>
