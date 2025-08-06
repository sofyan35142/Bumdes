<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('AdminPage/assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('AdminPage/assets/images/logo-dark.png') }}" alt="" height="20">
            </span>
        </a>

        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('AdminPage/assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('AdminPage/assets/images/logo-light.png') }}" alt="" height="20">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <!-- Dashboard -->
                <li>
                    <a href="{{ route('admin.beranda') }}">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <!-- Profile (dropdown) -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="fas fa-user-circle"></i>
                        <span>Profil</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{ route('admin.visiMisi') }}">Visi & Misi</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.struktur.index') }}">Struktur Organisasi</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.visiMisi') }}">Dasar Hukum</a> {{-- Gantilah jika punya rute khusus --}}
                        </li>
                    </ul>
                </li>

                <!-- Slider -->
                <li>
                    <a href="{{ route('admin.slider') }}">
                        <i class="fas fa-images"></i>
                        <span>Slider</span>
                    </a>
                </li>

                <!-- Statistik -->
                <li>
                    <a href="{{ route('admin.statistik') }}">
                        <i class="fas fa-chart-bar"></i>
                        <span>Statistik Singkat</span>
                    </a>
                </li>

                <!-- Sambutan Direktur -->
                <li>
                    <a href="{{ route('admin.sambutan') }}">
                        <i class="fas fa-comments"></i>
                        <span>Sambutan Direktur</span>
                    </a>
                </li>

                <!-- APDesa -->
                <li>
                    <a href="{{ route('admin.apdes') }}">
                        <i class="fas fa-file-alt"></i>
                        <span>APDesa</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.testimonial.testimonial') }}">
                        <i class="fas fa-comment-dots"></i>
                        <span>Testimoni</span>
                    </a>
                </li>

                <!-- Layanan Unggulan -->
                <li>
                    <a href="{{ route('admin.unggulan') }}">
                        <i class="fas fa-star"></i>
                        <span>Layanan Unggulan</span>
                    </a>
                </li>

                <!-- Kegiatan BumDes -->
                <li>
                    <a href="{{ route('admin.kegiatan') }}">
                        <i class="fas fa-calendar-alt"></i>
                        <span>Kegiatan BumDes</span>
                    </a>
                </li>
            </ul>

        </div>
        <!-- Sidebar -->
    </div>
</div>
