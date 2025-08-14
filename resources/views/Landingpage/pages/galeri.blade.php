<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from jobaway.pixcelsthemes.com/portfolio.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Jul 2025 14:03:45 GMT -->
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
                    <h1>Galery BumDes</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="#">Home</a></li>
                        <li>-</li>
                        <li>Galery BumDes</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- portfolio-section -->
        <section class="portfolio-section centred pt_110 pb_120">
            <div class="auto-container">
                <div class="sec-title pb_60 sec-title-animation animation-style2">
                    <span class="sub-title mb_10 title-animation">Foto & Video</span>
                    <h2 class="title-animation">GALERY BUMDES PAKUKERTO</h2>
                </div>
                <div class="sortable-masonry">
                    <div class="filters mb_60">
                        <ul class="filter-tabs filter-btns">
                            <li class="active filter" data-role="button" data-filter=".all">View All</li>
                            <li class="filter" data-role="button" data-filter=".consulting">Foto</li>
                            <li class="filter" data-role="button" data-filter=".market">Video</li>
                        </ul>
                    </div>
                    <div class="items-container row clearfix">
                        @foreach ($galeri as $item)
                            <div
                                class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all
                {{ $item->tipe === 'foto' ? 'consulting' : 'market' }}">
                                <div class="portfolio-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box">
                                            @if ($item->tipe === 'foto')
                                                <img src="{{ asset('Galery/' . $item->foto_path) }}" alt="">
                                            @elseif($item->tipe === 'video')
                                                @php
                                                    $link = $item->link_video;
                                                    $embedLink = null;

                                                    // Deteksi YouTube
                                                    if (
                                                        preg_match('/youtu\.be\/([^\?]+)/', $link, $m) ||
                                                        preg_match('/v=([^&]+)/', $link, $m)
                                                    ) {
                                                        $embedLink = 'https://www.youtube.com/embed/' . $m[1];
                                                    }
                                                    // Deteksi Vimeo
                                                    elseif (preg_match('/vimeo\.com\/(\d+)/', $link, $m)) {
                                                        $embedLink = 'https://player.vimeo.com/video/' . $m[1];
                                                    }
                                                @endphp

                                                @if ($embedLink)
                                                    <iframe width="100%" height="200" src="{{ $embedLink }}"
                                                        frameborder="0" allowfullscreen></iframe>
                                                @else
                                                    <video width="100%" height="200" controls>
                                                        <source src="{{ asset('storage/' . $item->file) }}"
                                                            type="video/mp4">
                                                    </video>
                                                @endif
                                            @endif
                                        </figure>

                                        <div class="content-box">
                                            <span>{{ ucfirst($item->tipe) }}</span>
                                            <h3>{{ $item->judul }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="pt_20">
                    {{ $galeri->links('vendor.pagination.custom') }}
                </div>
            </div>
        </section>
        <!-- portfolio-section end -->




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


    <!-- jequery plugins -->
    @include('Landingpage.layout.scripts')

</body><!-- End of .page_wrapper -->

<!-- Mirrored from jobaway.pixcelsthemes.com/portfolio.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Jul 2025 14:03:47 GMT -->

</html>
