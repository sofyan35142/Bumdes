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
        @include('Landingpage.layout.search')


        <!-- main header -->
        @include('Landingpage.layout.header')
        <!-- main-header end -->


        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img
                            src="http://127.0.0.1:8000/LandingPage/assets/images/logo-2.png" alt=""
                            title=""></a></div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Chicago 12, Melborne City, USA</li>
                        <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End Mobile Menu -->


        <!-- page-title -->
        <section class="page-title centred pt_110">
            <div class="auto-container">
                <div class="content-box">
                    <h1>Dasar Hukum BUMDes</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Beranda</a></li>
                        <li>-</li>
                        <li>Profil</li>
                        <li>-</li>
                        <li>Dasar Hukum</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- testimonial-page-section -->
        <section class="testimonial-page-section pt_110 pb_120">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_three">
                            <div class="content-box">
                                <div class="sec-title pb_30 sec-title-animation animation-style2">
                                    <span class="sub-title mb_10 title-animation">Regulasi & Perundang-undangan</span>
                                    <h2 class="title-animation">Dasar Hukum Pembentukan BUMDes</h2>
                                </div>
                                <ul class="accordion-box">
                                    <li class="accordion block active-block">
                                        <div class="acc-btn active">
                                            <div class="icon-box"><i class="icon-21"></i></div>
                                            <h4>Undang-Undang Nomor 6 Tahun 2014 tentang Desa</h4>
                                        </div>
                                        <div class="acc-content current">
                                            <div class="content">
                                                <p>UU ini mengatur tentang pemerintahan desa dan memberikan dasar hukum
                                                    pembentukan dan pengelolaan BUMDes sebagai lembaga ekonomi desa.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <div class="icon-box"><i class="icon-21"></i></div>
                                            <h4>Peraturan Pemerintah Nomor 11 Tahun 2021</h4>
                                        </div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <p>PP ini merupakan turunan dari UU Desa yang memperjelas peran dan
                                                    kewenangan BUMDes dalam pembangunan dan pemberdayaan masyarakat
                                                    desa.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <div class="icon-box"><i class="icon-21"></i></div>
                                            <h4>Permendesa PDTT Nomor 3 Tahun 2021</h4>
                                        </div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <p>Mengatur prosedur pendirian, pengelolaan, dan pengembangan BUMDes
                                                    termasuk pelaporan keuangan dan pengawasan.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <div class="icon-box"><i class="icon-21"></i></div>
                                            <h4>Peraturan Menteri Dalam Negeri Nomor 1 Tahun 2017</h4>
                                        </div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <p>Memberikan petunjuk teknis mengenai tata cara pengelolaan aset desa
                                                    yang dapat digunakan BUMDes dalam operasionalnya.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image-box ml_70">
                            <figure class="image image-hov-one"><img
                                    src="http://127.0.0.1:8000/LandingPage/assets/images/resource/faq-1.jpg"
                                    alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-page-section end -->


        <!-- download-section -->
        <section class="download-section alternat-3 pb_120">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-20.png);"></div>
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                            <div class="content-box">
                                <h2>Sertifikat Badan Hukum <span>BUM Desa Mandiri Sejahtera Pakukerto</span></h2>
                                <ul class="list-item mb_30">
                                    <li>Nomor Sertifikat: AHU-01511.AH.01.33.TAHUN 2025</li>
                                    <li>Tanggal Diterbitkan: 06 Maret 2025</li>
                                    <li>Kedudukan: Desa Pakukerto, Kecamatan Sukorejo, Kabupaten
                                        Pasuruan, Provinsi Jawa Timur</li>
                                    <li>Status: Telah terdaftar sebagai badan hukum yang tercatat dalam
                                        pangkalan data Direktorat Jenderal Administrasi Hukum Umum</li>
                                </ul>
                                <button type="button" class="theme-btn btn-one">Unduh Sertifikat</button>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 image-column">
                            <div class="image-box">
                                <figure class="image">
                                    <img src="http://127.0.0.1:8000/LandingPage/assets/images/resource/book-2.png"
                                        alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- download-section end -->



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


    <!-- javascripts -->
    @include('Landingpage.layout.scripts')

</body>

</html>
