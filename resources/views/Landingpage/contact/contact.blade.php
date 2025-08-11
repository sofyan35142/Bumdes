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
        @include('Landingpage.layout.mobilemenu')
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
                        <div class="col-lg-12 col-md-12 col-sm-12 info-column">
                            <div class="info-box" style="padding: 3pc">
                                <h3>Informasi Kontak</h3>
                                <div class="row">
                                    <div class="col-md-4 mb-4">
                                        <div class="single-item">
                                            <div class="icon-box mb-2">
                                                <img src="http://127.0.0.1:8000/LandingPage/assets/images/icons/icon-27.png"
                                                    alt="">
                                            </div>
                                            <h4>Kantor BUMDes</h4>
                                            <p>{{$data->alamat}}</p>
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-4">
                                        <div class="single-item">
                                            <div class="icon-box mb-2">
                                                <img src="http://127.0.0.1:8000/LandingPage/assets/images/icons/icon-28.png"
                                                    alt="">
                                            </div>
                                            <h4>Email</h4>
                                            <p><a href="mailto:{{$data->email}}">{{$data->email}}</a>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-4">
                                        <div class="single-item">
                                            <div class="icon-box mb-2">
                                                <img src="http://127.0.0.1:8000/LandingPage/assets/images/icons/icon-29.png"
                                                    alt="">
                                            </div>
                                            <h4>Nomor Telepon</h4>
                                            <p><a href="tel:+6281234567890">{{$data->telepon}}</a></p>
                                        </div>
                                    </div>
                                </div>
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
                        src="{{$data->iframe_maps}}"
                        width="100%" height="500" frameborder="0" style="border:0; width: 100%" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
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


    @include('Landingpage.layout.scripts')

</body>

</html>
