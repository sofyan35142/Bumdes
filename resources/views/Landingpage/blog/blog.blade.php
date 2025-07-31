
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from jobaway.pixcelsthemes.com/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Jul 2025 14:03:53 GMT -->
@include('LandingPage.layout.head')


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper ltr">


        <!-- preloader -->
@include('LandingPage.layout.preloader')
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
                    <figure class="logo-box"><a href="index.html"><img src="{{ asset('LandingPage/') }}assets/images/logo.png" alt=""></a></figure>
                    <div class="close-search"><span class="icon-27"></span></div>
                </div>
                <div class="overlay-layer"></div>
                <div class="auto-container">
                    <div class="search-form">
                        <form method="post" action="https://jobaway.pixcelsthemes.com/index.html">
                            <div class="form-group">
                                <fieldset>
                                    <input type="search" class="form-control" name="search-input" value="" placeholder="Type your keyword and hit" required >
                                    <button type="submit"><i class="icon-1"></i></button>
                                </fieldset>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- main header -->
@include('LandingPage.layout.header')
        <!-- main-header end -->


        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="{{ asset('LandingPage/assets/images/logo-2.png') }}" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
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
                    <h1>Blog Grid</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="/">Home</a></li>
                        <li>-</li>
                        <li>Blog Grid</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- sidebar-page-container -->
        <section class="sidebar-page-container p_relative pt_110 pb_120">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="blog-sidebar mr_40 mb_30">
                            <div class="search-widget mb_60">
                                <div class="search-form">
                                    <form method="post" action="https://jobaway.pixcelsthemes.com/blog.html">
                                        <div class="form-group">
                                            <input type="search" name="search-field" placeholder="Search" required>
                                            <button type="submit"><i class="icon-1"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="sidebar-widget category-widget mb_50">
                                <div class="widget-title mb_11">
                                    <h3>Categories</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="category-list clearfix">
                                        <li><a href="blog-details.html">Day Trading<span>(09)</span></a></li>
                                        <li><a href="blog-details.html">Finance<span>(20)</span></a></li>
                                        <li><a href="blog-details.html">Virtual Hiring<span>(25)</span></a></li>
                                        <li><a href="blog-details.html">Headhunting<span>(06)</span></a></li>
                                        <li><a href="blog-details.html">Promotions<span>(18)</span></a></li>
                                        <li><a href="blog-details.html">Recruitment Agencies<span>(11)</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget post-widget mb_60">
                                <div class="widget-title mb_20">
                                    <h3>Latest Posts</h3>
                                </div>
                                <div class="post-inner">
                                    <div class="post">
                                        <figure class="post-thumb"><a href="blog-details.html"><img src="{{ asset('LandingPage/assets/images/news/post-1.jpg') }}" alt=""></a></figure>
                                        <h6><a href="blog-details.html">Provide guidance on crafting effective</a></h6>
                                        <span class="post-date">1 May 2024</span>
                                    </div>
                                    <div class="post">
                                        <figure class="post-thumb"><a href="blog-details.html"><img src="{{ asset('LandingPage/assets/images/news/post-2.jpg') }}" alt=""></a></figure>
                                        <h6><a href="blog-details.html">Explore the concept of personal branding</a></h6>
                                        <span class="post-date">1 May 2024</span>
                                    </div>
                                    <div class="post">
                                        <figure class="post-thumb"><a href="blog-details.html"><img src="{{ asset('LandingPage/assets/images/news/post-3.jpg') }}" alt=""></a></figure>
                                        <h6><a href="blog-details.html">Use relevant keywords to improve</a></h6>
                                        <span class="post-date">1 May 2024</span>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-widget tags-widget mb_45">
                                <div class="widget-title mb_20">
                                    <h3>Popular tag</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="tags-list clearfix">
                                        <li><a href="blog-details.html">Account</a></li>
                                        <li><a href="blog-details.html">Careers</a></li>
                                        <li><a href="blog-details.html">Demo</a></li>
                                        <li><a href="blog-details.html">Development</a></li>
                                        <li><a href="blog-details.html">Technology</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget archives-widget">
                                <div class="widget-title mb_11">
                                    <h3>Archives</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="archives-list clearfix">
                                        <li><a href="blog-details.html"><i class="fal fa-angle-right"></i>December 20, 2022<span>(09)</span></a></li>
                                        <li><a href="blog-details.html"><i class="fal fa-angle-right"></i>December 26, 2022<span>(20)</span></a></li>
                                        <li><a href="blog-details.html"><i class="fal fa-angle-right"></i>December 26, 2022<span>(25)</span></a></li>
                                        <li><a href="blog-details.html"><i class="fal fa-angle-right"></i>December 26, 2022<span>(06)</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="download-widget mr_40">
                            <div class="shape" style="background-image: url({{ asset('LandingPage/assets/images/shape/shape-24.png') }});"></div>
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{ asset('LandingPage/assets/images/resource/book-3.png') }}" alt=""></figure>
                                <h4>The 2024 guide for Optimal Content <span>Management</span></h4>
                                <button type="button" class="theme-btn btn-one">Download E-book</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="blog-grid-content">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                                    <div class="news-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><a href="blog-details.html"><img src="{{ asset('LandingPage/assets/images/news/news-4.jpg') }}" alt=""></a></figure>
                                                <figure class="overlay-image"><a href="blog-details.html"><img src="{{ asset('LandingPage/assets/images/news/news-4.jpg') }}" alt=""></a></figure>
                                            </div>
                                            <div class="lower-content">
                                                <span class="category">Business</span>
                                                <h3><a href="blog-details.html">Create a series of blog posts discussing common interview</a></h3>
                                                <ul class="post-info">
                                                    <li>By <a href="blog-details.html">Alex Beniwal</a></li>
                                                    <li><span>March 20, 2023</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                                    <div class="news-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><a href="blog-details.html"><img src="{{ asset('LandingPage/assets/images/news/news-5.jpg') }}" alt=""></a></figure>
                                                <figure class="overlay-image"><a href="blog-details.html"><img src="{{ asset('LandingPage/assets/images/news/news-5.jpg') }}" alt=""></a></figure>
                                            </div>
                                            <div class="lower-content">
                                                <span class="category">Analytics</span>
                                                <h3><a href="blog-details.html">Explore the concept of personal branding and its impact on</a></h3>
                                                <ul class="post-info">
                                                    <li>By <a href="blog-details.html">Stefen De</a></li>
                                                    <li><span>March 19, 2023</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                                    <div class="news-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><a href="blog-details.html"><img src="{{ asset('LandingPage/assets/images/news/news-7.jpg') }}" alt=""></a></figure>
                                                <figure class="overlay-image"><a href="blog-details.html"><img src="{{ asset('LandingPage/assets/images/news/news-7.jpg') }}" alt=""></a></figure>
                                            </div>
                                            <div class="lower-content">
                                                <span class="category">Technology</span>
                                                <h3><a href="blog-details.html">Share stories of employees who have advanced within the</a></h3>
                                                <ul class="post-info">
                                                    <li>By <a href="blog-details.html">Ema malwar</a></li>
                                                    <li><span>March 18, 2023</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                                    <div class="news-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><a href="blog-details.html"><img src="{{ asset('LandingPage/assets/images/news/news-8.jpg') }}" alt=""></a></figure>
                                                <figure class="overlay-image"><a href="blog-details.html"><img src="{{ asset('LandingPage/assets/images/news/news-8.jpg') }}" alt=""></a></figure>
                                            </div>
                                            <div class="lower-content">
                                                <span class="category">Development</span>
                                                <h3><a href="blog-details.html">Provide guidance on crafting effective resumes and cover</a></h3>
                                                <ul class="post-info">
                                                    <li>By <a href="blog-details.html">John Rock</a></li>
                                                    <li><span>March 17, 2023</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                                    <div class="news-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><a href="blog-details.html"><img src="{{ asset('LandingPage/assets/images/news/news-9.jpg') }}" alt=""></a></figure>
                                                <figure class="overlay-image"><a href="blog-details.html"><img src="{{ asset('LandingPage/assets/images/news/news-9.jpg') }}" alt=""></a></figure>
                                            </div>
                                            <div class="lower-content">
                                                <span class="category">Remote</span>
                                                <h3><a href="blog-details.html">Detail any internship or graduate programs you offer</a></h3>
                                                <ul class="post-info">
                                                    <li>By <a href="blog-details.html">Caly Andrs</a></li>
                                                    <li><span>March 16, 2023</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                                    <div class="news-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><a href="blog-details.html"><img src="{{ asset('LandingPage/assets/images/news/news-10.jpg') }}" alt=""></a></figure>
                                                <figure class="overlay-image"><a href="blog-details.html"><img src="{{ asset('LandingPage/assets/images/news/news-10.jpg') }}" alt=""></a></figure>
                                            </div>
                                            <div class="lower-content">
                                                <span class="category">Analytics</span>
                                                <h3><a href="blog-details.html">Use relevant keywords to improve the blog’s visibility in</a></h3>
                                                <ul class="post-info">
                                                    <li>By <a href="blog-details.html">Tom Rose</a></li>
                                                    <li><span>March 15, 2023</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                                    <div class="news-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><a href="blog-details.html"><img src="{{ asset('LandingPage/assets/images/news/news-11.jpg') }}" alt=""></a></figure>
                                                <figure class="overlay-image"><a href="blog-details.html"><img src="{{ asset('LandingPage/assets/images/news/news-11.jpg') }}" alt=""></a></figure>
                                            </div>
                                            <div class="lower-content">
                                                <span class="category">Remote</span>
                                                <h3><a href="blog-details.html">Explore the concept of personal branding and its impact on</a></h3>
                                                <ul class="post-info">
                                                    <li>By <a href="blog-details.html">Jhon Haris</a></li>
                                                    <li><span>March 14, 2023</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                                    <div class="news-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><a href="blog-details.html"><img src="{{ asset('LandingPage/assets/images/news/news-12.jpg') }}" alt=""></a></figure>
                                                <figure class="overlay-image"><a href="blog-details.html"><img src="{{ asset('LandingPage/assets/images/news/news-12.jpg') }}" alt=""></a></figure>
                                            </div>
                                            <div class="lower-content">
                                                <span class="category">Analytics</span>
                                                <h3><a href="blog-details.html">Share stories of employees who have advanced within the </a></h3>
                                                <ul class="post-info">
                                                    <li>By <a href="blog-details.html">Alex Bolt</a></li>
                                                    <li><span>March 13, 2023</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pagination-wrapper">
                                <ul class="pagination clearfix">
                                    <li><a href="blog.html"><i class="icon-34"></i></a></li>
                                    <li><a href="blog.html" class="current">1</a></li>
                                    <li><a href="blog.html">2</a></li>
                                    <li><a href="blog.html">3</a></li>
                                    <li><a href="blog.html"><i class="icon-35"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- sidebar-page-container end -->


        <!-- subscribe-style-two -->
        <section class="subscribe-style-two">
            <div class="bg-color"></div>
            <div class="auto-container">
                <div class="inner-container">
                    <div class="shape-box">
                        <div class="shape-1" style="background-image: url({{ asset('LandingPage/assets/images/shape/shape-8.png') }});"></div>
                        <div class="shape-2" style="background-image: url({{ asset('LandingPage/assets/images/shape/shape-9.png ') }});"></div>
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
<<<<<<< HEAD
        @include('Landingpage.layout.footer')
