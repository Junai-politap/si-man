<x-app>

    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <x-button.back-button url="super-admin/nilai" />
                        <h3 class="title text-center">Data Anggota {{ $kelas->kelas }}</h3>
                    </div>

                    <div class="mt-3">
                        <div class="card-body">

                            <div class="table-responsive">
                                <table id="example2" class="table table-bordered table-striped">
                                    <thead class="thead-default">
                                        <th class="text-center">No</th>
                                        <th class="text-center">Aksi</th>
                                        <th class="text-center">NIS/NISN</th>
                                        <th class="text-center">Nama Anggota</th>

                                    </thead>
                                    <tbody>
                                        @foreach ($list_anggota as $anggota)
                                            <tr>
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <a href="{{ url("super-admin/nilai/$anggota->id") }}/nilai" class="btn btn-primary"><span
                                                                class="fa fa-plus"></span> Tambah Nilai</a>
                                                    </div>
                                                </td>
                                                <td class="text-center">{{ $anggota->pesertadidik->nis }}
                                                    /{{ $anggota->pesertadidik->nis }}</td>
                                                <td class="text-center">{{ $anggota->pesertadidik->nama_lengkap }}</td>

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
    </div>

</x-app>
