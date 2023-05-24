@php
    function checkRouteActive($route)
    {
        if (Route::current()->uri == $route) {
            return 'active';
        }
    }
@endphp


<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a class="brand-link">
        <img src="{{ url('public') }}/dist/img/AdminLTELogo.png" class="brand-image rounded-4 center">
        <span class="brand-text font-weight-light text-center">
            <h6>SIBI | MAN 2 KETAPANG</h6>
        </span>
    </a>

    <div class="sidebar">
        <div class="mt-3 pb-3 mb-3">
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-item">
                    <a href="{{ url('super-admin') }}"
                        class="nav-link {{ checkRouteActive('super-admin') }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard

                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('super-admin/peserta-didik') }}"
                        class="nav-link {{ checkRouteActive('super-admin/peserta-didik') }}">
                        <i class="nav-icon fa fa-users"></i>
                        <p>
                            Peserta Didik

                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('super-admin/data-cover') }}"
                        class="nav-link {{ checkRouteActive('super-admin/data-cover') }}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Cover

                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('super-admin/register') }}"
                        class="nav-link {{ checkRouteActive('super-admin/register') }}">
                        <i class="nav-icon fa fa-print"></i>
                        <p>
                            Cetak Register

                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{ url('super-admin/kelas') }}"
                        class="nav-link {{ checkRouteActive('super-admin/kelas') }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Kelas
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{ url('super-admin/mapel') }}"
                        class="nav-link {{ checkRouteActive('super-admin/mapel') }}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Mata Pelajaran
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{ url('super-admin/nilai') }}"
                        class="nav-link {{ checkRouteActive('super-admin/nilai') }}">
                        <i class="nav-icon fa fa-pen-square"></i>
                        <p>
                            Nilai
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('super-admin/pegawai') }}" class="nav-link  {{ checkRouteActive('super-admin/pegawai') }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Pegawai

                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('super-admin/admin') }}" class="nav-link {{ checkRouteActive('super-admin/admin') }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Admin

                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('super-admin/super-admin') }}" class="nav-link {{ checkRouteActive('super-admin/super-admin') }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Super Admin

                        </p>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</aside>
