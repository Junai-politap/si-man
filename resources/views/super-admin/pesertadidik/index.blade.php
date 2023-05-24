<x-app>

    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card-header" data-pages="parallax">
                   <div class="card-body">
                        <div class="inner" style="transform: translateY(0px); opacity: 1;">
                            <h2>DATA PESERTA DIDIK</h2>
                        </div>
                   </div>   
                </div>
                <div class="card mt-3">
                    <div class="card-body">
                        <a href="{{ url('super-admin/peserta-didik/create') }}" class="btn btn-outline-success "><i
                                class="fa fa-plus"></i>
                            Tambah
                            Data</a>
                        <div class="table-responsive mt-3">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Aksi</th>
                                    <th class="text-center">NIS</th>
                                    <th class="text-center">NISN</th>
                                    <th class="text-center">Nama Lengkap</th>
                                    <th class="text-center">Jenis Kelamin</th>
                                </thead>
                                <tbody>
                                    @foreach ($list_pesertadidik as $pesertadidik)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>

                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <x-button.info-button url="super-admin/peserta-didik"
                                                        id="{{ $pesertadidik->id }}" />

                                                    <x-button.edit-button url="super-admin/peserta-didik"
                                                        id="{{ $pesertadidik->id }}" />

                                                    <x-button.delete-button url="super-admin/peserta-didik"
                                                        id="{{ $pesertadidik->id }}" />
                                                </div>
                                            </td>
                                            <td class="text-center">{{ $pesertadidik->nis }}</td>
                                            <td class="text-center">{{ $pesertadidik->nisn }}</td>
                                            <td class="text-center">{{ $pesertadidik->nama_lengkap }}</td>
                                            <td class="text-center">{{ $pesertadidik->jenis_kelamin }}</td>
                                            
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
