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
                                    @foreach ($data->points as $point)
                                        <li class="accordion block {{ $loop->first ? 'active-block' : '' }}">
                                            <div class="acc-btn {{ $loop->first ? 'active' : '' }}">
                                                <div class="icon-box"><i class="icon-21"></i></div>
                                                <h4>{{ $point['title'] }}</h4>
                                            </div>
                                            <div class="acc-content {{ $loop->first ? 'current' : '' }}">
                                                <div class="content">
                                                    <p>{{ $point['body'] }}</p>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image-box ml_70">
                            <figure class="image image-hov-one">
                                <img src="{{ asset($data->gambar_samping) }}" alt="Dasar Hukum">
                            </figure>
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
                                @php
                                    $kata = explode(' ', $data->judul);
                                    $dua_kata_pertama = implode(' ', array_slice($kata, 0, 2));
                                    $sisanya = implode(' ', array_slice($kata, 2));
                                @endphp

                                <h2>
                                    {{ $dua_kata_pertama }}
                                    @if ($sisanya)
                                        <span>{{ $sisanya }}</span>
                                    @endif
                                </h2>
                                <ul class="list-item mb_30">
                                    {!! $data->sertifikat_list !!}
                                </ul>
                                <a type="button" href="{{ asset($data->sertifikat_file) }}" download
                                    class="theme-btn btn-one">Download Sertifikat</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 image-column">
                            <div class="image-box">
                                <figure class="image">
                                    <img src="{{ asset($data->gambar_buku) }}" alt="">
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
