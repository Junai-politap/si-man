<x-app>

    <div class="container-fluid mt-3">
        <div class="card">
            <div class="content">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <x-button.back-button url="super-admin/nilai" />

                    </div>
                    <h3>Detail Nilai {{ $pesertadidik->nama_lengkap }}</h3>
                </div>
            </div>
            <br>
            <div class="row mb-10">

                <div class="col-md-12">


                    <div class="container-fluid">

                        <div class="row">

                            <div class="col-md-4">

                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h3>Kelas X</h3>

                                        <p>Ganjil</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-stats-bars"></i>
                                    </div>

                                    <a href="{{ url('super-admin/nilai', $pesertadidik->id) }}/tambah_nilai10ganjil"
                                        class="small-box-footer btn btn-info">Tambah Nilai
                                        <i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                            <div class="col-md-4">

                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h3>Kelas X</h3>

                                        <p>Genap</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-stats-bars"></i>
                                    </div>

                                    <a href="{{ url('super-admin/nilai', $pesertadidik->id) }}/tambah_nilai10genap"
                                        class="small-box-footer btn btn-info">Tambah Nilai
                                        <i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                            <div class="col-md-4">

                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h3>Kelas XI</h3>

                                        <p>Ganjil</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-stats-bars"></i>
                                    </div>

                                    <a href="{{ url('super-admin/nilai', $pesertadidik->id) }}/tambah_nilai11ganjil"
                                        class="small-box-footer btn btn-info">Tambah Nilai
                                        <i class="fa fa-plus"></i></a>
                                </div>
                            </div>

                        </div>
                        <div class="row">

                            <div class="col-md-4">

                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h3>Kelas XI</h3>

                                        <p>Genap</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-stats-bars"></i>
                                    </div>

                                    <a href="{{ url('super-admin/nilai', $pesertadidik->id) }}/tambah_nilai11genap"
                                        class="small-box-footer btn btn-info">Tambah Nilai
                                        <i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                            <div class="col-md-4">

                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h3>Kelas XII</h3>

                                        <p>Ganjil</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-stats-bars"></i>
                                    </div>

                                    <a href="{{ url('super-admin/nilai', $pesertadidik->id) }}/tambah_nilai12ganjil"
                                        class="small-box-footer btn btn-info">Tambah Nilai
                                        <i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                            <div class="col-md-4">

                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h3>Kelas XII</h3>

                                        <p>Genap</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-stats-bars"></i>
                                    </div>

                                    <a href="{{ url('super-admin/nilai', $pesertadidik->id) }}/tambah_nilai1Qgenap"
                                        class="small-box-footer btn btn-info">Tambah Nilai
                                        <i class="fa fa-plus"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    

</x-app>
