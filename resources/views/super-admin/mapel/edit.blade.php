<x-app>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <x-button.back-button url="super-admin/mapel" />
            <div class="card mt-2">
                <div class="card-header">
                    <div class="card-title">Edit Mapel</div>
                </div>
                <div class="card-body">
                    <form action="{{url('super-admin/mapel', $mapel->id)}}" method="post">
                    @csrf
                    @method('PUT')
                        <div class="form-group">
                            <label for="" class="control-label">Mata Pelajaran</label>
                            <input type="text" class="form-control" name="mapel" value="{{$mapel->mapel}}">
                        </div>
                      
                        <button class="btn btn-warning float-right"><i class="fa fa-save"></i> Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</x-app>