<x-app>

    <div class="container-fluid mt-3">
        <div class="card">
            <div class="content">
                <div class="card-body">
                        <div class="mt-4 d-flex justify-content-center">
                            <span >
                                <h4>TAMBAH NILAI MAN 2 KETAPANG</h4>
                            </span>
                        </div>
                
                       

                        <table class="table table-borderless table-sm">
                            <tbody>

                                <tr>

                                    <td width="400px">NAMA PESERTA DIDIK</td>
                                    <td>:</td>
                                    <td>ALVIA</td>

                                </tr>
                                <tr>
                                    <td>NIS/NISN</td>
                                    <td>:</td>
                                    <td>3042022006</td>

                                </tr>
                                <tr>

                                    <td>KELAS</td>
                                    <td>:</td>
                                    <td>TI A</td>

                                </tr>
                                <tr>

                                    <td>SEMESTER</td>
                                    <td>:</td>
                                    <td>GENAP</td>

                                </tr>
                            </tbody>
                            


                        </table>
                        <br>
                        <table class="table table-bordered">


                            <tbody>
                                <tr>
                                    <th colspan="2" class="text-center">TAHUN PELAJARAN</th>
                                    <th colspan="7"> 
                                    <div class="form-group">
                                        <label for="" class="control-label"></label>
                                        <input type="text" class="form-control" name="" required>
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
                                    <th class="text-center" width="400px">MATA PELAJARAN</th>
                                    <th class="text-center">NILAI</th>
                                    <th class="text-center">KKM</th>
                                    <th class="text-center">PREDIK</th>
                                    <th class="text-center">NILAI</th>
                                    <th class="text-center">PREDIK</th>
                                    <th class="text-center">SPIRIT</th>
                                    <th class="text-center">SOSIAL</th>

                                </tr>
                                
                                @foreach ($list_mapel  as $mapel)
                                    
                                <tr>

                                    <th>{{$loop->iteration}}</th>
                                    <td>{{$mapel->mapel}}</td>
                                    <td>
                                    <div class="form-group">
                                        <label for="" class="control-label"></label>
                                        <input type="text" class="form-control" name="" required>
                                    </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="" class="control-label"></label>
                                            <input type="text" class="form-control" name="" required>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="" class="control-label"></label>
                                            <input type="text" class="form-control" name="" required>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="" class="control-label"></label>
                                            <input type="text" class="form-control" name="" required>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="" class="control-label"></label>
                                            <input type="text" class="form-control" name="" required>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="" class="control-label"></label>
                                            <input type="text" class="form-control" name="" required>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="" class="control-label"></label>
                                            <input type="text" class="form-control" name="" required>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                              

                            </tbody>
                        </table>
                        <br>

                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th colspan="2" class="text-center" width="100px">KEGIATAN EKSTRAKURIKULER</th>
                                    <th class="text-center">KETERANGAN</th>
                                </tr>
                                <tr>
                                    <td width="40 px">1</td>
                                    <td>Pramuka</td>
                                    <td> 
                                        <div class="form-group">
                                            <label for="" class="control-label"></label>
                                            <input type="text" class="form-control" name="" required>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Olahraga</td>
                                    <td> 
                                        <div class="form-group">
                                            <label for="" class="control-label"></label>
                                            <input type="text" class="form-control" name="" required>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Apa aja</td>
                                    <td> 
                                        <div class="form-group">
                                            <label for="" class="control-label"></label>
                                            <input type="text" class="form-control" name="" required>
                                        </div>
                                    </td>
                                </tr>
                            
                            </tbody>
                        </table>
                        <br>
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th colspan="2" class="text-center" width="100px">KETIDAKHADIRAN</th>
                                    <th class="text-center">KETERANGAN</th>
                                </tr>
                                <tr>
                                    <td width="40 px">1</td>
                                    <td>Sakit</td>
                                    <td>
                                         <div class="form-group">
                                            <label for="" class="control-label"></label>
                                            <input type="text" class="form-control" name="" required>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Izin</td>
                                    <td>
                                         <div class="form-group">
                                            <label for="" class="control-label"></label>
                                            <input type="text" class="form-control" name="" required>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Tanpa Keterangan</td>
                                    <td>
                                         <div class="form-group">
                                            <label for="" class="control-label"></label>
                                            <input type="text" class="form-control" name="" required>
                                        </div>
                                    </td>
                                </tr>
                               
                            </tbody>
                        </table>
 
                 </div>                
            </div>
        </div>
    </div>

</x-app>
