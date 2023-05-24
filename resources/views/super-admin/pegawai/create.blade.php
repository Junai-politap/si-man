<x-app>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <x-button.back-button url="super-admin/pegawai" />
            <div class="card mt-2">
                <div class="card-header">
                    <div class="card-title">Tambah Pegawai</div>
                </div>
                <div class="card-body">
                    <form action="{{url('super-admin/pegawai')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="class col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Nama</label>
                                <input type="text" class="form-control" name="nama" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Username</label>
                                <input type="text" class="form-control" name="username" required>
                            </div>
                        </div>
                           
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Email</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Password</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                        </div>    
                    </div>
                       
                        <button class="btn btn-success float-right"><i class="fa fa-save"></i> Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</x-app>