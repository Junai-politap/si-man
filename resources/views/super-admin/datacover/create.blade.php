<x-app>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <x-button.back-button url="super-admin/data-cover" />
                <div class="card mt-2">
                    <div class="card-header">
                        <strong> Tambah Data Cover</strong>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('super-admin/data-cover') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-grup">
                                        <label for="">Nama Sekolah</label>
                                        <input type="text" class="form-control" name="nama_sekolah" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grup">
                                        <label for="">NSS/NPSN</label>
                                        <input type="text" class="form-control" name="nss_npsn" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-grup">
                                        <label for="">Alamat Sekolah</label>
                                        <input type="text" class="form-control" name="alamat_sekolah" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-grup">
                                        <label for="">Desa/Kelurahan</label>
                                        <input type="text" class="form-control" name="desa_kelurahan" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-grup">
                                        <label for="">Kecamatan</label>
                                        <input type="text" class="form-control" name="kecamatan" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-grup">
                                        <label for="">Kabupaten/Kota</label>
                                        <input type="text" class="form-control" name="kabupaten" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grup">
                                        <label for="">Provinsi</label>
                                        <input type="text" class="form-control" name="provinsi" required>
                                    </div>
                                </div>
                            
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-grup">
                                        <label for="">Nama Kepala Sekolah</label>
                                        <input type="text" class="form-control" name="nama_kepala_sekolah" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grup">
                                        <label for="">NIP Kepala Sekolah</label>
                                        <input type="text" class="form-control" name="nip_kepala_sekolah" required>
                                    </div>
                                </div>
                            
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-grup">
                                        <label for="">Nama Petugas</label>
                                        <input type="text" class="form-control" name="nama_petugas" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grup">
                                        <label for="">NIP Petugas</label>
                                        <input type="text" class="form-control" name="nip_petugas" required>
                                    </div>
                                </div>
                            
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-grup">
                                        <label for="">Tahun Pelajaran</label>
                                        <input type="text" class="form-control" name="tahun_pelajaran" required>
                                    </div>
                                </div>
                            </div>
                        
                        
                            <button class="btn btn-success float-right mt-4"> <i class="fa fa-save"></i>
                                Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app>