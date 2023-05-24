<x-app>

<div class="container-fluid mt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header" data-pages="parallax">
                <div class="card-body">
                     <div class="inner" style="transform: translateY(0px); opacity: 1;">
                         <h2>DATA ADMIN</h2>
                     </div>
                </div>   
             </div>
            <div class="card mt-3">
                <div class="card-body">
                    <a href="{{url('super-admin/admin/create')}}" class="btn btn-outline-success"><i class="fa fa-plus"></i> Tambah Admin</a> <hr>
                    <div class="table-responsive">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead class="thead-default">
                                <th class="text-center">No</th>
                                <th class="text-center">Aksi</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Username</th>
                                <th class="text-center">email</th>
                               
                            </thead>
                            <tbody>
                                @foreach ($list_admin  as $admin)
                                    
                                
                                    <tr>
                                        <td class="text-center">{{$loop->iteration}}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <x-button.info-button url="super-admin/admin"
                                                    id="{{ $admin->id }}" />

                                                <x-button.edit-button url="super-admin/admin"
                                                    id="{{ $admin->id }}" />

                                                <x-button.delete-button url="super-admin/admin"
                                                    id="{{ $admin->id }}" />
                                            </div>
                                        </td>
                                        <td class="text-center">{{$admin->nama}}</td>
                                        <td class="text-center">{{$admin->username}}</td>
                                        <td class="text-center">{{$admin->email}}</td>
                                        
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