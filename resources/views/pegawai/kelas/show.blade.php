<x-pegawai>

    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3>Tambah Anggota</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('pegawai/kelas') }}" method="post">
                            <div class="jsgrid-table">
                                <table class="table table-bordered table-datatable">
                                    <thead class="thead-default">
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nama Peserta Didik</th>
                                        <th class="text-center">NIS Peserta Didik</th>
                                        <th class="text-center "><i class="bi bi-check-circle-fill"></i></th>


                                    </thead>
                                    <tbody>
                                        @foreach ($list_pesertadidik as $pesertadidik)
                                            <tr>
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td class="text-center">{{ $pesertadidik->nama_lengkap }}</td>
                                                <td class="text-center">{{ $pesertadidik->nis }}</td>
                                                <td class="text-center"> <input type="checkbox" id="vehicle1"
                                                        name="vehicle1" value="Bike"></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <button class="btn btn-success float-right"><i class="fa fa-save"></i> Tambah Anggota</button>
                        </form>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-header">
                        <h3>Data Anggota Kelas</h3>
                    </div>
                    <div class="card-body">
                        <div class="jsgrid-table">
                            <table class="table table-bordered table-datatable">
                                <thead class="thead-default">
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama Peserta Didik</th>
                                    <th class="text-center">NIS Peserta Didik</th>


                                </thead>
                                <tbody>



                                    <tr>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>

                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        $(function() {
            $("#jsGrid1").jsGrid({
                height: "100%",
                width: "100%",

                sorting: true,
                paging: true,

                data: db.clients,

                fields: [{
                        name: "Name",
                        type: "text",
                        width: 150
                    },
                    {
                        name: "Age",
                        type: "number",
                        width: 50
                    },
                    {
                        name: "Address",
                        type: "text",
                        width: 200
                    },
                    {
                        name: "Country",
                        type: "select",
                        items: db.countries,
                        valueField: "Id",
                        textField: "Name"
                    },
                    {
                        name: "Married",
                        type: "checkbox",
                        title: "Is Married"
                    }
                ]
            });
        });
    </script>


</x-pegawai>