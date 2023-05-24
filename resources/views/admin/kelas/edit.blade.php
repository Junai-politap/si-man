<x-admin>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <x-button.back-button url="admin/kelas" />
            <div class="card mt-2">
                <div class="card-header">
                    <div class="card-title">Tambah Kelas</div>
                </div>
                <div class="card-body">
                    <form action="{{url('admin/kelas', $kelas->id)}}" method="post">
                    @csrf
                    @method('PUT')
                        <div class="form-group">
                            <label for="" class="control-label">Kelas</label>
                            <input type="text" class="form-control" name="nama" value="{{$kelas->kelas}}">
                        </div>
                      
                        <button class="btn btn-warning float-right"><i class="fa fa-save"></i> Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</x-admin>