<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Jobaway - HTML 5 Template Preview</title>

    <!-- Fav Icon -->
    <link rel="icon" href="http://127.0.0.1:8000/LandingPage/assets/images/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Outfit:wght@100..900&display=swap"
        rel="stylesheet">


    <!-- Stylesheets -->
    <link href="http://127.0.0.1:8000/LandingPage/assets/css/font-awesome-all.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/LandingPage/assets/css/flaticon.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/LandingPage/assets/css/owl.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/LandingPage/assets/css/bootstrap.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/LandingPage/assets/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/LandingPage/assets/css/animate.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/LandingPage/assets/css/nice-select.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/LandingPage/assets/css/odometer.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/LandingPage/assets/css/elpath.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/LandingPage/assets/css/color.css" id="jssDefault" rel="stylesheet">
    <link href="http://127.0.0.1:8000/LandingPage/assets/css/rtl.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/LandingPage/assets/css/style.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/LandingPage/assets/css/module-css/header.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/LandingPage/assets/css/module-css/page-title.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/LandingPage/assets/css/module-css/contact.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/LandingPage/assets/css/module-css/subscribe.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/LandingPage/assets/css/module-css/footer.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/LandingPage/assets/css/responsive.css" rel="stylesheet">

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
                    <h1>Kontak Kami</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Beranda</a></li>
                        <li>-</li>
                        <li>Kontak</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- contact-section -->
        <section class="contact-section pt_110 pb_30">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-12 col-sm-12 info-column">
                            <div class="info-box">
                                <h3>Informasi Kontak</h3>
                                <div class="single-item">
                                    <div class="icon-box"><img
                                            src="http://127.0.0.1:8000/LandingPage/assets/images/icons/icon-27.png"
                                            alt="">
                                    </div>
                                    <h4>Kantor BUMDes</h4>
                                    <p>Jl. Raya Dusun Janti, Desa Pakukerto, Kec. Sukodono, Kab. Sidoarjo</p>
                                </div>
                                <div class="single-item">
                                    <div class="icon-box"><img
                                            src="http://127.0.0.1:8000/LandingPage/assets/images/icons/icon-28.png"
                                            alt="">
                                    </div>
                                    <h4>Email</h4>
                                    <p><a href="mailto:bumdespakukerto@gmail.com">bumdespakukerto@gmail.com</a></p>
                                </div>
                                <div class="single-item">
                                    <div class="icon-box"><img
                                            src="http://127.0.0.1:8000/LandingPage/assets/images/icons/icon-29.png"
                                            alt="">
                                    </div>
                                    <h4>Nomor Telepon</h4>
                                    <p><a href="tel:+6281234567890">+62 812 3456 7890</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                            <div class="form-inner">
                                <form method="post" action="#" id="contact-form">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Nama Lengkap <span>*</span></label>
                                            <input type="text" name="username" placeholder="Masukkan nama anda"
                                                required>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>No. HP <span>*</span></label>
                                            <input type="text" name="phone" placeholder="Contoh: 081234567890"
                                                required>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <label>Email <span>*</span></label>
                                            <input type="email" name="email" placeholder="Email aktif" required>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <label>Subjek Pesan <span>*</span></label>
                                            <input type="text" name="subject" placeholder="Subjek" required>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <label>Pesan <span>*</span></label>
                                            <textarea name="message" placeholder="Tuliskan pesan anda di sini..." required></textarea>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                            <button type="submit" class="theme-btn btn-one" name="submit-form">Kirim
                                                Pesan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- contact-section end -->

        <!-- google-map -->
        <section class="google-map pb_80">
            <div class="auto-container">
                <div class="inner-container">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d203.66428749450935!2d112.70299135493318!3d-7.726336328859577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1spasar%20desa%20pakukerto!5e1!3m2!1sid!2sid!4v1753984336283!5m2!1sid!2sid"
                        width="100%" height="500" frameborder="0" style="border:0; width: 100%"
                        allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </section>
        <!-- google-map end -->

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
    <script src="http://127.0.0.1:8000/LandingPage/assets/js/jquery.js"></script>
    <script src="http://127.0.0.1:8000/LandingPage/assets/js/bootstrap.min.js"></script>
    <script src="http://127.0.0.1:8000/LandingPage/assets/js/owl.js"></script>
    <script src="http://127.0.0.1:8000/LandingPage/assets/js/wow.js"></script>
    <script src="http://127.0.0.1:8000/LandingPage/assets/js/validation.js"></script>
    <script src="http://127.0.0.1:8000/LandingPage/assets/js/jquery.fancybox.js"></script>
    <script src="http://127.0.0.1:8000/LandingPage/assets/js/appear.js"></script>
    <script src="http://127.0.0.1:8000/LandingPage/assets/js/isotope.js"></script>
    <script src="http://127.0.0.1:8000/LandingPage/assets/js/parallax-scroll.js"></script>
    <script src="http://127.0.0.1:8000/LandingPage/assets/js/jquery.nice-select.min.js"></script>
    <script src="http://127.0.0.1:8000/LandingPage/assets/js/scrolltop.min.js"></script>
    <script src="http://127.0.0.1:8000/LandingPage/assets/js/gsap.js"></script>
    <script src="http://127.0.0.1:8000/LandingPage/assets/js/ScrollTrigger.js"></script>
    <script src="http://127.0.0.1:8000/LandingPage/assets/js/SplitText.js"></script>
    <script src="http://127.0.0.1:8000/LandingPage/assets/js/language.js"></script>
    <script src="http://127.0.0.1:8000/LandingPage/assets/js/jquery-ui.js"></script>
    <script src="http://127.0.0.1:8000/LandingPage/assets/js/lenis.min.js"></script>
    <script src="http://127.0.0.1:8000/LandingPage/assets/js/odometer.js"></script>
    <script src="http://127.0.0.1:8000/LandingPage/assets/js/jquery.lettering.min.js"></script>
    <script src="http://127.0.0.1:8000/LandingPage/assets/js/jquery.circleType.js"></script>

    <!-- main-js -->
    <script src="http://127.0.0.1:8000/LandingPage/assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->

<!-- Mirrored from jobaway.pixcelsthemes.com/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Jul 2025 14:03:58 GMT -->

</html>
