<!DOCTYPE html>
<html lang="en">

<head>
    @include('Landingpage.layout.head')
</head>


<!-- page wrapper -->

<body>

    <div class="boxed_wrapper ltr">


        <!-- preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <!-- Tombol untuk menutup loader -->
                <div class="preloader-close">
                    <i class="icon-27"></i> <!-- pastikan ikon ini tersedia dalam CSS -->
                </div>

                <!-- Isi animasi preloader -->
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <!-- Spinner default -->
                        <div class="spinner">
                            <!-- Jika kamu ingin pakai gambar spinner, bisa ganti dengan ini:
                    <img src="{{ asset('Landingpage/assets/images/spinner.gif') }}" alt="Loading..."> -->
                        </div>

                        <!-- Teks animasi loading -->
                        <div class="txt-loading">
                            <span data-text-preloader="b" class="letters-loading">b</span>
                            <span data-text-preloader="u" class="letters-loading">u</span>
                            <span data-text-preloader="m" class="letters-loading">m</span>
                            <span data-text-preloader="d" class="letters-loading">d</span>
                            <span data-text-preloader="e" class="letters-loading">e</span>
                            <span data-text-preloader="s" class="letters-loading">s</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
        <header class="main-header header-style-four">
            <!-- header-lower -->
            <div class="header-lower">
                <div class="auto-container">
                    <div class="outer-box">
                        <figure class="logo-box">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('Landingpage/assets/images/logo.png') }}" alt="Logo">
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
                                        <li class="current dropdown"><a href="{{ url('/') }}">Home</a>
                                            <ul>
                                                <li><a href="{{ url('/') }}">Home One</a></li>
                                                <li><a href="{{ url('index-2') }}">Home Two</a></li>
                                                <li><a href="{{ url('index-3') }}">Home Three</a></li>
                                                <li><a href="{{ url('index-4') }}">Home Four</a></li>
                                                <li><a href="{{ url('index-5') }}">Home Five</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ url('about') }}">About</a></li>
                                        <li class="dropdown"><a href="{{ url('service') }}">Solutions</a>
                                            <ul>
                                                <li><a href="{{ url('service') }}">Our Solutions</a></li>
                                                <li><a href="{{ url('service-details') }}">Executive Search</a></li>
                                                <li><a href="{{ url('service-details-2') }}">Training Session</a></li>
                                                <li><a href="{{ url('service-details-3') }}">Career Growth</a></li>
                                                <li><a href="{{ url('service-details-4') }}">Payroll Services</a></li>
                                                <li><a href="{{ url('service-details-5') }}">Workforce System</a></li>
                                                <li><a href="{{ url('service-details-6') }}">Temporary Jobs</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Pages</a>
                                            <ul>
                                                <li class="dropdown"><a href="#">Job</a>
                                                    <ul>
                                                        <li><a href="{{ url('job') }}">Place Job</a></li>
                                                        <li><a href="{{ url('job-2') }}">Job Seekers</a></li>
                                                        <li><a href="{{ url('job-3') }}">Job Openings</a></li>
                                                        <li><a href="{{ url('job-4') }}">Job Apply</a></li>
                                                        <li><a href="{{ url('job-details') }}">Job Details</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown"><a href="#">Portfolio</a>
                                                    <ul>
                                                        <li><a href="{{ url('portfolio') }}">Portfolio 3 column</a>
                                                        </li>
                                                        <li><a href="{{ url('portfolio-2') }}">Portfolio 2 column</a>
                                                        </li>
                                                        <li><a href="{{ url('portfolio-3') }}">Portfolio Masonry</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="{{ url('team') }}">Our Team</a></li>
                                                <li><a href="{{ url('faq') }}">FAQ's</a></li>
                                                <li><a href="{{ url('testimonial') }}">Testimonials</a></li>
                                                <li><a href="{{ url('login') }}">Login</a></li>
                                                <li><a href="{{ url('signup') }}">Sign Up</a></li>
                                                <li><a href="{{ url('error') }}">404</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Blog</a>
                                            <ul>
                                                <li><a href="{{ url('blog') }}">Blog Grid</a></li>
                                                <li><a href="{{ url('blog-2') }}">Blog Standard</a></li>
                                                <li><a href="{{ url('blog-details') }}">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ url('contact') }}">Contact</a></li>
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
                                <img src="{{ asset('Landingpage/assets/images/logo.png') }}" alt="Logo">
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
                        <img src="{{ asset('Landingpage/assets/images/logo-2.png') }}" alt="Logo"
                            title="">
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
                    <h3 class="title-animation">Trusted by the next-gen industry leaders</h3>
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
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
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
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_five">
                            <div class="content-box">
                                <div class="sec-title pb_40 sec-title-animation animation-style2">
                                    <span class="sub-title mb_10 title-animation">About us</span>
                                    <h2 class="title-animation">The most loved <span>Agency</span></h2>
                                    <p class="title-animation">Voted the fastest solution to implement the easiest to
                                        administer your employee & business.</p>
                                </div>
                                <div class="inner-box clearfix">
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
                        <span class="sub-title mb_10 title-animation">Why Us</span>
                        <h2 class="title-animation">Why Choose Us</h2>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 chooseus-block">
                            <div class="chooseus-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-4"></i></div>
                                    <h3><a href="{{ asset('index.html') }}">Retain Top Talent</a></h3>
                                    <p>Providing clear career paths and growth opportunities is key to retaining top
                                        talent.</p>
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
                                    <h3><a href="{{ asset('index.html') }}">Stay Compliant</a></h3>
                                    <p>Educate employees about compliance requirements through regular training</p>
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
                                    <h3><a href="{{ asset('index.html') }}">Improve Employee</a></h3>
                                    <p>Invest in employee training and development programs to enhance skills and
                                        knowledge.</p>
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
                                    <h3><a href="{{ asset('index.html') }}">Great Support</a></h3>
                                    <p>We invest in the best to support your productivity and success.</p>
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
                    <h2 class="title-animation">Industries Served</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                        <div class="industries-block-two">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-9"></i></div>
                                <h3><a href="{{ url('/') }}">Hotel</a></h3>
                                <p>2853 Staffs</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                        <div class="industries-block-two">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-10"></i></div>
                                <h3><a href="{{ url('/') }}">Hospitality</a></h3>
                                <p>2256 Staffs</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                        <div class="industries-block-two">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-11"></i></div>
                                <h3><a href="{{ url('/') }}">Kitchen</a></h3>
                                <p>1408 Staffs</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                        <div class="industries-block-two">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-12"></i></div>
                                <h3><a href="{{ url('/') }}">Retail</a></h3>
                                <p>1740 Staffs</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                        <div class="industries-block-two">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-13"></i></div>
                                <h3><a href="{{ url('/') }}">Events</a></h3>
                                <p>3948 Staffs</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                        <div class="industries-block-two">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-14"></i></div>
                                <h3><a href="{{ url('/') }}">Labor</a></h3>
                                <p>2984 Staffs</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                        <div class="industries-block-two">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-15"></i></div>
                                <h3><a href="{{ url('/') }}">Driving</a></h3>
                                <p>4509 Staffs</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                        <div class="industries-block-two">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-16"></i></div>
                                <h3><a href="{{ url('/') }}">Caretaker</a></h3>
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
                        <h2 class="title-animation">Easy Steps to Finish</h2>
                        <!-- Perbaikan dari "Fisnish" ke "Finish" -->
                    </div>
                    <div class="inner-container">
                        <div class="shape" style="background-image: url('assets/images/shape/shape-19.png');"></div>

                        <div class="processing-block-two">
                            <div class="inner-box">
                                <h4>01 <span>Step</span></h4>
                                <h3>Fill In The <br />Required Form</h3>
                                <p>Filling in our application form is the gateway.</p>
                            </div>
                        </div>

                        <div class="processing-block-two">
                            <div class="inner-box">
                                <h4>02 <span>Step</span></h4>
                                <h3>Submit All <br />Your Documents</h3>
                                <p>Submitting all required documents promptly.</p>
                            </div>
                        </div>

                        <div class="processing-block-two">
                            <div class="inner-box">
                                <h4>03 <span>Step</span></h4>
                                <h3>Get Your <br />Desired Account</h3> <!-- Perbaikan dari "Desire" ke "Desired" -->
                                <p>Succeed in the competitive world with your account.</p>
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
                    <h2 class="title-animation">Inspiring Staffing Solutions</h2>
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
                                            <img src="{{ asset('assets/images/service/service-1.jpg') }}"
                                                alt="">
                                        </a>
                                    </figure>
                                    <figure class="overlay-image">
                                        <a href="service-details-2.html">
                                            <img src="{{ asset('assets/images/service/service-1.jpg') }}"
                                                alt="">
                                        </a>
                                    </figure>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="service-details-2.html">Training Session</a></h3>
                                    <p>These experts guide new employees through interactive workshops.</p>
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
                                            <img src="{{ asset('assets/images/service/service-2.jpg') }}"
                                                alt="">
                                        </a>
                                    </figure>
                                    <figure class="overlay-image">
                                        <a href="service-details.html">
                                            <img src="{{ asset('assets/images/service/service-2.jpg') }}"
                                                alt="">
                                        </a>
                                    </figure>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="service-details.html">Executive Search</a></h3>
                                    <p>Our executive search services are customized to meet your specific needs.</p>
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
                                            <img src="{{ asset('assets/images/service/service-3.jpg') }}"
                                                alt="">
                                        </a>
                                    </figure>
                                    <figure class="overlay-image">
                                        <a href="service-details-6.html">
                                            <img src="{{ asset('assets/images/service/service-3.jpg') }}"
                                                alt="">
                                        </a>
                                    </figure>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="service-details-6.html">Temporary Jobs</a></h3>
                                    <p>Apply for our temporary jobs and become part of our talent pool.</p>
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
                                <p>Freelance Workers</p>
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
                                <p>Jobs Fulfillment Rate</p>
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
                                <p>Jobs Filled</p>
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
                                <p>Satisfied Businesses</p>
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
                                                <h4>How Can I Prepare for an Interview?</h4>
                                            </div>
                                            <div class="acc-content current">
                                                <div class="content">
                                                    <p>To prepare for an interview, research the company, understand the
                                                        job role and responsibilities, and prepare questions to ask the
                                                        interviewer.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="accordion block">
                                            <div class="acc-btn">
                                                <div class="icon-box"><i class="icon-21"></i></div>
                                                <h4>Hiring Managers and Candidates?</h4>
                                            </div>
                                            <div class="acc-content">
                                                <div class="content">
                                                    <p>Hiring managers evaluate candidates based on their skills,
                                                        experience, and cultural fit with the company.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="accordion block">
                                            <div class="acc-btn">
                                                <div class="icon-box"><i class="icon-21"></i></div>
                                                <h4>Clarifying Recruitment Concepts?</h4>
                                            </div>
                                            <div class="acc-content">
                                                <div class="content">
                                                    <p>Recruitment concepts include sourcing, screening, interviewing,
                                                        and onboarding candidates to fill job vacancies efficiently.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="accordion block">
                                            <div class="acc-btn">
                                                <div class="icon-box"><i class="icon-21"></i></div>
                                                <h4>Employers Look for in Candidates?</h4>
                                            </div>
                                            <div class="acc-content">
                                                <div class="content">
                                                    <p>Employers typically look for strong communication skills,
                                                        problem-solving abilities, teamwork, and relevant job
                                                        experience.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div class="testimonial-content ml_130">
                                <div class="single-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
                                    <!-- Testimonial Item -->
                                    <div class="testimonial-block-three">
                                        <div class="inner-box">
                                            <div class="icon-box"><i class="icon-36"></i></div>
                                            <h2>Company and was impressed by the personalized approach of their
                                                recruitment team. They kept me informed at every stage</h2>
                                            <figure class="signature mb_30">
                                                <img src="{{ asset('Landingpage/assets/images/icons/signature-1.png') }}"
                                                    alt="">
                                            </figure>
                                            <div class="author-box">
                                                <figure class="author-thumb">
                                                    <img src="{{ asset('Landingpage/assets/images/resource/testimonial-4.png') }}"
                                                        alt="">
                                                </figure>
                                                <h3>Franklin Bailey</h3>
                                                <span class="designation">CEO, JobAway</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Duplicate Testimonial Items -->
                                    <div class="testimonial-block-three">
                                        <div class="inner-box">
                                            <div class="icon-box"><i class="icon-36"></i></div>
                                            <h2>Company and was impressed by the personalized approach of their
                                                recruitment team. They kept me informed at every stage</h2>
                                            <figure class="signature mb_30">
                                                <img src="{{ asset('Landingpage/assets/images/icons/signature-1.png') }}"
                                                    alt="">
                                            </figure>
                                            <div class="author-box">
                                                <figure class="author-thumb">
                                                    <img src="{{ asset('Landingpage/assets/images/resource/testimonial-4.png') }}"
                                                        alt="">
                                                </figure>
                                                <h3>Franklin Bailey</h3>
                                                <span class="designation">CEO, JobAway</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-block-three">
                                        <div class="inner-box">
                                            <div class="icon-box"><i class="icon-36"></i></div>
                                            <h2>Company and was impressed by the personalized approach of their
                                                recruitment team. They kept me informed at every stage</h2>
                                            <figure class="signature mb_30">
                                                <img src="{{ asset('Landingpage/assets/images/icons/signature-1.png') }}"
                                                    alt="">
                                            </figure>
                                            <div class="author-box">
                                                <figure class="author-thumb">
                                                    <img src="{{ asset('Landingpage/assets/images/resource/testimonial-4.png') }}"
                                                        alt="">
                                                </figure>
                                                <h3>Franklin Bailey</h3>
                                                <span class="designation">CEO, JobAway</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Testimonial Items -->
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
                                        <img src="{{ asset('assets/images/team/team-1.jpg') }}" alt="">
                                    </figure>
                                    <figure class="overlay-image">
                                        <img src="{{ asset('assets/images/team/team-1.jpg') }}" alt="">
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
                                        <img src="{{ asset('assets/images/team/team-2.jpg') }}" alt="">
                                    </figure>
                                    <figure class="overlay-image">
                                        <img src="{{ asset('assets/images/team/team-2.jpg') }}" alt="">
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
                                        <img src="{{ asset('assets/images/team/team-3.jpg') }}" alt="">
                                    </figure>
                                    <figure class="overlay-image">
                                        <img src="{{ asset('assets/images/team/team-3.jpg') }}" alt="">
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
                                        <img src="{{ asset('assets/images/team/team-4.jpg') }}" alt="">
                                    </figure>
                                    <figure class="overlay-image">
                                        <img src="{{ asset('assets/images/team/team-4.jpg') }}" alt="">
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
                        style="background-image: url('{{ asset('assets/images/shape/shape-20.png') }}');"></div>
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                            <div class="content-box">
                                <h2>The 2024 guide for Optimal Content <span>Management</span></h2>
                                <ul class="list-item mb_30">
                                    <li>Start by explaining the fundamental concepts of talent acquisition.</li>
                                    <li>Provide guidance on crafting clear and compelling job descriptions that
                                        accurately reflect.</li>
                                    <li>Practical tips for conducting effective interviews, including types of interview
                                        questions and interview formats.</li>
                                </ul>
                                <button type="button" class="theme-btn btn-one">Download E-book</button>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 image-column">
                            <div class="image-box">
                                <figure class="image">
                                    <img src="{{ asset('assets/images/resource/book-2.png') }}" alt="">
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
                                            <img src="{{ asset('assets/images/news/news-4.jpg') }}" alt="">
                                        </a>
                                    </figure>
                                    <figure class="overlay-image">
                                        <a href="blog-details.html">
                                            <img src="{{ asset('assets/images/news/news-4.jpg') }}" alt="">
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
                                            <img src="{{ asset('assets/images/news/news-5.jpg') }}" alt="">
                                        </a>
                                    </figure>
                                    <figure class="overlay-image">
                                        <a href="blog-details.html">
                                            <img src="{{ asset('assets/images/news/news-5.jpg') }}" alt="">
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
                                            <img src="{{ asset('assets/images/news/news-6.jpg') }}" alt="">
                                        </a>
                                    </figure>
                                    <figure class="overlay-image">
                                        <a href="blog-details.html">
                                            <img src="{{ asset('assets/images/news/news-6.jpg') }}" alt="">
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
