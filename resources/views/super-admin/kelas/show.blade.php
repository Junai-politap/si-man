<x-app>

    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-md-12">
                <x-button.back-button url="super-admin/kelas" />
                <div class="card mt-3">
                    <div class="card-body">

                        <div class="table-responsive">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead class="thead-default">
                                    <th class="text-center">No</th>
                                    <th class="text-center">NIS/NISN</th>
                                    <th class="text-center">Nama Anggota</th>

                                </thead>
                                <tbody>
                                    @foreach ($list_anggota as $anggota)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>

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

                <div class="card">
                    <div class="card-body">

                        <form action="{{ url('super-admin/kelas/store-kelas') }}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">

                                    <input type="text" name="id_kelas" value="{{ $kelas->id }}"
                                        class="form-control" hidden>
                                </div>
                                <div style="overflow-x: auto;">
                                    <button class="btn btn-primary float-right"><span class="fa fa-save"></span>
                                        Simpan</button>
                                    <table id="example3" class="table table-bordered table-striped">
                                        <thead>
                                            <th class="text-center">Aksi</th>
                                            <th class="text-center">NIS/NISN</th>
                                            <th class="text-center">Nama Peserta Didik</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($list_peserta_didik as $peserta_didik)
                                                <tr>
                                                    <td class="text-center">
                                                        <div>
                                                            <input class="form-check-input" type="checkbox"
                                                                name="peserta_didik[{{ $peserta_didik->id }}]"
                                                                aria-label="...">
                                                        </div>

                                                    </td>
                                                    <td class="text-center">
                                                        {{ $peserta_didik->nis }}/{{ $peserta_didik->nisn }}</td>
                                                    <td class="text-center">{{ $peserta_didik->nama_lengkap }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <br>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