=======
        <footer class="main-footer home-2">
            <div class="widget-section p_relative pt_80 pb_100">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget logo-widget mr_30">
                                <figure class="footer-logo mb_20"><a href="index.html"><img src="{{ asset('LandingPage/assets/images/logo.png') }}" alt=""></a></figure>
                                <p>Since 2018, JobAway has connecting hospitality workers to thousands of business, private events and universities.</p>
                                <div class="download-btn">
                                    <a href="about.html" class="apple-store">
                                        <img src="{{ asset('LandingPage/assets/images/icons/icon-4.png') }}" alt="">
                                        <span>Download on</span>
                                        App Store
                                    </a>
                                    <a href="about.html" class="play-store">
                                        <img src="{{ asset('LandingPage/assets/images/icons/icon-5.png') }}" alt="">
                                        <span>Get it on</span>
                                        Google Play
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h4>For Workers</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="index.html">Find Work</a></li>
                                        <li><a href="index.html">Jobs in Dubai</a></li>
                                        <li><a href="index.html">Jobs in Virginia</a></li>
                                        <li><a href="index.html">Jobs in California</a></li>
                                        <li><a href="index.html">Jobs in Alaska</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h4>For Business</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="index.html">Merchandising</a></li>
                                        <li><a href="index.html">Hospitality Staff</a></li>
                                        <li><a href="index.html">General Labour</a></li>
                                        <li><a href="index.html">Car Drivers</a></li>
                                        <li><a href="index.html">Bus Driver</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h4>Company</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="index.html">Career</a></li>
                                        <li><a href="index.html">Partners</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="index.html">Clients</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h4>Help & Support</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="contact.html">Contact Us</a></li>
                                        <li><a href="faq.html">General FAQ</a></li>
                                        <li><a href="index.html">Support Center</a></li>
                                        <li><a href="index.html">Privacy Policy</a></li>
                                        <li><a href="index.html">Terms & Conditions</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="bottom-inner">
                        <div class="copyright"><p>Copyright &copy; 2024 <a href="index.html">JobAway</a> All rights reserved.</p></div>
                        <ul class="social-links">
                            <li><h5>Follow Us On:</h5></li>
                            <li><a href="index.html"><i class="icon-22"></i></a></li>
                            <li><a href="index.html"><i class="icon-23"></i></a></li>
                            <li><a href="index.html"><i class="icon-24"></i></a></li>
                            <li><a href="index.html"><i class="icon-25"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
>>>>>>> 0834c6ef6f2c7e52a0e9d226daf298aa4c8ea7cb
        <!-- main-footer end -->



        <!--Scroll to top-->
        <div class="scroll-to-top">
            <svg class="scroll-top-inner" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>

    </div>

@include('LandingPage.layout.scripts')

</body><!-- End of .page_wrapper -->

<!-- Mirrored from jobaway.pixcelsthemes.com/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Jul 2025 14:03:56 GMT -->
</html>
