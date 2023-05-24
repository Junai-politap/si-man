<x-app>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <x-button.back-button url="super-admin/data-cover" />
                <div class="card mt-3">
                    <div class="card-header">
                        <div class="card-title">
                            DETAIL COVER


                        </div>
                        <a href="{{ url('super-admin/data-cover', $datacover->id) }}/cetak_pdf" target="_blank"
                            class="btn btn-success float-right"> Cetak</a>
                    </div>

                    <div class="card-body">

                        <!doctype html>
                        <html lang="en">

                        <head>
                            <meta charset="utf-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1">
                            <title>Bootstrap demo</title>




                            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
                                rel="stylesheet"
                                integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
                                crossorigin="anonymous">
                            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.css"
                                rel="stylesheet"
                                integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
                                crossorigin="anonymous">
                            <link rel="stylesheet" href="style.css">
                        </head>

                        <body>

                            <br>
                            <br>
                            <br>
                            <br>
                            <div class="text-center">
                                <img src="https://www.freepnglogos.com/uploads/tut-wuri-handayani-png-logo/vector-wuri-handayani-warna-0.png"
                                    class="rounded" width="250px">
                            </div>

                            <BR></BR>
                            <div class="text-center">
                                <h1>BUKU INDUK PESERTA DIDIK</h1>
                                <h2>SEKOLAH MENENGAH ATAS</h2>
                                <h1>( SMA )</h1>
                            </div>

                            <BR>
                            <div class="text-center">
                                <H3>KURIKULUM TINGKAT SATUAN PENDIDIKAN</H3>
                                <H3><B>KURIKULUM 13</B></H3>
                                <H4><B>TAHUN PELAJARAN {{ $datacover->tahun_pelajaran }}</B></H4>
                            </div>

                            <BR></BR>
                            <table class="table table-borderless">
                                <tbody class="float-md-start">
                                    <tr>
                                        <td>NAMA SEKOLAH</td>
                                        <td>:</td>
                                        <td>{{ $datacover->nama_sekolah }}</td>
                                    </tr>
                                    <tr>
                                        <td>NSS/NPSN</td>
                                        <td>:</td>
                                        <td>{{ $datacover->nss_npsn }}</td>
                                    </tr>
                                    <tr>
                                        <td>ALAMAT SEKOLAH</td>
                                        <td>:</td>
                                        <td>{{ $datacover->alamat_sekolah }}</td>
                                    </tr>
                                    <tr>
                                        <td>DESA/KELURAHAN</td>
                                        <td>:</td>
                                        <td>{{ $datacover->desa_kelurahan }}</td>
                                    </tr>
                                    <tr>
                                        <td>KECAMATAN</td>
                                        <td>:</td>
                                        <td>{{ $datacover->kecamatan }}</td>
                                    </tr>
                                    <tr>
                                        <td>KABUPATEN/KOTA</td>
                                        <td>:</td>
                                        <td>{{ $datacover->kabupaten }}</td>
                                    </tr>
                                    <tr>
                                        <td>PROVINSI</td>
                                        <td>:</td>
                                        <td>{{ $datacover->provinsi }}</td>
                                    </tr>

                                </tbody>
                            </table>

                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
                                integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
                            </script>
                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.js"
                                integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
                            </script>
                        </body>

                        </html>

                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app>
