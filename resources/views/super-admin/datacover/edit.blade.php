<x-app>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <x-button.back-button url="super-admin/data-cover" />
                <div class="card mt-2">
                    <div class="card-header">
                        <strong> Edit Data sekolah</strong>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('super-admin/data-cover', $datacover->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                         
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

</x-app>
