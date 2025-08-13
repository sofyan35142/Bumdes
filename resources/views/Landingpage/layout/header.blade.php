<!-- main header -->
<header class="main-header header-style-three">
    <div class="header-lower">
        <div class="auto-container">
            <div class="outer-box">
                <figure class="logo-box">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('LandingPage/assets/images/bumdes.png') }}" alt="">
                    </a>
                </figure>
                <div class="menu-area">
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light clearfix">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="dropdown">
                                    <a href="#">Profile</a>
                                    <ul>
                                        <li><a href="{{ route('profile.tentangBumdes') }}">Tentang BUMDes</a></li>
                                        <li><a href="{{ route('profile.visiMisi') }}">Visi & Misi</a></li>
                                        <li><a href="{{ route('profile.strukturorganisasi') }}">Struktur Organisasi</a></li>
                                        <li><a href="{{ route('profile.dasarhukum') }}">Dasar Hukum</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('landingpage.layanan') }}">Layanan Kami</a></li>
                                <li class="dropdown">
                                    <a href="#">Pages</a>
                                    <ul>
                                        <li><a href="{{ route('pages.galeri') }}">Galeri Foto & Video</a></li>
                                        <li><a href="{{ route('pages.lowongan') }}">Lowongan Pekerjaan</a></li>
                                        <li><a href="{{ route('apdes') }}">Laporan Keuangan</a></li>
                                        <li><a href="{{ route('FormTestimonial') }}">Form Testimoni</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('blog') }}">Kegiatan</a></li>
                                <li><a href="{{ route('landingpage.contact') }}">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="dummy-box"></div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="outer-container">
            <div class="outer-box">
                <figure class="logo-box">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('LandingPage/assets/images/bumdes.png') }}" alt="">
                    </a>
                </figure>
                <div class="menu-area">
                    <nav class="main-menu clearfix"></nav>
                </div>
                <div class="dummy-box"></div>
            </div>
        </div>
    </div>
</header>
<!-- main-header end -->
