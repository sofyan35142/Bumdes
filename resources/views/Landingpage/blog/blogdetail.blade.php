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
                    <h1>Detail Kegiatan </h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="/">Home</a></li>
                        <li>-</li>
                        <li>Detail Kegiatan </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- sidebar-page-container -->
        <section class="sidebar-page-container p_relative pt_110 pb_120">
            <div class="auto-container">
                <div class="row clearfix">
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
                                        <span class="category">{{ $detailblog->kategori->nama_kategori ?? '-' }}</span>
                                        <h3>{{ $detailblog->Judul_Kegiatan }}</h3>
                                        <ul class="post-info">
                                            <li>By <a href="#">Sekertaris</a></li>
                                            <li><span>{{ \Carbon\Carbon::parse($detailblog->tanggal_kegiatan)->format('d M Y') }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="text-box pt_25 mb_50">
                                        <p class="mb_30">{{ nl2br(strip_tags($detailblog->deskripsi_kegiatan)) }}</p>
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
                        </div>
                        <div class="download-widget mr_40">
                            <div class="shape"
                                style="background-image: url({{ asset('LandingPage/assets/images/shape/shape-24.png') }});">
                            </div>
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{ asset($book->gambar) }}" alt="">
                                </figure>
                                @php
                                    $judul = explode(' ', $book->judul, 2);
                                @endphp
                                <h4>{{ $judul[0] }}
                                    @if (isset($judul[1]))
                                        <span>{{ $judul[1] }}</span>
                                    @endif
                                </h4>
                                <a href="{{ asset($book->file_ebook) }}" class="theme-btn btn-one" download>
                                    Download E-book
                                </a>
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
