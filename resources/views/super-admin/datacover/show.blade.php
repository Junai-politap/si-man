<x-app>
    <style>
        * {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
        }

        .page {
            width: 210mm;
            min-height: 297mm;
            padding: 20mm;
            margin: 10mm auto;
            border: 1px #D3D3D3 solid;
            border-radius: 5px;
            background: white;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .subpage {
            padding: 1cm;
            border: 5px red solid;
            height: 257mm;
            outline: 2cm #FFEAEA solid;
        }

        @page {
            size: A4;
            margin: 0;
        }

        @media print {

            html,
            body {
                width: 210mm;
                height: 297mm;
            }

            .page {
                margin: 0;
                border: initial;
                border-radius: initial;
                width: initial;
                min-height: initial;
                box-shadow: initial;
                background: initial;
                page-break-after: always;
            }
        }
    </style>

    <div class="container-fluid mt-2">
        <div class="row">
            
            <div class="col-md-12">
                <x-button.back-button url="super-admin/data-cover" />


                <div class="book">

                    <div class="page">
                        <a href="{{url('super-admin/data-cover', $datacover->id)}}/cetak_pdf" target="_blank" class="btn btn-success float-right"> Cetak</a>


                        <body>

                            <br>
                            <br>
                            <br>
                            <br>
                            <div class="text-center ">
                                <img src="https://www.freepnglogos.com/uploads/tut-wuri-handayani-png-logo/vector-wuri-handayani-warna-0.png"
                                    class="rounded " width="170px">
                            </div>

                            <br>
                            <br>
                            <br>
                            <div class="text-center">
                                <h2>BUKU INDUK PESERTA DIDIK</h2>
                                <h3>SEKOLAH MENENGAH ATAS</h3>
                                <h2>( SMA )</h2>
                            </div>

                            <br>
                            <div class="text-center">
                                <h4>KURIKULUM TINGKAT SATUAN PENDIDIKAN</h4>
                                <h3><B>KURIKULUM 13</B></h3>
                                <h4><B>TAHUN PELAJARAN {{$datacover->tahun_pelajaran}}</B></h4>
                            </div>

                            <br>
                            <table class="table table-borderless" style="margin-left: 200px">
                                <tbody >
                                    <tr>
                                        <td width="50px" style="font-size: 12px;">NAMA SEKOLAH</td>
                                        <td   width="10px" style="font-size: 12px; margin-left:-10px;">:</td>
                                        <td  style="font-size: 12px">MAN 2 KETAPANG</td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 12px">NSS/NPSN</td>
                                        <td style="font-size: 12px">:</td>
                                        <td style="font-size: 12px">1010150619/20233178</td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 12px">ALAMAT SEKOLAH</td>
                                        <td style="font-size: 12px">:</td>
                                        <td style="font-size: 12px">Jl. Rahadi Usman Desa Sungai Besar</td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 12px">DESA/KELURAHAN</td>
                                        <td style="font-size: 12px">:</td>
                                        <td style="font-size: 12px">Sungai Besar</td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 12px">KECAMATAN</td>
                                        <td style="font-size: 12px">:</td>
                                        <td style="font-size: 12px">Matan Hilir Selatan</td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 12px">KABUPATEN/KOTA</td>
                                        <td style="font-size: 12px">:</td>
                                        <td style="font-size: 12px">Ketapang</td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 12px">PROVINSI</td>
                                        <td style="font-size: 12px">:</td>
                                        <td style="font-size: 12px">Kalimantan Barat</td>
                                    </tr>

                                </tbody>
                            </table>
                        </body>


                    </div>

                  

                </div>
            </div>
        </div>
    </div>
</x-app>
