<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from jobaway.pixcelsthemes.com/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Jul 2025 14:03:52 GMT -->
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
                    <figure class="logo-box"><a href="index.html"><img src="assets/images/logo.png" alt=""></a>
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
                <div class="nav-logo"><a href="index.html"><img src="assets/images/logo-2.png" alt=""
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
                    <h1>Login</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>-</li>
                        <li>Login</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- sign-section -->
        <section class="sign-section pt_110 pb_120">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-25.png);"></div>
            <div class="auto-container">
                <div class="form-inner">
                    <form method="post" action="/admin/postsignin">
                        @csrf
                        <div class="form-group">
                            <label>Email <span>*</span></label>
                            <input type="email" name="email" placeholder="masukkan email" required>
                        </div>
                        <div class="form-group">
                            <label>Password <span>*</span></label>
                            <input type="password" name="password" placeholder="masukan password" required>
                        </div>
                        <div class="form-group message-btn">
                            <button type="submit" class="theme-btn btn-one">Log In</button>
                        </div>
                        <span class="text">or</span>
                        <ul class="social-links clearfix">
                            <li>
                                <a href="login.html"><img src="assets/images/icons/icon-25.png"
                                        alt="">Continue with Google</a>
                            </li>
                            <li>
                                <a href="login.html"><img src="assets/images/icons/icon-26.png"
                                        alt="">Continue with Facebook</a>
                            </li>
                        </ul>
                    </form>
                    <div class="other-option">
                        <div class="check-box">
                            <input class="check" type="checkbox" id="checkbox1">
                            <label for="checkbox1">Remember me</label>
                        </div>
                        <button class="forgot-password">Forget password?</button>
                    </div>
                    <div class="lower-text centred">
                        <p>Not registered yet? <a href="signup.html">Create an Account</a></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- sign-section end -->


        <!-- subscribe-style-two -->
        <section class="subscribe-style-two">
            <div class="bg-color"></div>
            <div class="auto-container">
                <div class="inner-container">
                    <div class="shape-box">
                        <div class="shape-1" style="background-image: url(assets/images/shape/shape-8.png);"></div>
                        <div class="shape-2" style="background-image: url(assets/images/shape/shape-9.png);"></div>
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

<!-- Mirrored from jobaway.pixcelsthemes.com/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Jul 2025 14:03:53 GMT -->

</html>
