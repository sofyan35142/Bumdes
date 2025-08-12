<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from jobaway.pixcelsthemes.com/service-details-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Jul 2025 14:03:43 GMT -->

@include('Landingpage.layout.head')

<!-- page wrapper -->

<body>

    <div class="boxed_wrapper ltr">


        <!-- preloader -->
        @include('Landingpage.layout.preloader')
        <!-- preloader end -->


        <!-- page-direction -->

        <!-- page-direction end -->


        <!--Search Popup-->
        <div id="search-popup" class="search-popup">
            <div class="popup-inner">
                <div class="upper-box">
                    <figure class="logo-box"><a href="/"><img
                                src="{{ asset('LandingPage/assets/images/logo.png') }}" alt=""></a>
                    </figure>
                    <div class="close-search"><span class="icon-27"></span></div>
                </div>
                <div class="overlay-layer"></div>
                <div class="auto-container">
                    <div class="search-form">
                        <form method="post" action="https://jobaway.pixcelsthemes.com//">
                            <div class="form-group">
                                <fieldset>
                                    <input type="search" class="form-control" name="search-input" value=""
                                        placeholder="Type your keyword and hit" required>
                                    <button type="submit"><i class="icon-1"></i></button>
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
<<<<<<< HEAD
        @include('Landingpage.layout.mobilemenu')
=======
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            <nav class="menu-box">
                <div class="nav-logo"><a href="/"><img
                            src="{{ asset('LandingPage/assets/images/logo-2.png') }}" alt="" title=""></a>
                </div>
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
                        <li><a href="/"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="/"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="/"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="/"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="/"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div>
>>>>>>> 6b17bff2cdcf8fbe662fd2e4babc0b3049d24fbb
        <!-- End Mobile Menu -->


        <!-- page-title -->
        <section class="page-title centred pt_110">
            <div class="auto-container">
                <div class="content-box">
                    <h1>Detail Layanan Unggulan</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="/">Home</a></li>
                        <li>-</li>
                        <li>Detail Layanan Unggulan</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- service-details -->
        <section class="service-details pt_110 pb_120">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="service-details-content">
                            <div class="sec-title mb_70">
                                <span class="sub-title mb_10">{{ $detailunggulan->kategori->nama_kategori ?? '-' }}</span>
                                <h2>{{ $detailunggulan->nama_layanan }}</h2>
                                {{-- <p class="mt_20">The executive search process is meticulously designed to identify and
                                    attract top-tier leadership talent that aligns with an organization’s strategic
                                    goals.</p> --}}
                            </div>
                            <figure class="image-box mb_30"><img
                                    src="{{ asset('foto layanan unggulan/' . $detailunggulan->foto_layanan) }}"
                                    alt=""></figure>
                            <div class="text-box mb_110">
                                <p class="mb_25">{!! nl2br(e($detailunggulan->deskripsi)) !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="service-sidebar mr_40">
                            <div class="category-widget mb_40">
                                <ul class="category-list clearfix">
                                    @foreach ($kategoriList as $kategori)
                                        <li>
                                            <a href="#"
                                                class="{{ $kategori->id == $detailunggulan->kategori_id ? 'current' : '' }}">
                                                {{ $kategori->nama_kategori }} <i class="icon-42"></i>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="download-widget">
                                <div class="shape"
                                    style="background-image: url({{ asset('LandingPage/assets/images/shape/shape-24.png') }});">
                                </div>
                                <div class="inner-box">
                                    <figure class="image-box"><img
                                            src="{{ asset('LandingPage/assets/images/resource/book-3.png') }}"
                                            alt=""></figure>
                                    <h4>The 2024 guide for Optimal Content <span>Management</span></h4>
                                    <button type="button" class="theme-btn btn-one">Download E-book</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- service-details end -->


        <!-- subscribe-style-two -->
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


    <!-- jequery plugins -->
    @include('Landingpage.layout.scripts')

    <!-- main-js -->

</body><!-- End of .page_wrapper -->

<!-- Mirrored from jobaway.pixcelsthemes.com/service-details-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Jul 2025 14:03:43 GMT -->

</html>
