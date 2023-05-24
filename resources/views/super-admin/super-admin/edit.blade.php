<x-app>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('super-admin/super-admin') }}" class="btn btn-dark"><i class="fa fa-arrow-left"></i> Kembali</a>
                <div class="card mt-2">
                    <div class="card-header">
                        <div class="card-title">Tambah Super Admin</div>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('super-admin/super-admin', $superadmin->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="class col-md-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="" class="control-label">Nama</label>
                                            <input type="text" class="form-control" name="nama"
                                                value="{{ $superadmin->nama }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="class col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Username</label>
                                        <input type="text" class="form-control" name="username"
                                            value="{{ $superadmin->username }}">
                                    </div>
                                </div>

                            </div>
                            <div class="row">

                                <div class="class col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Email</label>
                                        <input type="email" class="form-control" name="email"
                                            value="{{ $superadmin->email }}">
                                    </div>
                                </div>
                                <div class="class col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Password</label>
                                        <input type="password" class="form-control" name="password">
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
