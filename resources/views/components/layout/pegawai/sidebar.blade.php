@php
    function checkRouteActive($route)
    {
        if (Route::current()->uri == $route) {
            return 'active';
        }
    }
@endphp


<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a class="brand-link ">
        <img src="{{ url('public') }}/dist/img/AdminLTELogo.png" class="brand-image rounded-4 center">
        <span class="brand-text font-weight-light text-center">
            <h6>SIBI | MAN 2 KETAPANG</h6>
        </span>
    </a>

    <div class="sidebar">
        <div class="mt-3 pb-3 mb-3 d-flex"></div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-item ">
                    <a href="{{ url('pegawai') }}"
                        class="nav-link {{ checkRouteActive('pegawai') }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard

                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{ url('pegawai/peserta-didik') }}"
                        class="nav-link {{ checkRouteActive('pegawai/peserta-didik') }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Data peserta Didik

                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('pegawai/datacover') }}"
                        class="nav-link {{ checkRouteActive('pegawai/data-cover') }}">
                        <i class="nav-icon fas fa-file"></i>
                        <p>
                            Cover

                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{ url('pegawai/kelas') }}"
                        class="nav-link {{ checkRouteActive('pegawai/kelas') }}">
                        <i class="nav-icon fas fa-university"></i>
                        <p>
                            Kelas
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{ url('pegawai/mapel') }}"
                        class="nav-link {{ checkRouteActive('pegawai/mapel') }}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Mata Pelajaran
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('pegawai/nilai') }}"
                        class="nav-link  {{ checkRouteActive('pegawai/nilai') }}">
                        <i class="nav-icon fa fa-edit"></i>
                        <p>
                            Nilai
                        </p>
                    </a>
                </li>
            </ul>
        </nav>

    </div>

</aside>
