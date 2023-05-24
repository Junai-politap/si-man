<x-app>

    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card-header" data-pages="parallax">
                    <div class="card-body">
                         <div class="inner" style="transform: translateY(0px); opacity: 1;">
                             <h2>DATA COVER</h2>
                         </div>
                    </div>   
                 </div>
                <div class="card mt-3">
                    <div class="card-body">
                        <a href="{{ url('super-admin/data-cover/create') }}" class="btn btn-outline-success "><i
                                class="fa fa-plus"></i>
                            Tambah
                            Data</a>
                        <div class="mt-3">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead >
                                    <th class="text-center">No</th>
                                    <th class="text-center">Aksi</th>
                                    <th class="text-center">Nama Sekolah</th>
                                    <th class="text-center">NSS/NPSN</th>                   
                                    <th class="text-center">Nama Kepala Sekolah</th>
                                    <th class="text-center">Nama Petugas</th>
                                    <th class="text-center">Tahun Pelajaran</th>
                                
                                </thead>
                                <tbody>
                                    @foreach ($list_datacover as $datacover)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <x-button.info-button url="super-admin/data-cover"
                                                        id="{{ $datacover->id }}" />

                                                    <x-button.edit-button url="super-admin/data-cover"
                                                        id="{{ $datacover->id }}" />

                                                    <x-button.delete-button url="super-admin/data-cover"
                                                        id="{{ $datacover->id }}" />
                                                </div>
                                            </td>
                                            <td class="text-center">{{ $datacover->nama_sekolah }}</td>
                                            <td class="text-center">{{ $datacover->nss_npsn }}</td>
                                            
                                           
                                            <td class="text-center">{{ $datacover->nama_kepala_sekolah }}</td>
                                            
                                            <td class="text-center">{{ $datacover->nama_petugas }}</td>
                                          
                                            <td class="text-center">{{ $datacover->tahun_pelajaran }}</td>
                            
                                            
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
