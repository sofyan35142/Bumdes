<!DOCTYPE html>
<html lang="en">

<head>
    @include('Landingpage.layout.head')
</head>

<body>
    <div class="boxed_wrapper ltr">

        @include('Landingpage.layout.preloader')

        <!-- page-direction -->
        <div class="page_direction">
            <div class="demo-rtl direction_switch"><button class="rtl">RTL</button></div>
            <div class="demo-ltr direction_switch"><button class="ltr">LTR</button></div>
        </div>

        @include('Landingpage.layout.search')
        @include('Landingpage.layout.header')

        <!-- page-title -->
        <section class="page-title centred pt_110">
            <div class="auto-container">
                <div class="content-box">
                    <h1>Struktur Organisasi</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Beranda</a></li>
                        <li>-</li>
                        <li>Struktur Organisasi</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- team-section -->
        <section class="team-section centred pt_110 pb_70">
            <div class="pattern-layer"
                style="background-image: url(http://127.0.0.1:8000/Landingpage/assets/images/shape/shape-2.png);"></div>
            <div class="auto-container">
                <div class="sec-title pb_60 sec-title-animation animation-style2">
                    <span class="sub-title mb_10 title-animation">Struktur Organisasi</span>
                    <h2 class="title-animation">BUMDes Desa Pakukerto</h2>
                </div>
                <div class="row clearfix">
                    <!-- Anggota Struktur -->
                    <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated" data-wow-delay="00ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img
                                            src="http://127.0.0.1:8000/Landingpage/assets/images/team/team-1.jpg"
                                            alt=""></figure>
                                    <figure class="overlay-image"><img
                                            src="http://127.0.0.1:8000/Landingpage/assets/images/team/team-1.jpg"
                                            alt=""></figure>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="#">Ravlindo Pratama</a></h3>
                                    <span class="designation">Ketua BUMDes</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated" data-wow-delay="200ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img
                                            src="http://127.0.0.1:8000/Landingpage/assets/images/team/team-2.jpg"
                                            alt=""></figure>
                                    <figure class="overlay-image"><img
                                            src="http://127.0.0.1:8000/Landingpage/assets/images/team/team-2.jpg"
                                            alt=""></figure>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="#">Dino Maulana</a></h3>
                                    <span class="designation">Sekretaris</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated" data-wow-delay="400ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img
                                            src="http://127.0.0.1:8000/Landingpage/assets/images/team/team-3.jpg"
                                            alt=""></figure>
                                    <figure class="overlay-image"><img
                                            src="http://127.0.0.1:8000/Landingpage/assets/images/team/team-3.jpg"
                                            alt=""></figure>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="#">Zaki Almukhtarom</a></h3>
                                    <span class="designation">Bendahara</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated" data-wow-delay="600ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img
                                            src="http://127.0.0.1:8000/Landingpage/assets/images/team/team-4.jpg"
                                            alt=""></figure>
                                    <figure class="overlay-image"><img
                                            src="http://127.0.0.1:8000/Landingpage/assets/images/team/team-4.jpg"
                                            alt=""></figure>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="#">Sofyan Hidayat</a></h3>
                                    <span class="designation">Koordinator Usaha</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated" data-wow-delay="00ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img
                                            src="http://127.0.0.1:8000/Landingpage/assets/images/team/team-5.jpg"
                                            alt=""></figure>
                                    <figure class="overlay-image"><img
                                            src="http://127.0.0.1:8000/Landingpage/assets/images/team/team-5.jpg"
                                            alt=""></figure>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="#">Daffa Ramadhan</a></h3>
                                    <span class="designation">Staf Administrasi</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- join-section -->
        <section class="join-section centred pt_120 pb_120">
            <div class="auto-container">
                <div class="content-box">
                    <div class="sec-title pb_20 sec-title-animation animation-style2">
                        <span class="sub-title mb_10 title-animation">BUMDes Desa Pakukerto</span>
                        <h2 class="title-animation">Bersama Membangun Desa, Bersama BUMDes</h2>
                    </div>
                    <div class="text-box">
                        <p>BUMDes adalah motor penggerak ekonomi desa. Bergabunglah bersama kami dalam membangun usaha
                            mandiri dan berkelanjutan untuk kesejahteraan warga.</p>
                        <a href="contact.html" class="theme-btn btn-one">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </section>

        @include('Landingpage.layout.footer')

        <div class="scroll-to-top">
            <svg class="scroll-top-inner" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>

    </div>

    @include('Landingpage.layout.scripts')
</body>

</html>
