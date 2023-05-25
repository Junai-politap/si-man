<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIBI | MAN 2 KETAPANG</title>
    <link rel="shortcut icon" href="{{ url('public') }}/dist/img/AdminLTELogo.png" type="image/x-icon">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ url('public') }}/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{ url('public') }}/plugins/jsgrid/jsgrid.min.css">
    <link rel="stylesheet" href="{{ url('public') }}/plugins/jsgrid/jsgrid-theme.min.css">
    <link rel="stylesheet" href="{{ url('public') }}/dist/css/adminlte.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ url('public') }}/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet"
        href="{{ url('public') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="{{ url('public') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('public') }}/plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="{{ url('public') }}/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="{{ url('public') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="{{ url('public') }}/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="{{ url('public') }}/plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="{{ url('public') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ url('public') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ url('public') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <x-layout.super-admin.header />
        <x-layout.super-admin.sidebar />

        <div class="content-wrapper">
            <div class="card-header">
                <div class="card-body">
                    <x-utils.notif />
                </div>
            </div>
            <div class="content">
                {{ $slot }}
            </div>
        </div>
        <aside class="control-sidebar control-sidebar-dark">
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <x-layout.super-admin.footer />
    </div>

    <script src="{{ url('public') }}/plugins/jquery/jquery.min.js"></script>
    <script src="{{ url('public') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('public') }}/dist/js/adminlte.min.js"></script>
    <script src="{{ url('public') }}/plugins/jquery/jquery.min.js"></script>
    <script src="{{ url('public') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('public') }}/plugins/jsgrid/demos/db.js"></script>
    <script src="{{ url('public') }}/plugins/jsgrid/jsgrid.min.js"></script>
    <script src="{{ url('public') }}/dist/js/adminlte.min.js"></script>
    <script src="{{ url('public') }}/dist/js/demo.js"></script>
    <script src="{{ url('public') }}/plugins/jquery/jquery.min.js"></script>
    <script src="{{ url('public') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('public') }}/plugins/select2/js/select2.full.min.js"></script>
    <script src="{{ url('public') }}/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
    <script src="{{ url('public') }}/plugins/moment/moment.min.js"></script>
    <script src="{{ url('public') }}/plugins/inputmask/jquery.inputmask.min.js"></script>
    <script src="{{ url('public') }}/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="{{ url('public') }}/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script src="{{ url('public') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="{{ url('public') }}/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <script src="{{ url('public') }}/plugins/bs-stepper/js/bs-stepper.min.js"></script>
    <script src="{{ url('public') }}/plugins/dropzone/min/dropzone.min.js"></script>
    <script src="{{ url('public') }}/dist/js/adminlte.min.js"></script>
    <script src="{{ url('public') }}/dist/js/demo.js"></script>
    <script src="{{ url('public') }}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ url('public') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ url('public') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ url('public') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{ url('public') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ url('public') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ url('public') }}/plugins/jszip/jszip.min.js"></script>
    <script src="{{ url('public') }}/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="{{ url('public') }}/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="{{ url('public') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ url('public') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{{ url('public') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>

</html>
