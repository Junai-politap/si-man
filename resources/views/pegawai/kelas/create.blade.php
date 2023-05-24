<x-pegawai>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <x-button.back-button url="pegawai/kelas" />
                <div class="card mt-2">
                    <div class="card-header">
                        <div class="card-title">Tambah Kelas</div>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('pegawai/kelas') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="" class="control-label">Kelas</label>
                                <input type="text" class="form-control" name="kelas" required>
                            </div>

                            <div class="form-group">
                                <label for="" class="control-label">Semester</label>
                                <select name="semester" class="form-control">
                                    <option value="">Pilih Semester</option>
                                    <option value="Ganjil"> Ganjil</option>
                                    <option value="Genap"> Genap</option>
                                </select>
                            </div>

                            <button class="btn btn-success float-right"><i class="fa fa-save"></i> Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-pegawai>
