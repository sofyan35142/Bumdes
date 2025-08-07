        <header class="main-header header-style-four">
            <!-- header-lower -->
            <div class="header-lower">
                <div class="auto-container">
                    <div class="outer-box">
                        <figure class="logo-box">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('LandingPage/assets/images/logo.png') }}" alt="Logo">
                            </a>
                        </figure>

                        <div class="menu-area">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>

                            <nav class="main-menu navbar-expand-md navbar-light clearfix">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        {{-- <li class="current dropdown"><a href="{{ url('/') }}">Home</a>
                                            <ul>
                                                <li><a href="{{ url('/') }}">Home One</a></li>
                                                <li><a href="{{ url('index-2') }}">Home Two</a></li>
                                                <li><a href="{{ url('index-3') }}">Home Three</a></li>
                                                <li><a href="{{ url('index-4') }}">Home Four</a></li>
                                                <li><a href="{{ url('index-5') }}">Home Five</a></li>
                                            </ul>
                                        </li> --}}
                                        <li><a href="{{ url('/') }}">Home</a></li>
                                        <li class="dropdown"><a href="{{ url('  ') }}">Profile</a>
                                            <ul>
                                                <li><a href="{{ route('profile.tentangBumdes') }}">Tentang BUMDes</a></li>
                                                <li><a href="{{ route('profile.visiMisi') }}">Visi & Misi</a></li>
                                                <li><a href="{{ route('profile.strukturorganisasi') }}">Struktur Organisasi</a></li>
                                                <li><a href="{{ route('profile.dasarhukum') }}">Dasar Hukum</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="{{ url('  ') }}">Layanan Kami</a>
                                            <ul>
                                                <li><a href="{{ url('#') }}">Toko Desa (Unit Perdagangan)</a></li>
                                                <li><a href="{{ url('#') }}">Pertanian & Peternakan</a></li>
                                                <li><a href="{{ url('#') }}">Penyewaan Aset Desa</a></li>
                                                <li><a href="{{ url('#') }}">Pariwisata Desa</a></li>
                                                <li><a href="{{ url('#') }}">Air Bersih / PAM Desa</a></li>
                                                {{-- <li><a href="{{ url('service-details-5') }}">Workforce System</a></li>
                                                <li><a href="{{ url('service-details-6') }}">Temporary Jobs</a></li> --}}
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Pages</a>
                                            <ul>
                                                {{-- <li class="dropdown"><a href="#">Job</a>
                                                    <ul>
                                                        <li><a href="{{ url('job') }}">Place Job</a></li>
                                                        <li><a href="{{ url('job-2') }}">Job Seekers</a></li>
                                                        <li><a href="{{ url('job-3') }}">Job Openings</a></li>
                                                        <li><a href="{{ url('job-4') }}">Job Apply</a></li>
                                                        <li><a href="{{ url('job-details') }}">Job Details</a></li>
                                                    </ul>
                                                </li> --}}
                                                {{-- <li class="dropdown"><a href="#">Portfolio</a>
                                                    <ul>
                                                        <li><a href="{{ url('portfolio') }}">Portfolio 3 column</a>
                                                        </li>
                                                        <li><a href="{{ url('portfolio-2') }}">Portfolio 2 column</a>
                                                        </li>
                                                        <li><a href="{{ url('portfolio-3') }}">Portfolio Masonry</a>
                                                        </li>
                                                    </ul>
                                                </li> --}}
                                                <li><a href="{{ url('/pages/galeri') }}">Galeri Foto & Video</a></li>
                                                <li><a href="{{ url('/pages/lowongan') }}">Lowongan Pekerjaan</a></li>
                                                <li><a href="{{ url('/apdes') }}">Laporan Keuangan</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Blog</a>
                                            <ul>
                                                <li><a href="{{ url('/blog') }}">Blog List</a></li>
                                                {{-- <li><a href="{{ url('blog-2') }}">Blog Standard</a></li> --}}
                                                <li><a href="{{ url('/blogdetail') }}">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>

                        <div class="menu-right-content">
                            <div class="search-btn mr_20">
                                <button class="search-toggler"><i class="icon-1"></i></button>
                            </div>
                            <div class="link-box mr_20">
                                <a href="{{ url('login') }}">Log In</a>
                            </div>
                            <div class="btn-box">
                                <a href="{{ url('/') }}" class="theme-btn btn-one">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sticky Header -->
            <div class="sticky-header">
                <div class="outer-container">
                    <div class="outer-box">
                        <figure class="logo-box">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('LandingPage/assets/images/logo.png') }}" alt="Logo">
                            </a>
                        </figure>
                        <div class="menu-area">
                            <nav class="main-menu clearfix">
                                <!-- Menu akan di-generate oleh JS -->
                            </nav>
                        </div>
                        <div class="menu-right-content">
                            <div class="search-btn mr_20">
                                <button class="search-toggler"><i class="icon-1"></i></button>
                            </div>
                            <div class="link-box mr_20">
                                <a href="{{ url('login') }}">Log In</a>
                            </div>
                            <div class="btn-box">
                                <a href="{{ url('/') }}" class="theme-btn btn-one">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
