<x-pegawai>

    <div class="container-fluid mt-3">
        <div class="card">
            <div class="content">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <x-button.back-button url="pegawai/nilai" />

                    </div>
                    <h3>Detail Nilai {{ $pesertadidik->nama_lengkap }}</h3>
                </div>
            </div>
            <br>
            <div class="row mb-10">

                <div class="col-md-12">


                    <div class="container-fluid">

                        <div class="row">
                            @foreach ($list_kelas as $kelas)
                                <div class="col-md-4">

                                    <div class="small-box bg-info">
                                        <div class="inner">
                                            <h3>{{ $kelas->kelas }}</h3>

                                            <p>{{ $kelas->semester }}</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-stats-bars"></i>
                                        </div>
                                        <a href="" class="small-box-footer btn btn-info">Tambah Nilai
                                            <i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
</x-pegawai>
