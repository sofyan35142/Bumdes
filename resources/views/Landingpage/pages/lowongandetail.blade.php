<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from jobaway.pixcelsthemes.com/job-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Jul 2025 14:03:44 GMT -->

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
                    <figure class="logo-box"><a href="index.html"><img src="assets/images/logo.png" alt=""></a>
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


        <!-- main header -->
        @include('Landingpage.layout.header')
        <!-- main-header end -->


        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="assets/images/logo-2.png" alt=""
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
                    <h1>Pekerjaan Detail</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>-</li>
                        <li>Pekerjaan Detail</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- job-details -->
        <section class="job-details pt_110 pb_120">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="job-sidebar mr_40">
                            <div class="info-widget sidebar-widget mb_30">
                                <ul class="clearfix">
                                    <li>
                                        <h5>Lokasi</h5>
                                        <p>{{ $lowongandetail->lokasi }}</p>
                                    </li>
                                    <li>
                                        <h5>Website</h5>
                                        <p><a href="#">BumDes Pakukerto</a></p>
                                    </li>
                                    <li>
                                        <h5>Tanggal Pendaftaran Dibuka</h5>
                                        <p>{{ $lowongandetail->tanggal_dibuka }}</p>
                                    </li>
                                    <li>
                                        <h5>Tanggal Pendaftaran Ditutup</h5>
                                        <p>{{ $lowongandetail->tanggal_ditutup }}</p>
                                    </li>
                                    <li>
                                        <h5>Status Pendaftaran</h5>
                                        @if ($lowongandetail->status == 'dibuka')
                                            <span class="badge bg-success">Dibuka</span>
                                        @else
                                            <span class="badge bg-danger">Ditutup</span>
                                        @endif
                                    </li>
                                    {{-- <li>
                                        <h5>Apply Within</h5>
                                        <p>25th March, 2025</p>
                                    </li> --}}
                                </ul>
                            </div>
                            {{-- <div class="requirements-widget sidebar-widget">
                                <h3>Requirements</h3>
                                <ul class="clearfix">
                                    <li><span>Age :</span> 25th March, 2025</li>
                                    <li><span>Sex :</span> Male/ Female</li>
                                    <li><span>Education :</span> CSE enginear</li>
                                    <li><span>Experience :</span> 1-3 Yrs</li>
                                    <li><span>Skills :</span> Something Related this Job</li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="job-details-content">
                             <div class="image-box">
                                  <div class="image-box">
                                        <figure class="image"><img src="{{ asset('poster_lowongan/' . $lowongandetail->poster_lowongan) }}"
                                                alt=""></figure>
                                    </div>
                            <div class="text-box mb_60">
                                <h3>Deskripsi Pekerjaan :</h3>
                                <p>{!! nl2br(e($lowongandetail->deskripsi)) !!}</p>
                            </div>

                            <div class="text-box mb_55">
                                <h3>Tugas :</h3>
                                <ul>
                                    @foreach (explode("\n", $lowongandetail->tugas) as $tugas)
                                        <li>{{ $tugas }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="text-box mb_65">
                                <h3>Kualifikasi / Persyaratan :</h3>
                                <ul>
                                    @foreach (explode("\n", $lowongandetail->kualifikasi) as $kualifikasi)
                                        <li>{{ $kualifikasi }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <ul class="share-box">
                                <li>
                                    <h5>Share On:</h5>
                                </li>
                                <li><a href="job-details.html"><i class="icon-22"></i></a></li>
                                <li><a href="job-details.html"><i class="icon-23"></i></a></li>
                                <li><a href="job-details.html"><i class="icon-24"></i></a></li>
                                <li><a href="job-details.html"><i class="icon-25"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- job-details end -->


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

<!-- Mirrored from jobaway.pixcelsthemes.com/job-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Jul 2025 14:03:45 GMT -->

</html>
