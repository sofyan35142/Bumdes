<div class="vertical-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="{{ route('admin.beranda') }}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('AdminPage/assets/images/logo-bumdes.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('AdminPage/assets/images/logo-bumdes.png') }}" alt="" height="20">
            </span>
        </a>

        <a href="{{ route('admin.beranda') }}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('AdminPage/assets/images/logo-bumdes.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('AdminPage/assets/images/logo-bumdes.png') }}" alt="" height="20">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">
        <div id="sidebar-menu">
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <!-- Dashboard -->
                <li>
                    <a href="{{ route('admin.beranda') }}">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <!-- Profil -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="fas fa-user-circle"></i>
                        <span>Profil</span>
                        <i class="fas fa-angle-down" style="float:right;"></i>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.visiMisi') }}"><i class="fas fa-bullseye"></i> Visi & Misi</a></li>
                        <li><a href="{{ route('admin.struktur.index') }}"><i class="fas fa-sitemap"></i> Struktur
                                Organisasi</a></li>
                        <li><a href="{{ route('admin.dasarhukum') }}"><i class="fas fa-gavel"></i> Dasar Hukum</a></li>
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

                <!-- Testimoni -->
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

                <!-- Kategori & Kegiatan BumDes -->
                <li class="mm-active">
                    <a href="javascript: void(0);" class="has-arrow" aria-expanded="true">
                        <i class="fas fa-calendar-alt"></i>
                        <span>BumDes</span>
                        <i class="fas fa-angle-down" style="float:right;"></i>
                    </a>
                    <ul class="sub-menu mm-collapse mm-show" aria-expanded="false">
                        <li>
                            <a href="http://127.0.0.1:8000/admin/kategori">
                                <i class="fas fa-list"></i> Kategori
                            </a>
                        </li>
                        <li>
                            <a href="http://127.0.0.1:8000/admin/kegiatan">
                                <i class="fas fa-tasks"></i> Kegiatan
                            </a>
                        </li>
                    </ul>
                </li>


                <!-- Media Partner -->
                <li>
                    <a href="{{ route('admin.mediapartner') }}">
                        <i class="fas fa-handshake"></i>
                        <span>Media Partner</span>
                    </a>
                </li>

                <!-- Panduan BUMDes -->
                <li>
                    <a href="{{ route('admin.bookPanduan.index') }}">
                        <i class="fas fa-book"></i>
                        <span>Panduan BUMDes</span>
                    </a>
                </li>

                <!-- Layanan -->
                <li>
                    <a href="{{ route('admin.layanan.index') }}">
                        <i class="fas fa-cogs"></i>
                        <span>Layanan</span>
                    </a>
                </li>

                <!-- Contact -->
                <li>
                    <a href="{{ route('admin.contact.index') }}">
                        <i class="fas fa-envelope"></i>
                        <span>Kontak</span>
                    </a>
                </li>

                <!-- Kenapa BUMDes -->
                <li>
                    <a href="{{ route('admin.alasan.index') }}">
                        <i class="fas fa-question-circle"></i>
                        <span>Kenapa BUMDes</span>
                    </a>
                </li>

                <!-- Lowongan Pekerjaan -->
                <li>
                    <a href="{{ route('admin.lowongan') }}">
                        <i class="fas fa-briefcase"></i>
                        <span>Lowongan Pekerjaan</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
