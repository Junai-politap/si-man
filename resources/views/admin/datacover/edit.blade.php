<x-admin>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <x-button.back-button url="admin/data-cover" />
                <div class="card mt-2">
                    <div class="card-header">
                        <strong> Edit Data sekolah</strong>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/data-cover', $datacover->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-grup">
                                        <label for="">Nama Sekolah</label>
                                        <input type="text" class="form-control" name="nama_sekolah" value="{{$datacover->nama_sekolah}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grup">
                                        <label for="">NSS/NPSN</label>
                                        <input type="text" class="form-control" name="nss_npsn" value="{{$datacover->nss_npsn}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-grup">
                                        <label for="">Alamat Sekolah</label>
                                        <input type="text" class="form-control" name="alamat_sekolah" value="{{$datacover->alamat_sekolah}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-grup">
                                        <label for="">Desa/Kelurahan</label>
                                        <input type="text" class="form-control" name="desa_kelurahan" value="{{$datacover->desa_kelurahan}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-grup">
                                        <label for="">Kecamatan</label>
                                        <input type="text" class="form-control" name="kecamatan" value="{{$datacover->kecamatan}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-grup">
                                        <label for="">Kabupaten/Kota</label>
                                        <input type="text" class="form-control" name="kabupaten" value="{{$datacover->kabupaten}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grup">
                                        <label for="">Provinsi</label>
                                        <input type="text" class="form-control" name="provinsi" value="{{$datacover->provinsi}}">
                                    </div>
                                </div>
                            
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-grup">
                                        <label for="">Nama Kepala Sekolah</label>
                                        <input type="text" class="form-control" name="nama_kepala_sekolah" value="{{$datacover->nama_kepala_sekolah}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grup">
                                        <label for="">NIP Kepala Sekolah</label>
                                        <input type="text" class="form-control" name="nip_kepala_sekolah" value="{{$datacover->nip_kepala_sekolah}}">
                                    </div>
                                </div>
                            
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-grup">
                                        <label for="">Nama Petugas</label>
                                        <input type="text" class="form-control" name="nama_petugas" value="{{$datacover->nama_petugas}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grup">
                                        <label for="">NIP Petugas</label>
                                        <input type="text" class="form-control" name="nip_petugas" value="{{$datacover->nip_petugas}}">
                                    </div>
                                </div>
                            
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-grup">
                                        <label for="">Tahun Pelajaran</label>
                                        <input type="text" class="form-control" name="tahun_pelajaran" value="{{$datacover->tahun_pelajaran}}">
                                    </div>
                                </div>
                            </div>
                        
                            <button class="btn btn-success float-right mt-3"> <i class="fa fa-save"></i>
                                Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin>
