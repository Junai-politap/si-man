<x-app>

<div class="container-fluid mt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header" data-pages="parallax">
                <div class="card-body">
                     <div class="inner" style="transform: translateY(0px); opacity: 1;">
                         <h2>DATA MATA PELAJARAN</h2>
                     </div>
                </div>   
             </div>
            <div class="card mt-3">
                <div class="card-body">
                    <a href="{{url('super-admin/mapel/create')}}" class="btn btn-outline-success"><i class="fa fa-plus"></i> Tambah Mapel</a> <hr>
                    <div class="table-responsive">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead class="thead-default">
                                <th class="text-center">No</th>
                                <th class="text-center">Aksi</th>
                                <th class="text-center">Mata Pelajaran</th>
                                <th class="text-center">Kelas</th>
                                <th class="text-center">Semester</th>
                               
                            </thead>
                            <tbody>
                                @foreach ($list_mapel  as $mapel)
                                    
                                
                                    <tr>
                                        <td class="text-center" width="50">{{$loop->iteration}}</td>
                                        <td class="text-center" width="250">
                                            <div class="btn-group">
                                                {{-- <x-button.info-button url="super-admin/mapel"
                                                    id="{{ $mapel->id }}" /> --}}

                                                <x-button.edit-button url="super-admin/mapel"
                                                    id="{{ $mapel->id }}" />

                                                <x-button.delete-button url="super-admin/mapel"
                                                    id="{{ $mapel->id }}" />
                                            </div>
                                        </td>
                                        <td class="text-center">{{$mapel->mapel}}</td>
                                        <td class="text-center">{{$mapel->kelas->kelas}}</td>
                                        <td class="text-center">{{$mapel->kelas->semester}}</td>
                                       
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