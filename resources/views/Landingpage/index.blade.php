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
                            <span class="upper-text">Top Agency</span>
                            <h2>Discover Your Next <span>Career Move</span> with JobAway</h2>
                            <p>Implementing a robust employee referral program can be a creative and effective way to
                                recruit at scale.</p>
                            <div class="btn-box">
                                <a href="{{ url('index-4') }}" class="theme-btn banner-btn mr_20">Hire Talents
                                    Now</a>
                                <a href="{{ url('index-4') }}" class="theme-btn banner-btn-two"><span>Find
                                        Works</span></a>
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
                            <h2>Discover Your Next <span>Career Move</span> with JobAway</h2>
                            <p>Implementing a robust employee referral program can be a creative and effective way to
                                recruit at scale.</p>
                            <div class="btn-box">
                                <a href="{{ url('index-4') }}" class="theme-btn banner-btn mr_20">Hire Talents
                                    Now</a>
                                <a href="{{ url('index-4') }}" class="theme-btn banner-btn-two"><span>Find
                                        Works</span></a>
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
                            <h2>Discover Your Next <span>Career Move</span> with JobAway</h2>
                            <p>Implementing a robust employee referral program can be a creative and effective way to
                                recruit at scale.</p>
                            <div class="btn-box">
                                <a href="{{ url('index-4') }}" class="theme-btn banner-btn mr_20">Hire Talents
                                    Now</a>
                                <a href="{{ url('index-4') }}" class="theme-btn banner-btn-two"><span>Find
                                        Works</span></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- banner-section end -->


        <!-- clients-section -->
        <section class="clients-section pt_110 centred">
            <div class="auto-container">
                <div class="title-text pb_60 sec-title-animation animation-style2">
                    <h3 class="title-animation">Mitra BumDes Pakukerto</h3>
                </div>
                <div class="inner-box">
                    <div class="clients-box">
                        <figure class="clients-logo">
                            <a href="index.html">
                                <img src="{{ asset('Landingpage/assets/images/clients/clients-1.png') }}"
                                    alt="">
                            </a>
                        </figure>
                        <figure class="overlay-logo">
                            <a href="index.html">
                                <img src="{{ asset('Landingpage/assets/images/clients/clients-1.png') }}"
                                    alt="">
                            </a>
                        </figure>
                    </div>
                    <div class="clients-box">
                        <figure class="clients-logo">
                            <a href="index.html">
                                <img src="{{ asset('Landingpage/assets/images/clients/clients-2.png') }}"
                                    alt="">
                            </a>
                        </figure>
                        <figure class="overlay-logo">
                            <a href="index.html">
                                <img src="{{ asset('Landingpage/assets/images/clients/clients-2.png') }}"
                                    alt="">
                            </a>
                        </figure>
                    </div>
                    <div class="clients-box">
                        <figure class="clients-logo">
                            <a href="index.html">
                                <img src="{{ asset('Landingpage/assets/images/clients/clients-3.png') }}"
                                    alt="">
                            </a>
                        </figure>
                        <figure class="overlay-logo">
                            <a href="index.html">
                                <img src="{{ asset('Landingpage/assets/images/clients/clients-3.png') }}"
                                    alt="">
                            </a>
                        </figure>
                    </div>
                    <div class="clients-box">
                        <figure class="clients-logo">
                            <a href="index.html">
                                <img src="{{ asset('Landingpage/assets/images/clients/clients-4.png') }}"
                                    alt="">
                            </a>
                        </figure>
                        <figure class="overlay-logo">
                            <a href="index.html">
                                <img src="{{ asset('Landingpage/assets/images/clients/clients-4.png') }}"
                                    alt="">
                            </a>
                        </figure>
                    </div>
                    <div class="clients-box">
                        <figure class="clients-logo">
                            <a href="index.html">
                                <img src="{{ asset('Landingpage/assets/images/clients/clients-5.png') }}"
                                    alt="">
                            </a>
                        </figure>
                        <figure class="overlay-logo">
                            <a href="index.html">
                                <img src="{{ asset('Landingpage/assets/images/clients/clients-5.png') }}"
                                    alt="">
                            </a>
                        </figure>
                    </div>
                </div>
            </div>
        </section>

        <!-- clients-section end -->


        <!-- about-style-four -->
        <section class="about-style-four pt_120 pb_120">
            <div class="auto-container">
                <div class="row align-items-center">
                    {{-- <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_two">
                            <div class="image-inner">
                                <div class="image-box mr_15">
                                    <figure class="image image-1 mb_15">
                                        <img src="{{ asset('Landingpage/assets/images/resource/about-3.jpg') }}"
                                            alt="">
                                    </figure>
                                    <figure class="image image-2">
                                        <img src="{{ asset('Landingpage/assets/images/resource/about-4.jpg') }}"
                                            alt="">
                                    </figure>
                                </div>
                                <div class="image-box">
                                    <figure class="image image-3 mb_15">
                                        <img src="{{ asset('Landingpage/assets/images/resource/about-5.jpg') }}"
                                            alt="">
                                    </figure>
                                    <figure class="image image-4">
                                        <img src="{{ asset('Landingpage/assets/images/resource/about-6.jpg') }}"
                                            alt="">
                                    </figure>
                                </div>
                                <div class="support-box">
                                    <div class="icon-box"><i class="icon-28"></i></div>
                                    <span>Online Support</span>
                                    <h4><a href="tel:912556889">+912 (556) 889</a></h4>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="team-block-one wow fadeInUp animated" data-wow-delay="00ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img
                                            src="{{ asset('LandingPage/assets/images/team/team-1.jpg') }}"
                                            alt=""></figure>
                                    <figure class="overlay-image"><img
                                            src="{{ asset('LandingPage/assets/images/team/team-1.jpg') }}"
                                            alt=""></figure>
                                </div>
                                <div class="lower-content">
                                    <center>
                                        <h3><a href="index.html">Yudi</a></h3>
                                    </center>
                                    <center><span class="designation">Direktur Bumdes</span></center>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_five">
                            <div class="content-box">
                                <div class="sec-title pb_40 sec-title-animation animation-style2">
                                    <span class="sub-title mb_10 title-animation">SAMBUTAN</span>
                                    <h2 class="title-animation">Sambutan Direktur BumDes <span>Pakukerto</span></h2>
                                    <p class="title-animation">Assalamu’alaikum warahmatullahi wabarakatuh.

                                        Puji syukur kita panjatkan ke hadirat Allah SWT, karena atas limpahan rahmat dan
                                        karunia-Nya, Badan Usaha Milik Desa (BUMDes) ini dapat terus tumbuh dan
                                        berkembang dalam rangka meningkatkan kesejahteraan masyarakat desa.

                                        BUMDes hadir sebagai wadah bagi masyarakat desa untuk mengelola potensi lokal
                                        secara mandiri, profesional, dan berkelanjutan. Kami percaya bahwa kemandirian
                                        ekonomi desa adalah pondasi utama menuju desa yang kuat dan berdaya saing.

                                        Dengan dukungan dari pemerintah desa, masyarakat, serta seluruh mitra dan
                                        stakeholder, kami berkomitmen untuk terus berinovasi, membuka lapangan kerja,
                                        dan menciptakan peluang usaha baru yang bermanfaat langsung bagi warga desa.

                                        Akhir kata, kami mengajak seluruh elemen masyarakat untuk bersama-sama mendukung
                                        dan mengembangkan BUMDes demi tercapainya kemajuan dan kemandirian desa yang
                                        kita cintai.

                                        Wassalamu’alaikum warahmatullahi wabarakatuh.

                                        [Nama Direktur]
                                        Direktur BUMDes [Nama Desa]</p>
                                </div>
                                {{-- <div class="inner-box clearfix">
                                    <div class="single-item">
                                        <div class="icon-box"><i class="icon-29"></i></div>
                                        <h4><a href="job-details.html">Easiest Admin</a></h4>
                                        <span>Fall 2023</span>
                                    </div>
                                    <div class="single-item">
                                        <div class="icon-box"><i class="icon-30"></i></div>
                                        <h4><a href="job-details.html">Users love Us</a></h4>
                                        <span>Winter 2023</span>
                                    </div>
                                    <div class="single-item">
                                        <div class="icon-box"><i class="icon-31"></i></div>
                                        <h4><a href="job-details.html">Leader</a></h4>
                                        <span>Winter 2023</span>
                                    </div>
                                    <div class="single-item">
                                        <div class="icon-box"><i class="icon-32"></i></div>
                                        <h4><a href="job-details.html">Best support</a></h4>
                                        <span>Winter 2023</span>
                                    </div>
                                </div> --}}
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
                        <span class="sub-title mb_10 title-animation">Why Us</span>
                        <h2 class="title-animation">Kenapa Memilih BumDes Pakukerto ?</h2>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 chooseus-block">
                            <div class="chooseus-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-4"></i></div>
                                    <h3><a href="{{ asset('index.html') }}">Mendukung UMKM Desa</a></h3>
                                    <p>Kami membantu pertumbuhan UMKM lokal melalui pelatihan dan dukungan akses
                                        pemasaran.</p>
                                    <div class="link"><a href="{{ asset('index.html') }}">Learn More<i
                                                class="icon-7"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 chooseus-block">
                            <div class="chooseus-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-5"></i></div>
                                    <h3><a href="{{ asset('index.html') }}"> Legal & Terpercaya</a></h3>
                                    <p>BUMDes beroperasi secara resmi dan sah berdasarkan landasan hukum yang kuat,
                                        serta berada di bawah pengawasan pemerintah desa.
                                    </p>
                                    <div class="link"><a href="{{ asset('index.html') }}">Learn More<i
                                                class="icon-7"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 chooseus-block">
                            <div class="chooseus-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-6"></i></div>
                                    <h3><a href="{{ asset('index.html') }}">Memberdayakan Warga</a></h3>
                                    <p>Kami menyediakan pelatihan dan lapangan kerja untuk meningkatkan taraf hidup
                                        warga.</p>
                                    <div class="link"><a href="{{ asset('index.html') }}">Learn More<i
                                                class="icon-7"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 chooseus-block">
                            <div class="chooseus-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-33"></i></div>
                                    <h3><a href="{{ asset('index.html') }}">Layanan Ramah & Terjangkau</a></h3>
                                    <p>Pelayanan kami mudah diakses dan dapat dinikmati oleh seluruh lapisan masyarakat
                                        desa.</p>
                                    <div class="link"><a href="{{ asset('index.html') }}">Learn More<i
                                                class="icon-7"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                    <span class="sub-title mb_10 title-animation">What We Provide</span>
                    <h2 class="title-animation">Layanan Unggulan Kami</h2>
                </div>
                <div class="row clearfix">

                    <!-- Service Block 1 -->
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="00ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        <a href="service-details-2.html">
                                            <img src="{{ asset('Landingpage/assets/images/service/service-1.jpg') }}"
                                                alt="">
                                        </a>
                                    </figure>
                                    <figure class="overlay-image">
                                        <a href="service-details-2.html">
                                            <img src="{{ asset('Landingpage/assets/images/service/service-1.jpg') }}"
                                                alt="">
                                        </a>
                                    </figure>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="service-details-2.html">Pelatihan UMKM</a></h3>
                                    <p>Kami mengadakan pelatihan keterampilan untuk pelaku UMKM desa agar bisa naik
                                        kelas secara digital maupun produksi.</p>
                                    <div class="btn-box">
                                        <a href="service-details-2.html" class="theme-btn btn-one">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block 2 -->
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="300ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        <a href="service-details.html">
                                            <img src="{{ asset('Landingpage/assets/images/service/service-2.jpg') }}"
                                                alt="">
                                        </a>
                                    </figure>
                                    <figure class="overlay-image">
                                        <a href="service-details.html">
                                            <img src="{{ asset('Landingpage/assets/images/service/service-2.jpg') }}"
                                                alt="">
                                        </a>
                                    </figure>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="service-details.html">Pemasaran Produk Desa</a></h3>
                                    <p>Membantu warga desa menjual produk unggulan (kerajinan, pertanian, kuliner) ke
                                        pasar yang lebih luas.</p>
                                    <div class="btn-box">
                                        <a href="service-details.html" class="theme-btn btn-one">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block 3 -->
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="600ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        <a href="service-details-6.html">
                                            <img src="{{ asset('Landingpage/assets/images/service/service-3.jpg') }}"
                                                alt="">
                                        </a>
                                    </figure>
                                    <figure class="overlay-image">
                                        <a href="service-details-6.html">
                                            <img src="{{ asset('Landingpage/assets/images/service/service-3.jpg') }}"
                                                alt="">
                                        </a>
                                    </figure>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="service-details-6.html">Layanan Simpan Pinjam</a></h3>
                                    <p>Melayani pinjaman usaha mikro dan simpanan warga dengan proses yang cepat dan
                                        aman.</p>
                                    <div class="btn-box">
                                        <a href="service-details-6.html" class="theme-btn btn-one">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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
                    <span class="sub-title mb_10 title-animation">Our Team</span>
                    <h2 class="title-animation">Meet The Team</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated" data-wow-delay="00ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        <img src="{{ asset('landingpage/assets/images/team/team-1.jpg') }}"
                                            alt="">
                                    </figure>
                                    <figure class="overlay-image">
                                        <img src="{{ asset('landingpage/assets/images/team/team-1.jpg') }}"
                                            alt="">
                                    </figure>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="#">Tom Oliver</a></h3>
                                    <span class="designation">Founder</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated" data-wow-delay="200ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        <img src="{{ asset('landingpage/assets/images/team/team-2.jpg') }}"
                                            alt="">
                                    </figure>
                                    <figure class="overlay-image">
                                        <img src="{{ asset('landingpage/assets/images/team/team-2.jpg') }}"
                                            alt="">
                                    </figure>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="#">Loenard Barnes</a></h3>
                                    <span class="designation">Lead Engineer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated" data-wow-delay="400ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        <img src="{{ asset('landingpage/assets/images/team/team-3.jpg') }}"
                                            alt="">
                                    </figure>
                                    <figure class="overlay-image">
                                        <img src="{{ asset('landingpage/assets/images/team/team-3.jpg') }}"
                                            alt="">
                                    </figure>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="#">Gilbert Sherman</a></h3>
                                    <span class="designation">Sales Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated" data-wow-delay="600ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        <img src="{{ asset('landingpage/assets/images/team/team-4.jpg') }}"
                                            alt="">
                                    </figure>
                                    <figure class="overlay-image">
                                        <img src="{{ asset('landingpage/assets/images/team/team-4.jpg') }}"
                                            alt="">
                                    </figure>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="#">Franklin Bailey</a></h3>
                                    <span class="designation">Art Director</span>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                <h2>Panduan <span>BUMDes</span> 2025 untuk Usaha Desa Berkelanjutan</h2>
                                <ul class="list-item mb_30">
                                    <li>Pelajari langkah-langkah membangun dan mengelola unit usaha desa.</li>
                                    <li> Dapatkan tips pengelolaan keuangan dan laporan transparan.</li>
                                    <li>Strategi pemasaran dan kolaborasi UMKM lokal.</li>
                                </ul>
                                <button type="button" class="theme-btn btn-one">Download E-book</button>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 image-column">
                            <div class="image-box">
                                <figure class="image">
                                    <img src="{{ asset('landingpage/assets/images/resource/book-2.png') }}"
                                        alt="">
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
                    <h2 class="title-animation">Latest News</h2>
                </div>
                <div class="row clearfix">
                    <!-- News Block 1 -->
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-two wow fadeInUp animated" data-wow-delay="00ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        <a href="blog-details.html">
                                            <img src="{{ asset('landingpage/assets/images/news/news-4.jpg') }}"
                                                alt="">
                                        </a>
                                    </figure>
                                    <figure class="overlay-image">
                                        <a href="blog-details.html">
                                            <img src="{{ asset('landingpage/assets/images/news/news-4.jpg') }}"
                                                alt="">
                                        </a>
                                    </figure>
                                </div>
                                <div class="lower-content">
                                    <span class="category">Business</span>
                                    <h3><a href="index-2.html">Create a series of blog posts discussing common
                                            interview</a></h3>
                                    <ul class="post-info">
                                        <li>By <a href="blog-details.html">Alex Beniwal</a></li>
                                        <li><span>March 20, 2023</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- News Block 2 -->
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
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
                    </div>

                    <!-- News Block 3 -->
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
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
                    </div>
                </div>
            </div>
        </section>

        <!-- news-section end -->


        <!-- subscribe-style-two -->
        <section class="subscribe-style-two">
            <div class="bg-color-2"></div>
            <div class="auto-container">
                <div class="inner-container">
                    <div class="shape-box">
                        <div class="shape-1"
                            style="background-image: url('{{ asset('Landingpage/assets/images/shape/shape-8.png') }}');">
                        </div>
                        <div class="shape-2"
                            style="background-image: url('{{ asset('Landingpage/assets/images/shape/shape-9.png') }}');">
                        </div>
                    </div>
                    <div class="text-box">
                        <h2>Subscribe for <span>latest update</span></h2>
                    </div>
                    <div class="form-inner">
                        <form method="post" action="https://jobaway.pixcelsthemes.com/contact.html">
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Email Address" required>
                                <button type="submit" class="theme-btn btn-one">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- subscribe-style-two end -->


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

<!-- Mirrored from jobaway.pixcelsthemes.com/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Jul 2025 14:03:02 GMT -->

</html>
