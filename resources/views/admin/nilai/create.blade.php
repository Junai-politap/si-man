@extends('admin.base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('admin/nilai') }}" class="btn btn-dark"><i class="fa fa-arrow-left"></i> Kembali</a>
                <div class="card mt-2">
                    <div class="card-header">
                        <div class="card-title">Tambah Nilai</div>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/nilai') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-grup">
                                        <label for="">Nama Peserta Didik</label>
                                        <input type="text" class="form-control" name="jalan" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grup">
                                        <label for="">Mata Pelajaran</label>
                                        <input type="text" class="form-control" name="jalan" required>
                                    </div>
                                </div>
                            </div>                          
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-grup">
                                        <label for="">Kelas</label>
                                        <input type="text" class="form-control" name="jalan" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grup">
                                        <label for="">Semester</label>
                                        <input type="text" class="form-control" name="jalan" required>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <table id="datatable-buttons"
                                    class="table table-striped table-bordered dt-responsive nowrap mt-1">
                                    <thead>
                                        <tr>

                                            <th scope="col-md-3">PENGETAHUAN</th>
                                            <th scope="col-md-3">KETERAMPILAN</th>
                                            <th scope="col-md-3">SIKAP</th>
                                           


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-grup">
                                                        <label for="">KKM</label>
                                                        <input type="text" class="form-control" name="nis" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-grup">
                                                        <label for="">Nilai</label>
                                                        <input type="text" class="form-control" name="nisn" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-grup">
                                                        <label for="">Predikat</label>
                                                        <input type="text" class="form-control" name="nisn" required>
                                                    </div>
                                                </div>
                                            </div>
                                            </td>

                                            <td>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-grup">
                                                        <label for="">Nilai</label>
                                                        <input type="text" class="form-control" name="nisn" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-grup">
                                                        <label for="">Predikat</label>
                                                        <input type="text" class="form-control" name="nisn" required>
                                                    </div>
                                                </div>
                                            </div>
                                            </td>
                                            <td>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-grup">
                                                        <label for="">Spiritual</label>
                                                        <input type="text" class="form-control" name="nisn" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-grup">
                                                        <label for="">Sosial</label>
                                                        <input type="text" class="form-control" name="nisn" required>
                                                    </div>
                                                </div>
                                            </div>
                                            </td>
                                         
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <table id="datatable-buttons"class="table table-striped table-bordered dt-responsive nowrap mt-1">
                                    <thead>
                                        <tr>

                                            <th scope="col-md-3">KETIDAKHADIRAN</th>
                                            <th scope="col-md-3">EXTRAKULIKULER</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-grup">
                                                        <label for="">Sakit</label>
                                                        <input type="text" class="form-control" name="nis" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-grup">
                                                        <label for="">Izin</label>
                                                        <input type="text" class="form-control" name="nisn" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-grup">
                                                        <label for="">Tanpa Keterangan</label>
                                                        <input type="text" class="form-control" name="nisn" required>
                                                    </div>
                                                </div>
                                            </div>
                                            </td>

                                            <td>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-grup">
                                                            <label for="">Pramuka</label>
                                                            <input type="text" class="form-control" name="nis" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-grup">
                                                            <label for="">BTQ</label>
                                                            <input type="text" class="form-control" name="nisn" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-grup">
                                                            <label for="">Olah Raga</label>
                                                            <input type="text" class="form-control" name="nisn" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>





                            <button class="btn btn-success float-right"><i class="fa fa-save"></i> Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
