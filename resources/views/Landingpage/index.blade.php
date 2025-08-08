<!DOCTYPE html>
<html lang="en">

<head>
    @include('Landingpage.layout.head')
</head>


<!-- page wrapper -->

<body>

    <div class="boxed_wrapper ltr">


        <!-- preloader -->
        @include('Landingpage.layout.preloader')
        <!-- preloader end -->


        <!-- page-direction -->
        <div class="page_direction">
            <div class="demo-rtl direction_switch"><button class="rtl">RTL</button></div>
            <div class="demo-ltr direction_switch"><button class="ltr">LTR</button></div>
        </div>
        <!-- page-direction end -->


        <!--Search Popup-->
        <div id="search-popup" class="search-popup">
            <div class="popup-inner">
                <div class="upper-box">
                    <!-- Logo -->
                    <figure class="logo-box">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('Landingpage/assets/images/logo.png') }}" alt="Logo">
                        </a>
                    </figure>

                    <!-- Tombol close -->
                    <div class="close-search">
                        <span class="icon-27"></span>
                    </div>
                </div>

                <!-- Layer transparan -->
                <div class="overlay-layer"></div>

                <!-- Form pencarian -->
                <div class="auto-container">
                    <div class="search-form">
                        <form method="POST" action="{{ url('/') }}">
                            @csrf
                            <div class="form-group">
                                <fieldset>
                                    <input type="search" class="form-control" name="search-input" value=""
                                        placeholder="Type your keyword and hit" required>
                                    <button type="submit">
                                        <i class="icon-1"></i>
                                    </button>
                                </fieldset>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



        <!-- main header -->
        @include('Landingpage.layout.header')

        <!-- main-header end -->


        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>

            <!-- Tombol Close -->
            <div class="close-btn">
                <i class="fas fa-times"></i>
            </div>

            <nav class="menu-box">
                <!-- Logo -->
                <div class="nav-logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('Landingpage/assets/images/logo-2.png') }}" alt="Logo" title="">
                    </a>
                </div>

                <!-- Menu yang akan di-load dari JavaScript -->
                <div class="menu-outer">
                    <!-- Here Menu Will Come Automatically Via Javascript / Same Menu as in Header -->
                </div>

                <!-- Kontak -->
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Chicago 12, Melborne City, USA</li>
                        <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                    </ul>
                </div>

                <!-- Media Sosial -->
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div>

        <!-- End Mobile Menu -->


        <!-- banner-section -->
        <section class="banner-style-four p_relative">
            <div class="banner-carousel owl-theme owl-carousel owl-nav-none dots-style-one">

                <!-- Slide 1 -->
                <div class="slide-item p_relative">
                    <div class="bg-layer"
                        style="background-image: url('{{ asset('Landingpage/assets/images/banner/banner-2.jpg') }}');">
                    </div>
                    <div class="shape-box">
                        <div class="shape-1"></div>
                        <div class="shape-2"></div>
                    </div>
                    <div class="auto-container">
                        <div class="content-box">
                            <span class="upper-text">Tentang BumDes</span>
                            <h2>Bangun Masa Depan Desa Lebih Baik <span>Bersama BUMDes</span></h2>
                            <p>Pemberdayaan ekonomi lokal dimulai dari desa. BUMDes hadir untuk mengelola potensi,
                                membuka lapangan kerja, dan membangun kemandirian masyarakat secara berkelanjutan.</p>
                            <div class="btn-box">
                                <a href="{{ url('index-4') }}" class="theme-btn banner-btn mr_20">Lihat Program Kami</a>
                                <a href="{{ url('index-4') }}" class="theme-btn banner-btn-two"><span>Dukung Usaha
                                        Warga</span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="slide-item p_relative">
                    <div class="bg-layer"
                        style="background-image: url('{{ asset('Landingpage/assets/images/banner/banner-5.jpg') }}');">
                    </div>
                    <div class="shape-box">
                        <div class="shape-1"></div>
                        <div class="shape-2"></div>
                    </div>
                    <div class="auto-container">
                        <div class="content-box">
                            <span class="upper-text">Top Agency</span>
                            <h2>Dukung Produk Lokal & UMKM Desa <span>Bersama BUMDes</span></h2>
                            <p>BUMDes mendorong pertumbuhan ekonomi desa melalui pengembangan UMKM, pemasaran produk
                                lokal, dan kolaborasi dengan masyarakat untuk meningkatkan kesejahteraan.</p>
                            <div class="btn-box">
                                <a href="{{ url('index-4') }}" class="theme-btn banner-btn mr_20">Lihat Produk
                                    Unggulan</a>
                                <a href="{{ url('index-4') }}" class="theme-btn banner-btn-two"><span>Gabung Mitra
                                        UMKM</span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="slide-item p_relative">
                    <div class="bg-layer"
                        style="background-image: url('{{ asset('Landingpage/assets/images/banner/banner-6.jpg') }}');">
                    </div>
                    <div class="shape-box">
                        <div class="shape-1"></div>
                        <div class="shape-2"></div>
                    </div>
                    <div class="auto-container">
                        <div class="content-box">
                            <span class="upper-text">Top Agency</span>
                            <h2>Wujudkan Desa Cerdas Melalui<span>Inovasi dan Kolaborasi</span></h2>
                            <p>Dengan semangat kolaborasi dan digitalisasi, BUMDes menjadi jembatan inovasi dan solusi
                                bagi masyarakat desa menuju masa depan yang mandiri dan modern.</p>
                            <div class="btn-box">
                                <a href="{{ url('index-4') }}" class="theme-btn banner-btn mr_20">Lihat Layanan
                                    Digital</a>
                                <a href="{{ url('index-4') }}" class="theme-btn banner-btn-two"><span> Bangun
                                        Kemitraan</span></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- banner-section end -->


        <!-- clients-section -->
        {{-- @foreach ($mediaPartner as $MediaPartner) --}}
        <section class="clients-section pt_110 centred">
            <div class="auto-container">
                <div class="title-text pb_60 sec-title-animation animation-style2">
                    {{-- <span class="sub-title mb_10 title-animation">Mintra</span> --}}
                    <h3 class="title-animation">Mitra BumDes Pakukerto</h3>
                </div>
                <div class="inner-box">
                    <div class="clients-slider-wrapper">
                        <style>
                            .clients-slider-wrapper {
                                overflow: hidden;
                                width: 100%;
                                position: relative;
                            }

                            .clients-slider {
                                display: flex;
                                align-items: center;
                                gap: 40px;
                                animation: scrollLeft 30s linear infinite;
                            }

                            .clients-box {
                                flex: 0 0 auto;
                                width: 220px;
                                height: 130px;
                                display: flex;
                                flex-direction: column;
                                justify-content: center;
                                align-items: center;
                                background-color: #fff;
                                border-radius: 12px;
                                box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
                                padding: 10px;
                            }

                            .clients-logo img,
                            .overlay-logo img {
                                max-width: 100%;
                                max-height: 100px;
                                object-fit: contain;
                                transition: transform 0.3s ease;
                            }

                            .clients-box:hover img {
                                transform: scale(1.1);
                            }

                            @keyframes scrollLeft {
                                0% {
                                    transform: translateX(0);
                                }

                                100% {
                                    transform: translateX(-50%);
                                }
                            }

                            @media (max-width: 768px) {
                                .clients-box {
                                    width: 160px;
                                    height: 100px;
                                }

                                .clients-logo img,
                                .overlay-logo img {
                                    max-height: 80px;
                                }
                            }
                        </style>

                        <div class="clients-slider">
                            @foreach ($mediaPartner->take(5) as $MediaPartner)
                                <div class="clients-box">
                                    <figure class="clients-logo">
                                        <a href="index.html">
                                            <img src="{{ asset('Media Partner/' . $MediaPartner->Logo_Media) }}"
                                                alt="">
                                        </a>
                                    </figure>
                                    <figure class="overlay-logo">
                                        <a href="index.html">
                                            <img src="{{ asset('Media Partner/' . $MediaPartner->Logo_Media) }}"
                                                alt="">
                                        </a>
                                    </figure>
                                </div>
                            @endforeach

                            {{-- Duplikat isi agar animasi tidak putus --}}
                            @foreach ($mediaPartner->take(5) as $MediaPartner)
                                <div class="clients-box">
                                    <figure class="clients-logo">
                                        <a href="index.html">
                                            <img src="{{ asset('Media Partner/' . $MediaPartner->Logo_Media) }}"
                                                alt="">
                                        </a>
                                    </figure>
                                    <figure class="overlay-logo">
                                        <a href="index.html">
                                            <img src="{{ asset('Media Partner/' . $MediaPartner->Logo_Media) }}"
                                                alt="">
                                        </a>
                                    </figure>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- @endforeach --}}

        <!-- clients-section end -->


        <!-- about-style-four -->
        <section class="about-style-four pt_120 pb_120">
            <div class="auto-container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="team-block-one wow fadeInUp animated" data-wow-delay="00ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <!-- Gambar utama -->
                                    <figure class="image"
                                        style="width: 300px; height: 300px; border-radius: 50%; overflow: hidden; margin: auto;">
                                        <img src="{{ asset('direktur/' . $data->foto_direktur) }}" alt=""
                                            style="width: 100%; height: 100%; object-fit: cover; display: block;">
                                    </figure>

                                    <!-- Gambar overlay -->
                                    <figure class="overlay-image"
                                        style="width: 300px; height: 300px; border-radius: 50%; overflow: hidden; margin: auto; position: absolute; top: 0; left: 0;">
                                        <img src="{{ asset('direktur/' . $data->foto_direktur) }}" alt=""
                                            style="width: 100%; height: 100%; object-fit: cover; display: block; opacity: 0.5;">
                                    </figure>
                                </div>

                                <div class="lower-content">
                                    <center>
                                        <h3><a href="index.html">{{ $data->Nama_Direktur }}</a></h3>
                                    </center>
                                    <center><span class="designation">Direktur Bumdes</span></center>
                                </div>
                            </div>

                            {{-- <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{ asset('direktur/' . $data->foto_direktur) }}"
                                            alt=""></figure>
                                    <figure class="overlay-image"><img
                                            src="{{ asset('direktur/' . $data->foto_direktur) }}" alt="">
                                    </figure>

                                </div>
                                <div class="lower-content">
                                    <center>
                                        <h3><a href="index.html">{{ $data->Nama_Direktur }}</a></h3>
                                    </center>
                                    <center><span class="designation">Direktur Bumdes</span></center>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    {{-- <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_five">
                            <div class="content-box">
                                <div class="sec-title pb_40 sec-title-animation animation-style2">
                                    <span class="sub-title mb_10 title-animation">SAMBUTAN</span>
                                    <h2 class="title-animation">Sambutan Direktur BumDes <span>Pakukerto</span></h2>
                                    <span class="title-animation">
                                        {!! $data->sambutan !!}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_five">
                            <div class="content-box">
                                <div class="sec-title pb_40 sec-title-animation animation-style2"
                                    style="background-color: #f0f0f0; border-radius: 50px; padding: 30px; text-align: center; box-shadow: 0 4px 10px rgba(0,0,0,0.1); overflow: hidden;">

                                    <span class="sub-title mb_10 title-animation">SAMBUTAN</span>
                                    <h2 class="title-animation">Sambutan Direktur BumDes <span>Pakukerto</span></h2>
                                    <span class="title-animation">
                                        {!! $data->sambutan !!}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- about-style-four end -->


        <!-- chooseus-section -->
        <section class="chooseus-section light-section centred pl_100 pr_100">
            <div class="outer-container p_relative pt_120 pb_90">
                <div class="shape">
                    <div class="shape-1"></div>
                    <div class="shape-2"></div>
                    <div class="shape-3"></div>
                    <div class="shape-4"></div>
                </div>
                <div class="auto-container">
                    <div class="sec-title light pb_60 sec-title-animation animation-style2">
                        <span class="sub-title mb_10 title-animation">Menagapa Kami</span>
                        <h2 class="title-animation">Kenapa Memilih BumDes Pakukerto ?</h2>
                    </div>
                    <div class="row clearfix">
                        @foreach ($alasan as $item)
                            <div class="col-lg-3 col-md-6 col-sm-12 chooseus-block">
                                <div class="chooseus-block-one">
                                    <div class="inner-box">
                                        <div class="icon-box">
                                            <i class="{{ $item->ikon }}"></i>
                                        </div>
                                        <h3><a href="#">{{ $item->judul }}</a></h3>
                                        <p class="overflow-auto" style="height: 9pc">{{ $item->deskripsi }}</p>
                                        <div class="link"></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <!-- chooseus-section end -->


        <!-- industries-style-four -->
        <section class="industries-style-four pt_120 pb_90">
            <div class="auto-container">
                <div class="sec-title centred pb_60 sec-title-animation animation-style2">
                    <span class="sub-title mb_10 title-animation">Industries</span>
                    <h2 class="title-animation">Bidang Usaha BUMDes Kami</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                        <div class="industries-block-two">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-9"></i></div>
                                <h3><a href="{{ url('/') }}">Unit Perdagangan</a></h3>
                                <p>2853 Staffs</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                        <div class="industries-block-two">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-10"></i></div>
                                <h3><a href="{{ url('/') }}">Air Bersih / PAM Desa</a></h3>
                                <p>2256 Staffs</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                        <div class="industries-block-two">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-11"></i></div>
                                <h3><a href="{{ url('/') }}">Transportasi Desa</a></h3>
                                <p>1408 Staffs</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                        <div class="industries-block-two">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-12"></i></div>
                                <h3><a href="{{ url('/') }}">Pariwisata Desa</a></h3>
                                <p>1740 Staffs</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                        <div class="industries-block-two">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-13"></i></div>
                                <h3><a href="{{ url('/') }}">Peternakan</a></h3>
                                <p>3948 Staffs</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                        <div class="industries-block-two">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-14"></i></div>
                                <h3><a href="{{ url('/') }}">Jasa Servis</a></h3>
                                <p>2984 Staffs</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                        <div class="industries-block-two">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-15"></i></div>
                                <h3><a href="{{ url('/') }}">sewa Aset</a></h3>
                                <p>4509 Staffs</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                        <div class="industries-block-two">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-16"></i></div>
                                <h3><a href="{{ url('/') }}">Pertanian</a></h3>
                                <p>1039 Staffs</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="more-btn centred mt_30">
                    <a href="{{ url('/kategori') }}" class="theme-btn btn-one">View All Categories</a>
                </div>
            </div>
        </section>

        <!-- industries-style-four end -->


        <!-- process-style-two -->
        <section class="process-style-two centred pl_100 pr_100">
            <div class="outer-container p_relative pt_120 pb_120">
                <div class="auto-container">
                    <div class="sec-title pb_60 sec-title-animation animation-style2">
                        <span class="sub-title mb_10 title-animation">Process</span>
                        <h2 class="title-animation">Alur Pendaftaran Layanan / Mitra UMKM / Simpan Pinjam BUMDes</h2>
                        <!-- Perbaikan dari "Fisnish" ke "Finish" -->
                    </div>
                    <div class="inner-container">
                        <div class="shape"
                            style="background-image: url('Landingpage/assets/images/shape/shape-19.png');"></div>

                        <div class="processing-block-two">
                            <div class="inner-box">
                                <h4>01 <span>Step</span></h4>
                                <h3>Isi Formulir Pengajuan</h3>
                                <p>Lengkapi formulir pendaftaran yang tersedia secara online maupun offline.</p>
                            </div>
                        </div>
                        <div class="processing-block-two">
                            <div class="inner-box">
                                <h4>02 <span>Step</span></h4>
                                <h3>Lengkapi Dokumen</h3> <!-- Perbaikan dari "Desire" ke "Desired" -->
                                <p>Kirimkan dokumen yang dibutuhkan seperti KTP, KK, dan surat pengajuan usaha.</p>
                            </div>
                        </div>

                        <div class="processing-block-two">
                            <div class="inner-box">
                                <h4>03 <span>Step</span></h4>
                                <h3>Verifikasi & Aktivasi</h3>
                                <p>Tim BUMDes akan memverifikasi dan mengaktifkan layanan Anda.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- process-style-two -->


        <!-- service-section -->
        <section class="service-section centred pt_120 pb_90">
            <div class="auto-container">
                <div class="sec-title pb_60 sec-title-animation animation-style2">
                    <span class="sub-title mb_10 title-animation">Layanan BumDes Pakukerto</span>
                    <h2 class="title-animation">Layanan Unggulan Kami</h2>
                </div>

                <div class="row clearfix">
                    @foreach ($unggulan as $item)
                        <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                            <div class="service-block-one wow fadeInUp animated" data-wow-delay="00ms"
                                data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image">
                                            <a href="#">
                                                <img src="{{ asset('foto layanan unggulan/' . $item->foto_layanan) }}"
                                                    alt="">
                                            </a>
                                        </figure>
                                        <figure class="overlay-image">
                                            <a href="#">
                                                <img src="{{ asset('foto layanan unggulan/' . $item->foto_layanan) }}"
                                                    alt="">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="lower-content">
                                        <h3><a href="#">{{ $item->nama_layanan }}</a></h3>
                                        <p
                                            style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; line-height: 1.5em; max-height: 4.5em; text-overflow: ellipsis;">
                                            {{ $item->deskripsi }}
                                            style="
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    line-height: 1.5em;
    max-height: 4.5em;
    text-overflow: ellipsis;
">
                                            {!! $item->deskripsi !!}
                                        </p>
                                        <div class="btn-box">
                                            <a href="#" class="theme-btn btn-one">View Details</a>
                                            <a href="/detailunggulan/{{ $item->id }}"
                                                class="theme-btn btn-one">View
                                                Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- service-section end -->


        <!-- funfact-section -->
        <section class="funfact-section alternat-2 centred pb_90">
            <div class="auto-container">
                <div class="row clearfix">

                    <!-- Freelance Workers -->
                    <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                        <div class="funfact-block-one">
                            <div class="inner-box">
                                <div class="count-outer">
                                    <span class="odometer" data-count="12">00</span><span class="symble">k</span>
                                </div>
                                <p>Warga Terlibat Aktif</p>
                            </div>
                        </div>
                    </div>

                    <!-- Jobs Fulfillment Rate -->
                    <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                        <div class="funfact-block-one">
                            <div class="inner-box">
                                <div class="count-outer">
                                    <span class="odometer" data-count="95">00</span><span class="symble">%</span>
                                </div>
                                <p>Tingkat Kepuasan Mitra</p>
                            </div>
                        </div>
                    </div>

                    <!-- Jobs Filled -->
                    <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                        <div class="funfact-block-one">
                            <div class="inner-box">
                                <div class="count-outer">
                                    <span class="odometer" data-count="12">00</span><span class="symble">k+</span>
                                </div>
                                <p>Unit Usaha Aktif</p>
                            </div>
                        </div>
                    </div>

                    <!-- Satisfied Businesses -->
                    <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                        <div class="funfact-block-one">
                            <div class="inner-box">
                                <div class="count-outer">
                                    <span class="odometer" data-count="825">00</span><span class="symble">+</span>
                                </div>
                                <p> Produk Desa Terjual</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- funfact-section end -->


        <!-- dueal-section -->
        <section class="dueal-section alternat-3 p_relative pl_100 pr_100">
            <div class="outer-container p_relative pt_120 pb_120">
                <div class="bg-color"></div>
                <div class="shape">
                    <div class="shape-1"></div>
                    <div class="shape-2"></div>
                    <div class="shape-3"></div>
                    <div class="shape-4"></div>
                </div>
                <div class="auto-container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div class="content_block_three">
                                <div class="content-box mr_100">
                                    <div class="sec-title pb_30 sec-title-animation animation-style2">
                                        <span class="sub-title mb_10 title-animation">General Faqs</span>
                                        <h2 class="title-animation">Frequently Asked Questions</h2>
                                    </div>
                                    <ul class="accordion-box">
                                        <li class="accordion block active-block">
                                            <div class="acc-btn active">
                                                <div class="icon-box"><i class="icon-21"></i></div>
                                                <h4>Bagaimana cara mendaftar sebagai mitra BUMDes?</h4>
                                            </div>
                                            <div class="acc-content current">
                                                <div class="content">
                                                    <p>Untuk mendaftar sebagai mitra, silakan kunjungi kantor BUMDes
                                                        atau isi formulir pendaftaran online yang tersedia di website
                                                        kami. Tim kami akan menghubungi Anda untuk verifikasi lebih
                                                        lanjut.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="accordion block">
                                            <div class="acc-btn">
                                                <div class="icon-box"><i class="icon-21"></i></div>
                                                <h4>Apa saja layanan yang ditawarkan oleh BUMDes?</h4>
                                            </div>
                                            <div class="acc-content">
                                                <div class="content">
                                                    <p>Kami menyediakan berbagai layanan seperti:</p>
                                                    <ul>
                                                        <li>Penyewaan alat pertanian</li>
                                                        <li>Simpan pinjam</li>
                                                        <li>Penjualan hasil pertanian</li>
                                                        <li>Warung BUMDes</li>
                                                        <li>Layanan logistik desa</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="accordion block">
                                            <div class="acc-btn">
                                                <div class="icon-box"><i class="icon-21"></i></div>
                                                <h4>Siapa saja yang bisa memanfaatkan layanan BUMDes?</h4>
                                            </div>
                                            <div class="acc-content">
                                                <div class="content">
                                                    <p>Seluruh warga desa dapat menggunakan layanan BUMDes, termasuk
                                                        UMKM lokal, petani, dan pemuda desa yang ingin mengembangkan
                                                        usaha.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="accordion block">
                                            <div class="acc-btn">
                                                <div class="icon-box"><i class="icon-21"></i></div>
                                                <h4>Apakah ada biaya untuk menggunakan layanan BUMDes?</h4>
                                            </div>
                                            <div class="acc-content">
                                                <div class="content">
                                                    <p>Sebagian layanan kami bersifat gratis, namun untuk layanan khusus
                                                        seperti penyewaan alat atau pinjaman modal, akan dikenakan biaya
                                                        operasional yang transparan dan terjangkau.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div class="testimonial-content ml_130">
                                <div
                                    class="single-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one owl-loaded owl-drag">
                                    <div class="testimonial-block-three">
                                        <div class="inner-box">
                                            <div class="icon-box"><i class="icon-36"></i></div>
                                            <h2>“BUMDes membantu saya menyewa alat pertanian dengan harga murah. Panen
                                                tahun ini lebih cepat dan hasilnya meningkat!”</h2>
                                            <figure class="signature mb_30">
                                                <img src="http://127.0.0.1:8000/Landingpage/assets/images/icons/signature-1.png"
                                                    alt="">
                                            </figure>
                                            <div class="author-box">
                                                <figure class="author-thumb">
                                                    <img src="http://127.0.0.1:8000/Landingpage/assets/images/resource/testimonial-4.png"
                                                        alt="">
                                                </figure>
                                                <h3>Pak Darto</h3>
                                                <span class="designation">Petani Desa</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-block-three">
                                        <div class="inner-box">
                                            <div class="icon-box"><i class="icon-36"></i></div>
                                            <h2>“Layanan logistik dari BUMDes sangat membantu pengiriman produk lokal ke
                                                luar desa. Saya tidak perlu bingung cari ekspedisi lagi.”</h2>
                                            <figure class="signature mb_30">
                                                <img src="http://127.0.0.1:8000/Landingpage/assets/images/icons/signature-1.png"
                                                    alt="">
                                            </figure>
                                            <div class="author-box">
                                                <figure class="author-thumb">
                                                    <img src="http://127.0.0.1:8000/Landingpage/assets/images/resource/testimonial-4.png"
                                                        alt="">
                                                </figure>
                                                <h3>Ravlindo</h3>
                                                <span class="designation">Pelaku UMKM</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-block-three">
                                        <div class="inner-box">
                                            <div class="icon-box"><i class="icon-36"></i></div>
                                            <h2>“Sejak bergabung sebagai mitra BUMDes, usaha kecil saya jadi lebih
                                                dikenal dan berkembang. Saya juga terbantu dengan pinjaman modal tanpa
                                                bunga tinggi.”</h2>
                                            <figure class="signature mb_30">
                                                <img src="http://127.0.0.1:8000/Landingpage/assets/images/icons/signature-1.png"
                                                    alt="">
                                            </figure>
                                            <div class="author-box">
                                                <figure class="author-thumb">
                                                    <img src="http://127.0.0.1:8000/Landingpage/assets/images/resource/testimonial-4.png"
                                                        alt="">
                                                </figure>
                                                <h3>Ibu Sari</h3>
                                                <span class="designation">Pemilik Usaha Keripik Singkong</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-nav">
                                    <button type="button" role="presentation" class="owl-prev"><span
                                            class="icon-34"></span></button>
                                    <button type="button" role="presentation" class="owl-next"><span
                                            class="icon-35"></span></button>
                                </div>
                                <div class="owl-dots">
                                    <button role="button" class="owl-dot"><span></span></button>
                                    <button role="button" class="owl-dot"><span></span></button>
                                    <button role="button" class="owl-dot active"><span></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- dueal-section end -->


        <!-- team-section -->
        <section class="team-section centred pt_120 pb_70">
            <div class="auto-container">
                <div class="sec-title pb_60 sec-title-animation animation-style2">
                    <span class="sub-title mb_10 title-animation">BumDes Pakukerto</span>
                    <h2 class="title-animation">Struktur Organisasi BUMDes</h2>
                </div>
                <div class="row clearfix">
                    @foreach ($team as $index => $member)
                        <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                            <div class="team-block-one wow fadeInUp animated" data-wow-delay="{{ $index * 200 }}ms"
                                data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image">
                                            <img src="{{ asset($member->foto) }}"
                                                alt="">
                                        </figure>
                                        <figure class="overlay-image">
                                            <img src="{{ asset($member->foto) }}"
                                                alt="">
                                        </figure>
                                    </div>
                                    <div class="lower-content">
                                        <h3><a href="#">{{ $member->nama }}</a></h3>
                                        <span class="designation">{{ $member->jabatan }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- team-section end -->


        <!-- download-section -->
        <section class="download-section alternat-3">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="pattern-layer"
                        style="background-image: url('{{ asset('landingpage/assets/images/shape/shape-20.png') }}');">
                    </div>
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                            <div class="content-box">
                                @php
                                    $judul = explode(' ', $book->judul, 2);
                                @endphp
                                <h2>{{ $judul[0] }}
                                    @if (isset($judul[1]))
                                        <span>{{ $judul[1] }}</span>
                                    @endif
                                </h2>
                                <ul class="list-item mb_30">
                                    {!! $book->points !!}
                                </ul>
                                <a type="button" href="{{ asset($book->file_ebook) }}" download
                                    class="theme-btn btn-one">Download E-book</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 image-column">
                            <div class="image-box">
                                <figure class="image">
                                    <img src="{{ asset($book->gambar) }}" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- download-section end -->


        <!-- news-section -->
        <section class="news-section pt_120 pb_90">
            <div class="auto-container">
                <div class="sec-title centred pb_60 sec-title-animation animation-style2">
                    <span class="sub-title mb_10 title-animation">Media</span>
                    <h2 class="title-animation">Kegiatan BumDes Pakukerto</h2>
                </div>
                <div class="row clearfix">
                    <!-- News Block 1 -->
                    @foreach ($kegiatan as $kegiatan)
                        <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                            <div class="news-block-two wow fadeInUp animated" data-wow-delay="00ms"
                                data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image">
                                            <a href="{{ route('blogdetail', $kegiatan->id) }}">
                                                <img src="{{ asset('foto kegiatan BumDes/' . $kegiatan->foto_kegiatan) }}"
                                                    alt="">
                                            </a>
                                        </figure>
                                        <figure class="overlay-image">
                                            <a href="{{ route('blogdetail', $kegiatan->id) }}">
                                                <img src="{{ asset('foto kegiatan BumDes/' . $kegiatan->foto_kegiatan) }}"
                                                    alt="">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="lower-content">
                                        <span class="category">{{ $kegiatan->kategori->nama_kategori ?? '-' }}</span>
                                        <h3><a
                                                href="{{ route('blogdetail', $kegiatan->id) }}">{{ $kegiatan->Judul_Kegiatan }}</a>
                                        </h3>
                                        <ul class="post-info">
                                            <li>By <a href="{{ route('blogdetail', $kegiatan->id) }}">Sekertaris
                                                    BumDes</a></li>
                                            <li><span>{{ $kegiatan->tanggal_kegiatan }}</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                    <!-- News Block 2 -->
                    {{-- <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-two wow fadeInUp animated" data-wow-delay="00ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        <a href="blog-details.html">
                                            <img src="{{ asset('landingpage/assets/images/news/news-5.jpg') }}"
                                                alt="">
                                        </a>
                                    </figure>
                                    <figure class="overlay-image">
                                        <a href="blog-details.html">
                                            <img src="{{ asset('landingpage/assets/images/news/news-5.jpg') }}"
                                                alt="">
                                        </a>
                                    </figure>
                                </div>
                                <div class="lower-content">
                                    <span class="category">Analytics</span>
                                    <h3><a href="index-2.html">Explore the concept of personal branding and its impact
                                            on</a></h3>
                                    <ul class="post-info">
                                        <li>By <a href="blog-details.html">Alex Beniwal</a></li>
                                        <li><span>March 19, 2023</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    <!-- News Block 3 -->
                    {{-- <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-two wow fadeInUp animated" data-wow-delay="00ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        <a href="blog-details.html">
                                            <img src="{{ asset('landingpage/assets/images/news/news-6.jpg') }}"
                                                alt="">
                                        </a>
                                    </figure>
                                    <figure class="overlay-image">
                                        <a href="blog-details.html">
                                            <img src="{{ asset('landingpage/assets/images/news/news-6.jpg') }}"
                                                alt="">
                                        </a>
                                    </figure>
                                </div>
                                <div class="lower-content">
                                    <span class="category">Business</span>
                                    <h3><a href="index-2.html">Feature interviews with employees from top companies</a>
                                    </h3>
                                    <ul class="post-info">
                                        <li>By <a href="blog-details.html">Alex Beniwal</a></li>
                                        <li><span>March 18, 2023</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>

        <!-- news-section end -->

        <!-- main-footer -->
        @include('Landingpage.layout.footer')
        <!-- main-footer end -->



        <!--Scroll to top-->
        <div class="scroll-to-top">
            <svg class="scroll-top-inner" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>

    </div>
    <!-- main-footer -->
    @include('Landingpage.layout.scripts')
    <!-- main-footer end -->

</body><!-- End of .page_wrapper -->

</html>
