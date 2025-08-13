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
        @include('Landingpage.layout.mobilemenu')
        <!-- End Mobile Menu -->


        <!-- page-title -->
        <section class="page-title centred pt_110">
            <div class="auto-container">
                <div class="content-box">
                    <h1>Kegiatan Detail</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="/">Home</a></li>
                        <li>-</li>
                        <li>Kegiatan Detail</li>
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
                                            <li><span>{{ \Carbon\Carbon::parse($detailblog->tanggal_kegiatan)->format('d M Y') }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="text-box pt_25 mb_50">
                                        <p class="mb_30">{!! nl2br(e($detailblog->deskripsi_kegiatan)) !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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

                            {{-- <div class="sidebar-widget archives-widget">
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
                            </div> --}}
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
