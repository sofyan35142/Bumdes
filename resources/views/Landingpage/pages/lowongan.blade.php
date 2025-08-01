<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from jobaway.pixcelsthemes.com/service.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Jul 2025 14:03:40 GMT -->
@include('Landingpage.layout.head')

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
                    <figure class="logo-box"><a href="index.html"><img
                                src="http://127.0.0.1:8000/LandingPage/assets/images/logo.png" alt=""></a>
                    </figure>
                    <div class="close-search"><span class="icon-27"></span></div>
                </div>
                <div class="overlay-layer"></div>
                <div class="auto-container">
                    <div class="search-form">
                        <form method="post" action="https://jobaway.pixcelsthemes.com/index.html">
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
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img
                            src="http://127.0.0.1:8000/LandingPage/assets/images/logo-2.png" alt=""
                            title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
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
        {{-- <section class="page-title centred pt_110">
            <div class="auto-container">
                <div class="content-box">
                    <h1>Our Solutions</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>-</li>
                        <li>Our Solutions</li>
                    </ul>
                </div>
            </div>
        </section> --}}
        <!-- page-title end -->


        <!-- service-section -->
        <section class="service-section centred pt_110 pb_90">
            <div class="auto-container">
                <div class="sec-title pb_60 sec-title-animation animation-style2">
                    <span class="sub-title mb_10 title-animation">Seputar Lowongan</span>
                    <h2 class="title-animation">Lowongan Pekerjaan BumDes</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="00ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="service-details-2.html"><img
                                                src="http://127.0.0.1:8000/LandingPage/assets/images/service/service-1.jpg"
                                                alt=""></a></figure>
                                    <figure class="overlay-image"><a href="service-details-2.html"><img
                                                src="http://127.0.0.1:8000/LandingPage/assets/images/service/service-1.jpg"
                                                alt=""></a></figure>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="service-details-2.html">Training Session</a></h3>
                                    <p>These experts guide new employees through interactive workshops</p>
                                    <div class="btn-box"><a href="service-details-2.html" class="theme-btn btn-one">View
                                            Details</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="300ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="service-details.html"><img
                                                src="http://127.0.0.1:8000/LandingPage/assets/images/service/service-2.jpg"
                                                alt=""></a></figure>
                                    <figure class="overlay-image"><a href="service-details.html"><img
                                                src="http://127.0.0.1:8000/LandingPage/assets/images/service/service-2.jpg"
                                                alt=""></a></figure>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="service-details.html">Executive Search</a></h3>
                                    <p>Our executive search services are customized to meet your specific</p>
                                    <div class="btn-box"><a href="service-details.html"
                                            class="theme-btn btn-one">View Details</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="600ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="service-details-6.html"><img
                                                src="http://127.0.0.1:8000/LandingPage/assets/images/service/service-3.jpg"
                                                alt=""></a></figure>
                                    <figure class="overlay-image"><a href="service-details-6.html"><img
                                                src="http://127.0.0.1:8000/LandingPage/assets/images/service/service-3.jpg"
                                                alt=""></a></figure>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="service-details-6.html">Temporary Jobs</a></h3>
                                    <p>Apply for our temporary jobs and become part of our talent pool</p>
                                    <div class="btn-box"><a href="service-details-6.html"
                                            class="theme-btn btn-one">View Details</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="00ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="service-details-4.html"><img
                                                src="http://127.0.0.1:8000/LandingPage/assets/images/service/service-4.jpg"
                                                alt=""></a></figure>
                                    <figure class="overlay-image"><a href="service-details-4.html"><img
                                                src="http://127.0.0.1:8000/LandingPage/assets/images/service/service-1.jpg"
                                                alt=""></a></figure>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="service-details-4.html">Payroll Services</a></h3>
                                    <p>Utilizing a reliable payroll service can significantly improve operational</p>
                                    <div class="btn-box"><a href="service-details-4.html"
                                            class="theme-btn btn-one">View Details</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="300ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="service-details-5.html"><img
                                                src="http://127.0.0.1:8000/LandingPage/assets/images/service/service-5.jpg"
                                                alt=""></a></figure>
                                    <figure class="overlay-image"><a href="service-details-5.html"><img
                                                src="http://127.0.0.1:8000/LandingPage/assets/images/service/service-2.jpg"
                                                alt=""></a></figure>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="service-details-5.html">Workforce System</a></h3>
                                    <p>This system leverages advanced technologies such as Applicant Tracking</p>
                                    <div class="btn-box"><a href="service-details-5.html"
                                            class="theme-btn btn-one">View Details</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="600ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="service-details-3.html"><img
                                                src="http://127.0.0.1:8000/LandingPage/assets/images/service/service-6.jpg"
                                                alt=""></a></figure>
                                    <figure class="overlay-image"><a href="service-details-3.html"><img
                                                src="http://127.0.0.1:8000/LandingPage/assets/images/service/service-3.jpg"
                                                alt=""></a></figure>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="service-details-3.html">Career Growth</a></h3>
                                    <p>career growth is about fostering a culture where individuals can achieve</p>
                                    <div class="btn-box"><a href="service-details-3.html"
                                            class="theme-btn btn-one">View Details</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-section end -->


        <!-- subscribe-style-two -->
        <section class="subscribe-style-two">
            <div class="bg-color"></div>
            <div class="auto-container">
                <div class="inner-container">
                    <div class="shape-box">
                        <div class="shape-1"
                            style="background-image: url(http://127.0.0.1:8000/LandingPage/assets/images/shape/shape-8.png);">
                        </div>
                        <div class="shape-2"
                            style="background-image: url(http://127.0.0.1:8000/LandingPage/assets/images/shape/shape-9.png);">
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


    @include('Landingpage.layout.scripts')

</body><!-- End of .page_wrapper -->

<!-- Mirrored from jobaway.pixcelsthemes.com/service.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Jul 2025 14:03:41 GMT -->

</html>
