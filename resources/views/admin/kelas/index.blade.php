<x-admin>

    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card-header" data-pages="parallax">
                    <div class="card-body">
                        <div class="inner" style="transform: translateY(0px); opacity: 1;">
                            <h2>DATA KELAS</h2>
                        </div>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body">
                        <a href="{{ url('admin/kelas/create') }}" class="btn btn-outline-success"><i
                                class="fa fa-plus"></i> Tambah Kelas</a>
                        <hr>
                        <div class="table-responsive">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead class="thead-default">
                                    <th class="text-center">No</th>
                                    <th class="text-center">Aksi</th>
                                    <th class="text-center">Kelas</th>
                                    <th class="text-center">Semester</th>

                                </thead>
                                <tbody>
                                    @foreach ($list_kelas as $kelas)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <x-button.info-button url="admin/kelas" id="{{ $kelas->id }}" />

                                                    <x-button.edit-button url="admin/kelas" id="{{ $kelas->id }}" />

                                                    <x-button.delete-button url="admin/kelas"
                                                        id="{{ $kelas->id }}" />
                                                </div>
                                            </td>
                                            <td class="text-center">{{ $kelas->kelas }}</td>
                                            <td class="text-center">{{ $kelas->semester }}</td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin>
