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
                <div class="nav-logo"><a href="index.html"><img
                            src="http://127.0.0.1:8000/Landingpage/assets/images/logo-2.png" alt=""
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
                                    <!-- Visi -->
                                    <li class="accordion block active-block">
                                        <div class="acc-btn active">
                                            <div class="icon-box"><i class="icon-21"></i></div>
                                            <h4>Visi BUMDes</h4>
                                        </div>
                                        <div class="acc-content current">
                                            <div class="content">
                                                <p>{{ $data->visi }}</p>
                                            </div>
                                        </div>
                                    </li>

                                    <!-- Misi -->
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <div class="icon-box"><i class="icon-21"></i></div>
                                            <h4>Misi BUMDes</h4>
                                        </div>
                                        <div class="acc-content">
                                            <div class="content">
                                                @foreach ($data->misi as $index => $misi)
                                                    <p>{{ $index + 1 }}. {{ $misi }}</p>
                                                @endforeach
                                            </div>
                                        </div>
                                    </li>

                                    <!-- Tujuan -->
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <div class="icon-box"><i class="icon-21"></i></div>
                                            <h4>Tujuan BUMDes</h4>
                                        </div>
                                        <div class="acc-content">
                                            <div class="content">
                                                @foreach ($data->tujuan as $index => $tujuan)
                                                    <p>{{ $index + 1 }}. {{ $tujuan }}</p>
                                                @endforeach
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Gambar -->
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image-box ml_70">
                            <figure class="image image-hov-one">
                                <img src="{{ asset($data->gambar_visi_misi) }}" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- download-section -->
        <section class="download-section alternat-3 pb_120">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="pattern-layer"
                        style="background-image: url('{{ asset('landingpage/assets/images/shape/shape-20.png') }}');">
                    </div>
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                            <div class="content-box">
                                @php
                                    $judul = explode(' ', $book->judul, 2);
                                @endphp
                                <h2>{{ $judul[0] }}
                                    @if (isset($judul[1]))
                                        <span>{{ $judul[1] }}</span>
                                    @endif
                                </h2>
                                <ul class="list-item mb_30">
                                    {!! $book->points !!}
                                </ul>
                                <a type="button" href="{{ asset($book->file_ebook) }}" download
                                    class="theme-btn btn-one">Download E-book</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 image-column">
                            <div class="image-box">
                                <figure class="image">
                                    <img src="{{ asset($book->gambar) }}" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- download-section end -->
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
