<x-app>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <x-button.back-button url="super-admin/admin" />
                <div class="card mt-2">
                    <div class="card-header">
                        <div class="card-title">Tambah Admin</div>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('super-admin/admin', $admin->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="class col-md-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="" class="control-label">Nama</label>
                                            <input type="text" class="form-control" name="nama"
                                                value="{{ $admin->nama }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="class col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Username</label>
                                        <input type="text" class="form-control" name="username"
                                            value="{{ $admin->username }}">
                                    </div>
                                </div>

                            </div>
                            <div class="row">

                                <div class="class col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Email</label>
                                        <input type="email" class="form-control" name="email"
                                            value="{{ $admin->email }}">
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
