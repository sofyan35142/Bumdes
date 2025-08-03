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
        <div class="page_direction">
            <div class="demo-rtl direction_switch"><button class="rtl">RTL</button></div>
            <div class="demo-ltr direction_switch"><button class="ltr">LTR</button></div>
        </div>
        <!-- page-direction end -->


        <!--Search Popup-->
        <div id="search-popup" class="search-popup">
            <div class="popup-inner">
                <div class="upper-box">
                    <figure class="logo-box"><a href="index.html"><img src="{{ asset('LandingPage/assets/images/logo.png') }}" alt=""></a>
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
                <div class="nav-logo"><a href="index.html"><img src="{{ asset('LandingPage/assets/images/logo-2.png') }}" alt=""
                            title=""></a></div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
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
                    <h1>Training Session</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>-</li>
                        <li>Solutions Details</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- service-details -->
        <section class="service-details pt_110 pb_120">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="service-sidebar mr_40">
                            <div class="category-widget mb_40">
                                <ul class="category-list clearfix">
                                    <li><a href="service-details.html">Executive Search <i class="icon-42"></i></a>
                                    </li>
                                    <li><a href="service-details-2.html" class="current">Training Session <i
                                                class="icon-42"></i></a></li>
                                    <li><a href="service-details-3.html">Career Growth <i class="icon-42"></i></a>
                                    </li>
                                    <li><a href="service-details-4.html">Payroll Services <i class="icon-42"></i></a>
                                    </li>
                                    <li><a href="service-details-5.html">Workforce System <i class="icon-42"></i></a>
                                    </li>
                                    <li><a href="service-details-6.html">Temporary Jobs <i class="icon-42"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="download-widget">
                                <div class="shape" style="background-image: url({{ asset('LandingPage/assets/images/shape/shape-24.png') }});">
                                </div>
                                <div class="inner-box">
                                    <figure class="image-box"><img src="{{ asset('LandingPage/assets/images/resource/book-3.png') }}"
                                            alt=""></figure>
                                    <h4>The 2024 guide for Optimal Content <span>Management</span></h4>
                                    <button type="button" class="theme-btn btn-one">Download E-book</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="service-details-content">
                            <div class="sec-title mb_70">
                                <span class="sub-title mb_10">Training Session</span>
                                <h2>The Executive Search Process for Optimal Results</h2>
                                <p class="mt_20">The executive search process is meticulously designed to identify and
                                    attract top-tier leadership talent that aligns with an organization’s strategic
                                    goals.</p>
                            </div>
                            <figure class="image-box mb_30"><img src="{{ asset('LandingPage/assets/images/service/service-9.jpg') }}"
                                    alt=""></figure>
                            <div class="text-box mb_110">
                                <p class="mb_25">It begins with a thorough understanding of the company’s needs,
                                    culture, and long-term vision, ensuring that the search is precisely targeted.</p>
                                <p>Leveraging an extensive network and advanced assessment tools, executive search firms
                                    meticulously evaluate candidates’ qualifications, experience, and leadership
                                    capabilities. The process includes rigorous interviews, reference checks, and often
                                    psychometric testing to ensure a comprehensive evaluation.</p>
                            </div>
                            <div class="text-box mb_70">
                                <h2>Finding You The Leaders Of Tomorrow</h2>
                                <p>Trouble that are bound to ensue; and equaly blame belongs those who fail in their
                                    duty through weakness of will which is the same as saying through shrinking from
                                    toil and pain.</p>
                            </div>
                            <div class="tabs-box mb_50">
                                <ul class="tab-btns tab-buttons">
                                    <li class="tab-btn active-btn" data-tab="#tab-1"><i class="icon-43"></i>Short
                                        Time Hiring</li>
                                    <li class="tab-btn" data-tab="#tab-2"><i class="icon-43"></i>Last Minute Hiring
                                    </li>
                                    <li class="tab-btn" data-tab="#tab-3"><i class="icon-43"></i>Immediate Hiring
                                    </li>
                                </ul>
                                <div class="tabs-content">
                                    <div class="tab active-tab" id="tab-1">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('LandingPage/assets/images/service/service-8.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-box">
                                                <h6>Short Time Hiring</h6>
                                                <p>Lorem ipsum dolor sit amet consectetur. Consequat tellus proin massa
                                                    lacus. Arcu ullamcorper proin urna rhoncus odio</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab" id="tab-2">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('LandingPage/assets/images/service/service-8.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-box">
                                                <h6>Last Minute Hiring</h6>
                                                <p>Lorem ipsum dolor sit amet consectetur. Consequat tellus proin massa
                                                    lacus. Arcu ullamcorper proin urna rhoncus odio</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab" id="tab-3">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{ asset('LandingPage/assets/images/service/service-8.jpg') }}"
                                                    alt=""></figure>
                                            <div class="content-box">
                                                <h6>Immediate Hiring</h6>
                                                <p>Lorem ipsum dolor sit amet consectetur. Consequat tellus proin massa
                                                    lacus. Arcu ullamcorper proin urna rhoncus odio</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-box">
                                <p class="mb_25">Lorem ipsum dolor sit amet consectetur. Mi luctus at sapien viverra
                                    enim pharetra augue. Aliquam tellus amet est amet in non sem adipiscing urna. Neque
                                    etiam eu pellentesque velit ultricies dictumst mauris tortor hac.</p>
                                <p>Elit morbi maecenas sit viverra nibh elementum bibendum arcu a. Suscipit magna vitae
                                    nulla aenean suspendisse scelerisque montes.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-details end -->


        <!-- subscribe-style-two -->
        <section class="subscribe-style-two">
            <div class="bg-color"></div>
            <div class="auto-container">
                <div class="inner-container">
                    <div class="shape-box">
                        <div class="shape-1" style="background-image: url({{ asset('LandingPage/assets/images/shape/shape-8.png') }});"></div>
                        <div class="shape-2" style="background-image: url({{ asset('LandingPage/assets/images/shape/shape-9.png') }});"></div>
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


    <!-- jequery plugins -->
   @include('Landingpage.layout.scripts')

    <!-- main-js -->

</body><!-- End of .page_wrapper -->

<!-- Mirrored from jobaway.pixcelsthemes.com/service-details-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Jul 2025 14:03:43 GMT -->

</html>
