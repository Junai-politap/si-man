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