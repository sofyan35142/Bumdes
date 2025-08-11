<!DOCTYPE html>
<html lang="en">

<head>
    @include('Landingpage.layout.head')
</head>


<body>

    <div class="boxed_wrapper ltr">
        @include('Landingpage.layout.preloader')
        
        <div id="search-popup" class="search-popup">
            <div class="popup-inner">
                <div class="upper-box">
                    <figure class="logo-box"><a href="index.html"><img
                                src="http://127.0.0.1:8000/Landingpage/assets/images/logo.png" alt=""></a>
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
                                        placeholder="Ketik kata kunci Anda dan tekan" required>
                                    <button type="submit"><i class="icon-1"></i></button>
                                </fieldset>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        @include('Landingpage.layout.header')
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img
                            src="http://127.0.0.1:8000/Landingpage/assets/images/logo-2.png" alt=""
                            title=""></a></div>
                <div class="menu-outer"></div>
                <div class="contact-info">
                    <h4>Informasi Kontak</h4>
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
        <section class="page-title centred pt_110">
            <div class="auto-container">
                <div class="content-box">
                    <h1>Tentang Bumdes</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Beranda</a></li>
                        <li>-</li>
                        <li>Tentang Bumdes</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="about-style-four pt_120 pb_120">
            <div class="auto-container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_two">
                            <div class="image-inner">
                                <div class="image-box mr_15">
                                    <figure class="image image-1 mb_15"><img
                                            src="http://127.0.0.1:8000/Landingpage/assets/images/resource/about-3.jpg"
                                            alt=""></figure>
                                    <figure class="image image-2"><img
                                            src="http://127.0.0.1:8000/Landingpage/assets/images/resource/about-4.jpg"
                                            alt=""></figure>
                                </div>
                                <div class="image-box">
                                    <figure class="image image-3 mb_15"><img
                                            src="http://127.0.0.1:8000/Landingpage/assets/images/resource/about-5.jpg"
                                            alt=""></figure>
                                    <figure class="image image-4"><img
                                            src="http://127.0.0.1:8000/Landingpage/assets/images/resource/about-6.jpg"
                                            alt=""></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_five">
                            <div class="content-box">
                                <div class="sec-title pb_40 sec-title-animation animation-style2">
                                    <span class="sub-title mb_10 title-animation">Tentang Kami</span>
                                    <h2 class="title-animation">Bumdes <span>Terdepan</span></h2>
                                    <p class="title-animation">Kami berkomitmen untuk menjadi penggerak ekonomi desa
                                        yang paling dicintai, dengan menyediakan solusi terbaik untuk masyarakat dan
                                        bisnis.</p>
                                </div>
                                <div class="inner-box clearfix">
                                    <div class="single-item">
                                        <div class="icon-box"><i class="icon-29"></i></div>
                                        <h4><a href="#">Administrasi Mudah</a></h4>
                                        <span>Sepanjang 2023</span>
                                    </div>
                                    <div class="single-item">
                                        <div class="icon-box"><i class="icon-30"></i></div>
                                        <h4><a href="#">Dipercaya Masyarakat</a></h4>
                                        <span>Sepanjang 2023</span>
                                    </div>
                                    <div class="single-item">
                                        <div class="icon-box"><i class="icon-31"></i></div>
                                        <h4><a href="#">Terdepan</a></h4>
                                        <span>Sepanjang 2023</span>
                                    </div>
                                    <div class="single-item">
                                        <div class="icon-box"><i class="icon-32"></i></div>
                                        <h4><a href="#">Dukungan Terbaik</a></h4>
                                        <span>Sepanjang 2023</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="clients-section home-3">
            <div class="bg-color"></div>
            <div class="auto-container">
                <div class="inner-container">
                    <div class="clients-box">
                        <figure class="clients-logo"><a href="index.html"><img
                                    src="http://127.0.0.1:8000/Landingpage/assets/images/clients/clients-1.png"
                                    alt=""></a></figure>
                        <figure class="overlay-logo"><a href="index.html"><img
                                    src="http://127.0.0.1:8000/Landingpage/assets/images/clients/clients-1.png"
                                    alt=""></a></figure>
                    </div>
                    <div class="clients-box">
                        <figure class="clients-logo"><a href="index.html"><img
                                    src="http://127.0.0.1:8000/Landingpage/assets/images/clients/clients-2.png"
                                    alt=""></a></figure>
                        <figure class="overlay-logo"><a href="index.html"><img
                                    src="http://127.0.0.1:8000/Landingpage/assets/images/clients/clients-2.png"
                                    alt=""></a></figure>
                    </div>
                    <div class="clients-box">
                        <figure class="clients-logo"><a href="index.html"><img
                                    src="http://127.0.0.1:8000/Landingpage/assets/images/clients/clients-3.png"
                                    alt=""></a></figure>
                        <figure class="overlay-logo"><a href="index.html"><img
                                    src="http://127.0.0.1:8000/Landingpage/assets/images/clients/clients-3.png"
                                    alt=""></a></figure>
                    </div>
                    <div class="clients-box">
                        <figure class="clients-logo"><a href="index.html"><img
                                    src="http://127.0.0.1:8000/Landingpage/assets/images/clients/clients-4.png"
                                    alt=""></a></figure>
                        <figure class="overlay-logo"><a href="index.html"><img
                                    src="http://127.0.0.1:8000/Landingpage/assets/images/clients/clients-4.png"
                                    alt=""></a></figure>
                    </div>
                    <div class="clients-box">
                        <figure class="clients-logo"><a href="index.html"><img
                                    src="http://127.0.0.1:8000/Landingpage/assets/images/clients/clients-5.png"
                                    alt=""></a></figure>
                        <figure class="overlay-logo"><a href="index.html"><img
                                    src="http://127.0.0.1:8000/Landingpage/assets/images/clients/clients-5.png"
                                    alt=""></a></figure>
                    </div>
                </div>
            </div>
        </section>
        <section class="chooseus-section alternat-3 pt_120 pb_90">
            <div class="pattern-layer"
                style="background-image: url(http://127.0.0.1:8000/Landingpage/assets/images/shape/shape-23.png);">
            </div>
            <div class="auto-container">
                <div class="sec-title light centred pb_60 sec-title-animation animation-style2">
                    <span class="sub-title mb_10 title-animation">Mengapa Kami</span>
                    <h2 class="title-animation">Mengapa Memilih Bumdes Kami</h2>
                </div>
                <div class="inner-container">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                            <div class="chooseus-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-4"></i></div>
                                    <h3><a href="index.html">Meningkatkan Perekonomian</a></h3>
                                    <p>Kami fokus pada program yang meningkatkan pendapatan dan kesejahteraan masyarakat
                                        desa.</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                            <div class="chooseus-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-5"></i></div>
                                    <h3><a href="index.html">Tata Kelola Transparan</a></h3>
                                    <p>Seluruh operasional kami dijalankan dengan prinsip transparansi dan akuntabilitas
                                        untuk kepercayaan publik.</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                            <div class="chooseus-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-6"></i></div>
                                    <h3><a href="index.html">Inovasi Berkelanjutan</a></h3>
                                    <p>Kami selalu berinovasi untuk menciptakan produk dan layanan baru yang relevan
                                        dengan kebutuhan desa.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="industries-style-four pt_120 pb_90">
            <div class="auto-container">
                <div class="sec-title centred pb_60 sec-title-animation animation-style2">
                    <span class="sub-title mb_10 title-animation">Sektor</span>
                    <h2 class="title-animation">Sektor Usaha Kami</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                        <div class="industries-block-two">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-9"></i></div>
                                <h3><a href="index.html">Pertanian</a></h3>
                                <p>2853 Staf</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                        <div class="industries-block-two">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-10"></i></div>
                                <h3><a href="index.html">Pariwisata</a></h3>
                                <p>2256 Staf</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                        <div class="industries-block-two">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-11"></i></div>
                                <h3><a href="index.html">Kuliner</a></h3>
                                <p>1408 Staf</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                        <div class="industries-block-two">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-12"></i></div>
                                <h3><a href="index.html">Kerajinan</a></h3>
                                <p>1740 Staf</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                        <div class="industries-block-two">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-13"></i></div>
                                <h3><a href="index.html">Jasa</a></h3>
                                <p>3948 Staf</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                        <div class="industries-block-two">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-14"></i></div>
                                <h3><a href="index.html">Perdagangan</a></h3>
                                <p>2984 Staf</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                        <div class="industries-block-two">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-15"></i></div>
                                <h3><a href="index.html">Peternakan</a></h3>
                                <p>4509 Staf</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                        <div class="industries-block-two">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-16"></i></div>
                                <h3><a href="index.html">Logistik</a></h3>
                                <p>1039 Staf</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="team-section z_1 centred pt_0 pb_0">
            <div class="auto-container">
                <div class="sec-title pb_60 sec-title-animation animation-style2">
                    <span class="sub-title mb_10 title-animation">Tim Kami</span>
                    <h2 class="title-animation">Kenali Pengurus Kami</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated" data-wow-delay="00ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img
                                            src="http://127.0.0.1:8000/Landingpage/assets/images/team/team-1.jpg"
                                            alt="">
                                    </figure>
                                    <figure class="overlay-image"><img
                                            src="http://127.0.0.1:8000/Landingpage/assets/images/team/team-1.jpg"
                                            alt=""></figure>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="index.html">Bapak Ahmad</a></h3>
                                    <span class="designation">Kepala Bumdes</span>
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
                                            alt="">
                                    </figure>
                                    <figure class="overlay-image"><img
                                            src="http://127.0.0.1:8000/Landingpage/assets/images/team/team-2.jpg"
                                            alt=""></figure>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="index.html">Ibu Budiarti</a></h3>
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
                                            alt="">
                                    </figure>
                                    <figure class="overlay-image"><img
                                            src="http://127.0.0.1:8000/Landingpage/assets/images/team/team-3.jpg"
                                            alt=""></figure>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="index.html">Pak Yanto</a></h3>
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
                                            alt="">
                                    </figure>
                                    <figure class="overlay-image"><img
                                            src="http://127.0.0.1:8000/Landingpage/assets/images/team/team-4.jpg"
                                            alt=""></figure>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="index.html">Ibu Susi</a></h3>
                                    <span class="designation">Manajer Pemasaran</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="testimonial-style-two pt_70 pb_120">
            <div class="pattern-layer"
                style="background-image: url(http://127.0.0.1:8000/Landingpage/assets/images/shape/shape-17.png);">
            </div>
            <div class="auto-container">
                <div class="sec-title centred pb_60 sec-title-animation animation-style2">
                    <span class="sub-title mb_10 title-animation">Testimoni</span>
                    <h2 class="title-animation">Cinta Dari Masyarakat</h2>
                </div>
                <div class="two-item-carousel owl-carousel owl-theme owl-nav-none">
                    <div class="testimonial-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><img
                                    src="http://127.0.0.1:8000/Landingpage/assets/images/icons/icon-11.png"
                                    alt=""></div>
                            <div class="author-box">
                                <figure class="thumb-box"><img
                                        src="http://127.0.0.1:8000/Landingpage/assets/images/resource/testimonial-1.png"
                                        alt=""></figure>
                                <h4>Ibu Siti</h4>
                                <span class="designation">Anggota, Desa Makmur</span>
                            </div>
                            <p>Bumdes ini sangat membantu usaha kecil saya. Pelayanannya cepat dan timnya sangat
                                suportif. Saya merasa bangga menjadi bagian dari Bumdes ini.</p>
                        </div>
                    </div>
                    <div class="testimonial-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><img
                                    src="http://127.0.0.1:8000/Landingpage/assets/images/icons/icon-11.png"
                                    alt=""></div>
                            <div class="author-box">
                                <figure class="thumb-box"><img
                                        src="http://127.0.0.1:8000/Landingpage/assets/images/resource/testimonial-3.png"
                                        alt=""></figure>
                                <h4>Bapak Widodo</h4>
                                <span class="designation">Pelaku Usaha, Desa Sejahtera</span>
                            </div>
                            <p>Saya baru-baru ini bekerja sama dengan Bumdes ini, dan saya sangat terkesan dengan proses
                                yang lancar dan efisien. Mereka benar-benar mengutamakan kemajuan desa.</p>
                        </div>
                    </div>
                    <div class="testimonial-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><img
                                    src="http://127.0.0.1:8000/Landingpage/assets/images/icons/icon-11.png"
                                    alt=""></div>
                            <div class="author-box">
                                <figure class="thumb-box"><img
                                        src="http://127.0.0.1:8000/Landingpage/assets/images/resource/testimonial-1.png"
                                        alt=""></figure>
                                <h4>Ibu Siti</h4>
                                <span class="designation">Anggota, Desa Makmur</span>
                            </div>
                            <p>Bumdes ini sangat membantu usaha kecil saya. Pelayanannya cepat dan timnya sangat
                                suportif. Saya merasa bangga menjadi bagian dari Bumdes ini.</p>
                        </div>
                    </div>
                    <div class="testimonial-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><img
                                    src="http://127.0.0.1:8000/Landingpage/assets/images/icons/icon-11.png"
                                    alt=""></div>
                            <div class="author-box">
                                <figure class="thumb-box"><img
                                        src="http://127.0.0.1:8000/Landingpage/assets/images/resource/testimonial-3.png"
                                        alt=""></figure>
                                <h4>Bapak Widodo</h4>
                                <span class="designation">Pelaku Usaha, Desa Sejahtera</span>
                            </div>
                            <p>Saya baru-baru ini bekerja sama dengan Bumdes ini, dan saya sangat terkesan dengan proses
                                yang lancar dan efisien. Mereka benar-benar mengutamakan kemajuan desa.</p>
                        </div>
                    </div>
                    <div class="testimonial-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><img
                                    src="http://127.0.0.1:8000/Landingpage/assets/images/icons/icon-11.png"
                                    alt=""></div>
                            <div class="author-box">
                                <figure class="thumb-box"><img
                                        src="http://127.0.0.1:8000/Landingpage/assets/images/resource/testimonial-1.png"
                                        alt=""></figure>
                                <h4>Ibu Siti</h4>
                                <span class="designation">Anggota, Desa Makmur</span>
                            </div>
                            <p>Bumdes ini sangat membantu usaha kecil saya. Pelayanannya cepat dan timnya sangat
                                suportif. Saya merasa bangga menjadi bagian dari Bumdes ini.</p>
                        </div>
                    </div>
                    <div class="testimonial-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><img
                                    src="http://127.0.0.1:8000/Landingpage/assets/images/icons/icon-11.png"
                                    alt=""></div>
                            <div class="author-box">
                                <figure class="thumb-box"><img
                                        src="http://127.0.0.1:8000/Landingpage/assets/images/resource/testimonial-3.png"
                                        alt=""></figure>
                                <h4>Bapak Widodo</h4>
                                <span class="designation">Pelaku Usaha, Desa Sejahtera</span>
                            </div>
                            <p>Saya baru-baru ini bekerja sama dengan Bumdes ini, dan saya sangat terkesan dengan proses
                                yang lancar dan efisien. Mereka benar-benar mengutamakan kemajuan desa.</p>
                        </div>
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
