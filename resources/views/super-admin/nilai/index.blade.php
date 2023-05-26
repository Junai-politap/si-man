<x-app>

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
                                <th class="text-center">NIS Peserta Didik</th>
                                <th class="text-center">Nama Peserta Didik</th>
                                <th class="text-center">Aksi</th>
                                
                               
                            </thead>
                            <tbody>
                                @foreach ($list_pesertadidik  as $pesertadidik)
                                    
                                
                                    <tr>
                                        <td class="text-center">{{$loop->iteration}}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="{{ url("super-admin/nilai/$pesertadidik->id") }}" class="btn btn-primary"><span class="fa fa-plus"></span> Tambah Nilai</a>

                                               <a href="{{ url("super-admin/nilai/$pesertadidik->id") }}/detail" class="btn btn-info"><span class="fa fa-info"></span> Lihat</a>

                                                <x-button.edit-button url="super-admin/nilai"
                                                    id="{{ $pesertadidik->id }}" />

                                                <x-button.delete-button url="super-admin/nilai"
                                                    id="{{ $pesertadidik->id }}" />
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

</x-app>