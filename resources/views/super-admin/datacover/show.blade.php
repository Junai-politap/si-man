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
                <div class="book">
                    <div class="page">
                        <div class="subpage">
                            <p>Page 1/1</p>

                            Masukan properti dkatanya disini
                        </div>
                    </div>

                    <div class="page">
                        <div class="subpage">Page 2/2</div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app>
