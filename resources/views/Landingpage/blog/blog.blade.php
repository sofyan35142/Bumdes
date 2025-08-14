<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from jobaway.pixcelsthemes.com/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Jul 2025 14:03:53 GMT -->
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
        <div id="search-popup" class="search-popup">
            <div class="popup-inner">
                <div class="upper-box">
                    <figure class="logo-box"><a href="index.html"><img
                                src="{{ asset('LandingPage/') }}assets/images/logo.png" alt=""></a></figure>
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
                    <h1>Blog</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="/">Home</a></li>
                        <li>-</li>
                        <li>Blog</li>
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
                                    <form method="GET" action="{{ route('blog') }}">
                                        <div class="form-group">
                                            <input type="search" name="keyword" placeholder="Search"
                                                value="{{ request('keyword') }}" required>
                                            <button type="submit"><i class="icon-1"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            {{-- <div class="sidebar-widget category-widget mb_50">
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
                            </div> --}}
                            <div class="sidebar-widget post-widget mb_60">
                                <div class="widget-title mb_20">
                                    <h3>Latest Posts</h3>
                                </div>
                                <div class="post-inner">
                                    @foreach ($latestKegiatan as $post)
                                        <div class="post">
                                            <figure class="post-thumb">
                                                <a href="{{ route('blogdetail', $post->id) }}">
                                                    <img src="{{ asset('foto kegiatan BumDes/' . $post->foto_kegiatan) }}"
                                                        alt="{{ $post->Judul_Kegiatan }}"
                                                        style="width: 100px; height: 70px; object-fit: cover;">
                                                </a>
                                            </figure>
                                            <h6>
                                                <a href="{{ route('blogdetail', $post->id) }}">
                                                    {{ Str::limit($post->Judul_Kegiatan, 40) }}
                                                </a>
                                            </h6>
                                            <span class="post-date">
                                                {{ \Carbon\Carbon::parse($post->tanggal_kegiatan)->format('d M Y') }}
                                            </span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                        </div>
                        <div class="download-widget mr_40">
                            <div class="shape"
                                style="background-image: url({{ asset('LandingPage/assets/images/shape/shape-24.png') }});">
                            </div>
                            <div class="inner-box">
                                <figure class="image-box"><img
                                        src="{{ asset($book->gambar) }}"
                                        alt=""></figure>
                                @php
                                    $judul = explode(' ', $book->judul, 2);
                                @endphp
                                <h4>{{ $judul[0] }}
                                    @if (isset($judul[1]))
                                        <span>{{ $judul[1] }}</span>
                                    @endif
                                </h4>
                                <a href="{{ $book->file_ebook }}" class="theme-btn btn-one" download>
                                    Download E-book
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="blog-grid-content">
                            <div class="row clearfix">
                                @foreach ($kegiatan as $kegiatan)
                                    <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                                        <div class="news-block-two wow fadeInUp animated" data-wow-delay="00ms"
                                            data-wow-duration="1500ms">
                                            <div class="inner-box">
                                                <div class="image-box">
                                                    <figure class="image"><a
                                                            href="{{ route('blogdetail', $kegiatan->id) }}"><img
                                                                src="{{ asset('foto kegiatan BumDes/' . $kegiatan->foto_kegiatan) }}"
                                                                alt=""></a></figure>
                                                    <figure class="overlay-image"><a
                                                            href="{{ route('blogdetail', $kegiatan->id) }}"><img
                                                                src="{{ asset('foto kegiatan BumDes/' . $kegiatan->foto_kegiatan) }}"
                                                                alt=""></a></figure>
                                                </div>
                                                <div class="lower-content">
                                                    <span
                                                        class="category">{{ $kegiatan->kategori->nama_kategori ?? '-' }}</span>
                                                    <h3><a
                                                            href="{{ route('blogdetail', $kegiatan->id) }}">{{ $kegiatan->Judul_Kegiatan }}</a>
                                                    </h3>
                                                    <ul class="post-info">
                                                        <li>By <a href="{{ route('blogdetail', $kegiatan->id) }}">Sekertaris</a></li>
                                                        <li><span>{{ $kegiatan->tanggal_kegiatan }}</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                {{-- <div class="col-lg-6 col-md-6 col-sm-12 news-block">
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
                                </div> --}}
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

<!-- Mirrored from jobaway.pixcelsthemes.com/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Jul 2025 14:03:56 GMT -->

</html>
