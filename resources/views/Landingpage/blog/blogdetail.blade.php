<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from jobaway.pixcelsthemes.com/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Jul 2025 14:03:57 GMT -->

@include('Landingpage.layout.head')


<!-- page wrapper -->

<body>

    <div class="boxed_wrapper ltr">


        <!-- preloader -->
        @include('Landingpage.layout.preloader')
        <!-- preloader end -->


        <!-- page-direction -->

        <!-- page-direction end -->


        <!--Search Popup-->


        <!-- main header -->
        @include('Landingpage.layout.header')
        <!-- main-header end -->


        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img
                            src="{{ asset('/Landingpage/assets/images/logo-2.png') }}" alt=""
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
                    <h1>Blog Details</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>-</li>
                        <li>Blog Details</li>
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
                            <div class="sidebar-widget post-widget mb_60">
                                <div class="widget-title mb_20">
                                    <h3>Latest Posts</h3>
                                </div>
                                <div class="post-inner">
                                    @foreach ($latestKegiatan as $k)
                                        <div class="post">
                                            <figure class="post-thumb">
                                                <a href="{{ route('blogdetail', $k->id) }}">
                                                    <img src="{{ asset('foto kegiatan BumDes/' . $k->foto_kegiatan) }}"
                                                        alt="{{ $k->Judul_Kegiatan }}"
                                                        style="width: 100px; height: 70px; object-fit: cover;">
                                                </a>
                                            </figure>
                                            <h6>
                                                <a href="{{ route('blogdetail', $k->id) }}">
                                                    {{ Str::limit($k->Judul_Kegiatan, 40) }}
                                                </a>
                                            </h6>
                                            <span class="post-date">
                                                {{ \Carbon\Carbon::parse($k->tanggal_kegiatan)->format('d M Y') }}
                                            </span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            {{-- <div class="sidebar-widget tags-widget mb_45">
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
                            </div> --}}
                            <div class="sidebar-widget archives-widget">
                                <div class="widget-title mb_11">
                                    <h3>Archives</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="archives-list clearfix">
                                        <li><a href="blog-details.html"><i class="fal fa-angle-right"></i>December 20,
                                                2022<span>(09)</span></a></li>
                                        <li><a href="blog-details.html"><i class="fal fa-angle-right"></i>December 26,
                                                2022<span>(20)</span></a></li>
                                        <li><a href="blog-details.html"><i class="fal fa-angle-right"></i>December 26,
                                                2022<span>(25)</span></a></li>
                                        <li><a href="blog-details.html"><i class="fal fa-angle-right"></i>December 26,
                                                2022<span>(06)</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="download-widget mr_40">
                            <div class="shape"
                                style="background-image: url({{ asset('/Landingpage/assets/images/shape/shape-24.png') }});">
                            </div>
                            <div class="inner-box">
                                <figure class="image-box"><img
                                        src="{{ asset('/Landingpage/assets/images/resource/book-3.png') }}"
                                        alt=""></figure>
                                <h4>The 2024 guide for Optimal Content <span>Management</span></h4>
                                <button type="button" class="theme-btn btn-one">Download E-book</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="blog-details-content">
                            <div class="news-block-two">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img
                                                src="{{ asset('foto kegiatan BumDes/' . $detailblog->foto_kegiatan) }}"
                                                alt=""></figure>
                                    </div>
                                    <div class="lower-content">
                                        <span class="category">Business</span>
                                        <h3>{{ $detailblog->Judul_Kegiatan }}</h3>
                                        <ul class="post-info">
                                            <li>By <a href="blog-details.html">Ema Chawal</a></li>
                                            <li><span>{{ \Carbon\Carbon::parse($detailblog->tanggal_kegiatan)->format('d M Y') }}</span></li>
                                        </ul>
                                    </div>
                                    <div class="text-box pt_25 mb_50">
                                        <p class="mb_30">{!! nl2br(e($detailblog->deskripsi_kegiatan)) !!}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="two-column">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                        <figure class="image-box mb_25"><img
                                                src="{{ asset('/Landingpage/assets/images/news/news-17.jpg') }}"
                                                alt=""></figure>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                        <figure class="image-box mb_25"><img
                                                src="{{ asset('/Landingpage/assets/images/news/news-18.jpg') }}"
                                                alt=""></figure>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="content-one mb_40">
                                <h3>Hiring & Onboarding Process</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                    the release of Letraset sheets containing.</p>
                                <h4>Your Gateway to Hiring Success</h4>
                                <ul class="list-item clearfix">
                                    <li>The wise man therefore always holds in these matters</li>
                                    <li>Have to be repudiated and annoyances accepted.</li>
                                    <li>Rejects pleasures to secure other greater pleasures, or else</li>
                                </ul>
                            </div>
                            <div class="post-share-option mb_60">
                                <ul class="tags-list">
                                    <li>
                                        <h6>Tags:</h6>
                                    </li>
                                    <li><a href="blog-details.html">Careers</a></li>
                                    <li><a href="blog-details.html">Demo</a></li>
                                </ul>
                                <ul class="social-links">
                                    <li>
                                        <h6>Share This :</h6>
                                    </li>
                                    <li><a href="blog-details.html"><i class="icon-22"></i></a></li>
                                    <li><a href="blog-details.html"><i class="icon-23"></i></a></li>
                                    <li><a href="blog-details.html"><i class="icon-24"></i></a></li>
                                </ul>
                            </div>
                            <div class="comment-box">
                                <div class="group-title mb_25">
                                    <h3>Write Comment</h3>
                                </div>
                                <div class="form-inner">
                                    <form method="post" action="https://jobaway.pixcelsthemes.com/blog-details.html">
                                        <div class="row clearfix">
                                            <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                                <div class="form-group">
                                                    <label>Name <span>*</span></label>
                                                    <input type="text" name="name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                                <div class="form-group">
                                                    <label>Email <span>*</span></label>
                                                    <input type="email" name="email">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 single-column">
                                                <div class="form-group">
                                                    <label>Message <span>*</span></label>
                                                    <textarea name="message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 single-column">
                                                <div class="check-box mb_35">
                                                    <input class="check" type="checkbox" id="checkbox9">
                                                    <label for="checkbox9">Save my name, email, and website in this
                                                        browser for the next time I comment.</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 single-column">
                                                <div class="message-btn">
                                                    <button type="submit" class="theme-btn btn-one">Submit
                                                        Review</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- sidebar-page-container end -->


        <!-- subscribe-style-two -->

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

<!-- Mirrored from jobaway.pixcelsthemes.com/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Jul 2025 14:03:57 GMT -->

</html>
