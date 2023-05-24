<x-pegawai>

<div class="container-fluid mt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header" data-pages="parallax">
                <div class="card-body">
                     <div class="inner" style="transform: translateY(0px); opacity: 1;">
                         <h2>DATA NILAI</h2>
                     </div>
                </div>   
             </div>
            <div class="card mt-3">
                <div class="card-body">
            
                    <div class="table-responsive">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead class="thead-default">
                                <th class="text-center">No</th>
                                <th class="text-center">Aksi</th>
                                <th class="text-center">NIS Peserta Didik</th>
                                <th class="text-center">Nama Peserta Didik</th>
                                
                               
                            </thead>
                            <tbody>
                                @foreach ($list_pesertadidik  as $pesertadidik)
                                    
                                
                                    <tr>
                                        <td class="text-center">{{$loop->iteration}}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <x-button.info-button url="pegawai/nilai" id="{{ $pesertadidik->id }}" />

                                                <x-button.edit-button url="pegawai/nilai" id="{{ $pesertadidik->id }}" />

                                                <x-button.delete-button url="pegawai/nilai" id="{{ $pesertadidik->id }}" />
                                            </div>
                                        </td>
                                        <td class="text-center">{{$pesertadidik->nis}}</td>
                                        <td class="text-center">{{$pesertadidik->nama_lengkap}}</td>
                                       
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


</x-pegawai>