<x-app>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <x-button.back-button url="super-admin/mapel" />
            <div class="card mt-2">
                <div class="card-header">
                    <div class="card-title">Tambah Mapel</div>
                </div>
                <div class="card-body">
                    <form action="{{url('super-admin/mapel')}}" method="post">
                    @csrf
                        
                        <div class="form-group">
                            <label for="" class="control-label">Mata Pelajaran</label>
                            <input type="text" class="form-control" name="mapel" required>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Kelas</label>
                            <select name="id_kelas" class="form-control">
                                <option value=""> Pilih Kelas</option>
                                @foreach($list_kelas as $kelas)
                                <option value="{{$kelas->id}}"> {{$kelas->kelas}} | {{$kelas->semester}}</option>
                                @endforeach
                            </select>
                        </div>
                        
                      
                        <button class="btn btn-success float-right"><i class="fa fa-save"></i> Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</x-app>