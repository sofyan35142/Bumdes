<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from jobaway.pixcelsthemes.com/service.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Jul 2025 14:03:40 GMT -->
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
        {{-- <section class="page-title centred pt_110">
            <div class="auto-container">
                <div class="content-box">
                    <h1>Our Solutions</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>-</li>
                        <li>Our Solutions</li>
                    </ul>
                </div>
            </div>
        </section> --}}
        <!-- page-title end -->


        <!-- service-section -->
        <section class="service-section centred pt_110 pb_90">
            <div class="auto-container">
                <div class="sec-title pb_60 sec-title-animation animation-style2">
                    <span class="sub-title mb_10 title-animation">LAYANAN UNGGULAN</span>
                    <h2 class="title-animation">Daftar Layanan Unggulan</h2>
                </div>
                <div class="row clearfix">
                    @foreach ($unggulanlist as $unggulan)
                        <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                            <div class="service-block-one wow fadeInUp animated" data-wow-delay="00ms"
                                data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="{{ route('home.detailunggulan', $unggulan->id) }}"><img
                                                    src="{{ asset('foto_layanan_unggulan/' . $unggulan->foto_layanan) }}"
                                                    alt=""></a></figure>
                                        <figure class="overlay-image"><a href="{{ route('home.detailunggulan', $unggulan->id) }}"><img
                                                    src="{{ asset('foto_layanan_unggulan/' . $unggulan->foto_layanan) }}"
                                                    alt=""></a></figure>
                                    </div>
                                    <div class="lower-content">
                                        <h3><a href="{{ route('home.detailunggulan', $unggulan->id) }}">{{ $unggulan->nama_layanan }}</a></h3>
                                        <div
                                            style="
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    ">
                                            {{ \Illuminate\Support\Str::limit(strip_tags($unggulan->deskripsi), 500, '...') }}
                                        </div>
                                        <div class="btn-box"><a href="{{ route('home.detailunggulan', $unggulan->id) }}"
                                                class="theme-btn btn-one">View
                                                Details</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- service-section end -->


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

<!-- Mirrored from jobaway.pixcelsthemes.com/service.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Jul 2025 14:03:41 GMT -->

</html>
