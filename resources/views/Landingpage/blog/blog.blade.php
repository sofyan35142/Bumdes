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
                    <h1>Kegiatan</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="/">Home</a></li>
                        <li>-</li>
                        <li>Kegiatan</li>
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
                                <figure class="image-box"><img src="{{ asset($book->gambar) }}" alt=""></figure>
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
                                @foreach ($kegiatan as $item)
                                    <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                                        <div class="news-block-two wow fadeInUp animated" data-wow-delay="00ms"
                                            data-wow-duration="1500ms">
                                            <div class="inner-box">
                                                <div class="image-box"
                                                    style="height: 15pc; width: 25pc; overflow: hidden;">
                                                    <figure class="image"><a
                                                            href="{{ route('blogdetail', $item->id) }}"><img
                                                                src="{{ asset('foto kegiatan BumDes/' . $item->foto_kegiatan) }}"
                                                                alt=""></a></figure>
                                                    <figure class="overlay-image"><a
                                                            href="{{ route('blogdetail', $item->id) }}"><img
                                                                src="{{ asset('foto kegiatan BumDes/' . $item->foto_kegiatan) }}"
                                                                alt=""></a></figure>
                                                </div>
                                                <div class="lower-content">
                                                    <span
                                                        class="category">{{ $item->kategori->nama_kategori ?? '-' }}</span>
                                                    <h3><a
                                                            href="{{ route('blogdetail', $item->id) }}">{{ $item->Judul_Kegiatan }}</a>
                                                    </h3>
                                                    <ul class="post-info">
                                                        <li>By <a
                                                                href="{{ route('blogdetail', $item->id) }}">Sekertaris</a>
                                                        </li>
                                                        <li><span>{{ $item->tanggal_kegiatan }}</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            {{-- pagination --}}
                            {{ $kegiatan->appends(request()->except('page'))->links('vendor.pagination.custom') }}
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
