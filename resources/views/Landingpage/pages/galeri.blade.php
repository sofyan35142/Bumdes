<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from jobaway.pixcelsthemes.com/portfolio.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Jul 2025 14:03:45 GMT -->
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
        <section class="page-title centred pt_110">
            <div class="auto-container">
                <div class="content-box">
                    <h1>Portfolio 3 Column</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>-</li>
                        <li>Portfolio 3 Column</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- portfolio-section -->
        <section class="portfolio-section centred pt_110 pb_120">
            <div class="auto-container">
                <div class="sec-title pb_60 sec-title-animation animation-style2">
                    <span class="sub-title mb_10 title-animation">REQUEST NEEDED TALENT</span>
                    <h2 class="title-animation">Talented Professionals Needed</h2>
                </div>
                <div class="sortable-masonry">
                    <div class="filters mb_60">
                        <ul class="filter-tabs filter-btns">
                            <li class="active filter" data-role="button" data-filter=".all">View All</li>
                            <li class="filter" data-role="button" data-filter=".consulting">Consulting</li>
                            <li class="filter" data-role="button" data-filter=".market">Market</li>
                            <li class="filter" data-role="button" data-filter=".presentation">Presentation</li>
                            <li class="filter" data-role="button" data-filter=".recruitment">Recruitment</li>
                            <li class="filter" data-role="button" data-filter=".technology">Technology</li>
                        </ul>
                    </div>
                    <div class="items-container row clearfix">
                        <div
                            class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all consulting presentation technology">
                            <div class="portfolio-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img
                                            src="http://127.0.0.1:8000/LandingPage/assets/images/portfolio/portfolio-1.jpg"
                                            alt=""></figure>
                                    <div class="content-box">
                                        <span>Consulting</span>
                                        <h3><a href="portfolio.html">Consulting Excellence Portfolio</a></h3>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all market recruitment">
                            <div class="portfolio-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img
                                            src="http://127.0.0.1:8000/LandingPage/assets/images/portfolio/portfolio-2.jpg"
                                            alt=""></figure>
                                    <div class="content-box">
                                        <span>Consulting</span>
                                        <h3><a href="portfolio.html">Create a series of blog posts discussing</a></h3>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all consulting presentation technology">
                            <div class="portfolio-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img
                                            src="http://127.0.0.1:8000/LandingPage/assets/images/portfolio/portfolio-3.jpg"
                                            alt=""></figure>
                                    <div class="content-box">
                                        <span>Consulting</span>
                                        <h3><a href="portfolio.html">Explore the concept of personal</a></h3>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all market recruitment technology">
                            <div class="portfolio-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img
                                            src="http://127.0.0.1:8000/LandingPage/assets/images/portfolio/portfolio-4.jpg"
                                            alt=""></figure>
                                    <div class="content-box">
                                        <span>Consulting</span>
                                        <h3><a href="portfolio.html">Share stories of employees who have</a></h3>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all consulting presentation">
                            <div class="portfolio-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img
                                            src="http://127.0.0.1:8000/LandingPage/assets/images/portfolio/portfolio-5.jpg"
                                            alt=""></figure>
                                    <div class="content-box">
                                        <span>Consulting</span>
                                        <h3><a href="portfolio.html">Provide guidance on crafting effective</a></h3>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all market recruitment technology">
                            <div class="portfolio-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img
                                            src="http://127.0.0.1:8000/LandingPage/assets/images/portfolio/portfolio-6.jpg"
                                            alt=""></figure>
                                    <div class="content-box">
                                        <span>Consulting</span>
                                        <h3><a href="portfolio.html">Detail any internship or graduate</a></h3>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all consulting presentation technology">
                            <div class="portfolio-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img
                                            src="http://127.0.0.1:8000/LandingPage/assets/images/portfolio/portfolio-7.jpg"
                                            alt=""></figure>
                                    <div class="content-box">
                                        <span>Consulting</span>
                                        <h3><a href="portfolio.html">Use relevant keywords to improve</a></h3>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all market recruitment">
                            <div class="portfolio-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img
                                            src="http://127.0.0.1:8000/LandingPage/assets/images/portfolio/portfolio-8.jpg"
                                            alt=""></figure>
                                    <div class="content-box">
                                        <span>Consulting</span>
                                        <h3><a href="portfolio.html">Explore the concept of personal branding</a></h3>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all consulting presentation technology">
                            <div class="portfolio-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img
                                            src="http://127.0.0.1:8000/LandingPage/assets/images/portfolio/portfolio-9.jpg"
                                            alt=""></figure>
                                    <div class="content-box">
                                        <span>Consulting</span>
                                        <h3><a href="portfolio.html">Share stories of employees who have</a></h3>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination-wrapper pt_20">
                    <ul class="pagination clearfix">
                        <li><a href="portfolio.html"><i class="icon-34"></i></a></li>
                        <li><a href="portfolio.html" class="current">1</a></li>
                        <li><a href="portfolio.html">2</a></li>
                        <li><a href="portfolio.html">3</a></li>
                        <li><a href="portfolio.html"><i class="icon-35"></i></a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- portfolio-section end -->




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

</body><!-- End of .page_wrapper -->

<!-- Mirrored from jobaway.pixcelsthemes.com/portfolio.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Jul 2025 14:03:47 GMT -->

</html>
