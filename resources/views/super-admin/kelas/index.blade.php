<x-app>

    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-12">
                <div class="card-header">
                    <h2>DATA KELAS</h2>
                </div>
                <div class="card mt-3">
                    <div class="card-body">
                        <a href="{{ url('super-admin/kelas/create') }}" class="btn btn-outline-success"><i
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
                                            <td class="text-center" width="50">{{ $loop->iteration }}</td>
                                            <td class="text-center" width="250">
                                                <div class="btn-group">

                                                    <x-button.info-button url="super-admin/kelas"
                                                        id="{{ $kelas->id }}" />

                                                    <x-button.edit-button url="super-admin/kelas"
                                                        id="{{ $kelas->id }}" />

                                                    <x-button.delete-button url="super-admin/kelas"
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

</x-app>
