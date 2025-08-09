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
                    <h1>Struktur Organisasi</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Beranda</a></li>
                        <li>-</li>
                        <li>Struktur Organisasi</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- team-section -->
        <section class="team-section centred pt_110 pb_70">
            <div class="pattern-layer"
                style="background-image: url(http://127.0.0.1:8000/Landingpage/assets/images/shape/shape-2.png);">
            </div>
            <div class="auto-container">
                <div class="sec-title pb_60 sec-title-animation animation-style2">
                    <span class="sub-title mb_10 title-animation">Struktur Organisasi</span>
                    <h2 class="title-animation">BUMDes Desa Pakukerto</h2>
                </div>
                <div class="row clearfix">
                    <!-- Anggota Struktur -->
                    @foreach ($data as $item)
                        <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                            <div class="team-block-one wow fadeInUp animated" data-wow-delay="00ms"
                                data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="{{ asset($item->foto) }}" alt="">
                                        </figure>
                                        <figure class="overlay-image"><img src="{{ asset($item->foto) }}"
                                                alt=""></figure>
                                    </div>
                                    <div class="lower-content">
                                        <h3><a href="#">{{ $item->nama }}</a></h3>
                                        <span class="designation">{{ $item->jabatan }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- join-section -->
        <section class="join-section centred pt_120 pb_120">
            <div class="auto-container">
                <div class="content-box">
                    <div class="sec-title pb_20 sec-title-animation animation-style2">
                        <span class="sub-title mb_10 title-animation">BUMDes Desa Pakukerto</span>
                        <h2 class="title-animation">Bersama Membangun Desa, Bersama BUMDes</h2>
                    </div>
                    <div class="text-box">
                        <p>BUMDes adalah motor penggerak ekonomi desa. Bergabunglah bersama kami dalam membangun
                            usaha
                            mandiri dan berkelanjutan untuk kesejahteraan warga.</p>
                        <a href="/contact" class="theme-btn btn-one">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </section>

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
