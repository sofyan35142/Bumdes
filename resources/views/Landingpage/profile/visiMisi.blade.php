<!DOCTYPE html>
<html lang="en">

<head>
    @include('Landingpage.layout.head')
</head>


<body>

    <div class="boxed_wrapper ltr">


        @include('Landingpage.layout.preloader')
        <div class="page_direction">
            <div class="demo-rtl direction_switch"><button class="rtl">RTL</button></div>
            <div class="demo-ltr direction_switch"><button class="ltr">LTR</button></div>
        </div>
        <div id="search-popup" class="search-popup">
            <div class="popup-inner">
                <div class="upper-box">
                    <figure class="logo-box"><a href="index.html"><img src="http://127.0.0.1:8000/Landingpage/assets/images/logo.png" alt=""></a>
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


        @include('Landingpage.layout.header')
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="http://127.0.0.1:8000/Landingpage/assets/images/logo-2.png" alt=""
                            title=""></a></div>
                <div class="menu-outer"></div>
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
        <section class="page-title centred pt_110">
            <div class="auto-container">
                <div class="content-box">
                    <h1>Visi dan Misi BUMDes</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>-</li>
                        <li>Visi dan Misi BUMDes</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="testimonial-page-section pt_110 pb_120">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_three">
                            <div class="content-box">
                                <div class="sec-title pb_30 sec-title-animation animation-style2">
                                    <span class="sub-title mb_10 title-animation">Visi dan Misi Kami</span>
                                    <h2 class="title-animation">Visi, Misi dan Tujuan BUMDes</h2>
                                </div>
                                <ul class="accordion-box">
                                    <li class="accordion block active-block">
                                        <div class="acc-btn active">
                                            <div class="icon-box"><i class="icon-21"></i></div>
                                            <h4>Visi BUMDes</h4>
                                        </div>
                                        <div class="acc-content current">
                                            <div class="content">
                                                <p>Menjadi pendorong utama pertumbuhan ekonomi desa dan kesejahteraan masyarakat melalui pengelolaan potensi desa secara profesional, transparan, dan berkelanjutan.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <div class="icon-box"><i class="icon-21"></i></div>
                                            <h4>Misi BUMDes</h4>
                                        </div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <p>1. Menggali, mengelola, dan mengoptimalkan potensi sumber daya alam dan sumber daya manusia desa untuk kesejahteraan bersama.</p>
                                                <p>2. Menciptakan dan mengembangkan unit-unit usaha yang inovatif dan relevan dengan kebutuhan masyarakat desa.</p>
                                                <p>3. Meningkatkan pendapatan asli desa (PADes) untuk mendukung pembangunan desa secara mandiri.</p>
                                                <p>4. Membuka lapangan pekerjaan baru bagi masyarakat desa guna mengurangi tingkat pengangguran.</p>
                                                <p>5. Menjadi jembatan antara masyarakat desa dan pasar, serta menjalin kemitraan yang strategis dengan berbagai pihak.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <div class="icon-box"><i class="icon-21"></i></div>
                                            <h4>Tujuan BUMDes</h4>
                                        </div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <p>1. Meningkatkan perekonomian desa dan pendapatan masyarakat desa.</p>
                                                <p>2. Menjadikan BUMDes sebagai lembaga ekonomi yang solid, profesional, dan berdaya saing.</p>
                                                <p>3. Memperkuat kapasitas kelembagaan desa dalam mengelola aset dan potensi ekonomi.</p>
                                                <p>4. Mendorong kemandirian ekonomi desa dan partisipasi aktif masyarakat dalam pembangunan.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image-box ml_70">
                            <figure class="image image-hov-one"><img src="http://127.0.0.1:8000/visimisi/faq-1.jpg"
                                    alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="download-section alternat-3 pb_120">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-20.png);"></div>
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                            <div class="content-box">
                                <h2>Panduan Praktis Pengelolaan BUMDes yang Sukses dan <span>Berkelanjutan</span></h2>
                                <ul class="list-item mb_30">
                                    <li>Mempelajari langkah-langkah pendirian dan legalitas BUMDes.</li>
                                    <li>Memahami model bisnis yang efektif dan relevan dengan potensi desa.</li>
                                    <li>Strategi pemasaran dan pengembangan produk unggulan BUMDes.</li>
                                </ul>
                                <button type="button" class="theme-btn btn-one">Unduh Panduan</button>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 image-column">
                            <div class="image-box">
                                <figure class="image"><img src="http://127.0.0.1:8000/visimisi/book-2.png" alt="">
                                </figure>
                            </div>
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
