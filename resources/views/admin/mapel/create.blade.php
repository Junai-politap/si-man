<x-admin>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <x-button.back-button url="admin/mapel" />
            <div class="card mt-2">
                <div class="card-header">
                    <div class="card-title">Tambah Mapel</div>
                </div>
                <div class="card-body">
                    <form action="{{url('admin/mapel')}}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="" class="control-label">Mata Pelajaran</label>
                            <input type="text" class="form-control" name="mapel" required>
                        </div>
                      
                        <button class="btn btn-success float-right"><i class="fa fa-save"></i> Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</x-admin>