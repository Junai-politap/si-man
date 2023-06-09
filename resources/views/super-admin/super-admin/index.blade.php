<x-app>

    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card-header" data-pages="parallax">
                    <div class="card-body">
                        <div class="inner" style="transform: translateY(0px); opacity: 1;">
                            <h2>DATA LOGIN SUPERADMIN</h2>
                        </div>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body">
                        <a href="{{ url('super-admin/super-admin/create') }}" class="btn btn-outline-success"><i
                                class="fa fa-plus"></i> Tambah Super Admin</a>
                        <hr>
                        <div class="table-responsive">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead class="thead-default">
                                    <th class="text-center">No</th>
                                    <th class="text-center">Aksi</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Email</th>

                                </thead>
                                <tbody>
                                    @foreach ($list_superadmin as $superadmin)
                                        <tr class="text-center">
                                            <td width="50">{{ $loop->iteration }}</td>
                                            <td width="250">
                                                <div class="btn-group">
                                                    <x-button.delete-button url="super-admin/super-admin"
                                                        id="{{ $superadmin->id }}" />
                                                </div>
                                            </td>
                                            <td>{{ $superadmin->nama }}</td>

                                            <td>{{ $superadmin->email }}</td>

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
