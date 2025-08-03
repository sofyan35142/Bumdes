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
        <div class="page_direction">
            <div class="demo-rtl direction_switch"><button class="rtl">RTL</button></div>
            <div class="demo-ltr direction_switch"><button class="ltr">LTR</button></div>
        </div>
        <!-- page-direction end -->


        <!--Search Popup-->
        <div id="search-popup" class="search-popup">
            <div class="popup-inner">
                <div class="upper-box">
                    <figure class="logo-box"><a href="index.html"><img src="http://127.0.0.1:8000/LandingPage/assets/images/logo.png" alt=""></a></figure>
                    <div class="close-search"><span class="icon-27"></span></div>
                </div>
                <div class="overlay-layer"></div>
                <div class="auto-container">
                    <div class="search-form">
                        <form method="post" action="https://jobaway.pixcelsthemes.com/index.html">
                            <div class="form-group">
                                <fieldset>
                                    <input type="search" class="form-control" name="search-input" value="" placeholder="Type your keyword and hit" required>
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
                <div class="nav-logo"><a href="index.html"><img src="http://127.0.0.1:8000/LandingPage/assets/images/logo-2.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
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
        {{-- <section class="page-title centred pt_110">
            <div class="auto-container">
                <div class="content-box">
                    <h1>Portfolio 3 Column</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>-</li>
                        <li>Portfolio 3 Column</li>
                    </ul>
                </div>
            </div>
        </section> --}}
        <!-- page-title end -->


        <!-- portfolio-section -->
       <!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<section class="portfolio-section centred pt_110 pb_120">
    <div class="auto-container">
        <div class="sec-title pb_60 sec-title-animation animation-style2">
            <span class="sub-title mb_10 title-animation">INFOGRAFIS APBDes</span>
            <h2 class="title-animation">Laporan Grafik Tahunan</h2>
        </div>

        {{-- PIE CHART --}}
        <div class="row mb-5">
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm p-3 rounded-4">
                    <h5 class="text-center mb-3">Distribusi Pendapatan</h5>
                    <canvas id="piePendapatan" style="width:100%; height:300px;"></canvas>
                    <p class="mt-3 text-center small text-muted">
                        Grafik menunjukkan kategori sumber pendapatan desa pada tahun {{ $tahun }}.
                    </p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm p-3 rounded-4">
                    <h5 class="text-center mb-3">Distribusi Belanja</h5>
                    <canvas id="pieBelanja" style="width:100%; height:300px;"></canvas>
                    <p class="mt-3 text-center small text-muted">
                        Grafik menunjukkan alokasi belanja desa berdasarkan kategori pada tahun {{ $tahun }}.
                    </p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm p-3 rounded-4">
                    <h5 class="text-center mb-3">Distribusi Pembiayaan</h5>
                    <canvas id="piePembiayaan" style="width:100%; height:300px;"></canvas>
                    <p class="mt-3 text-center small text-muted">
                        Grafik ini menampilkan pos pembiayaan seperti pembiayaan masuk dan keluar pada tahun {{ $tahun }}.
                    </p>
                </div>
            </div>
        </div>

       {{-- BAR CHARTS --}}
<div class="mb-5">
    <h4 class="text-center mt-5 mb-3">Grafik Pendapatan per Tahun</h4>
    <div class="card shadow-sm p-4 rounded-4">
        <div style="max-width: 500px; margin: 0 auto;">
            <canvas id="barPendapatan" height="250"></canvas>
        </div>
        <p class="mt-3 text-center small text-muted">
            Menampilkan total pendapatan desa dari berbagai tahun yang telah tercatat.
        </p>
    </div>
</div>

<div class="mb-5">
    <h4 class="text-center mt-5 mb-3">Grafik Belanja per Tahun</h4>
    <div class="card shadow-sm p-4 rounded-4">
        <div style="max-width: 500px; margin: 0 auto;">
            <canvas id="barBelanja" height="250"></canvas>
        </div>
        <p class="mt-3 text-center small text-muted">
            Grafik ini memperlihatkan total pengeluaran atau belanja desa tiap tahun anggaran.
        </p>
    </div>
</div>

<div class="mb-5">
    <h4 class="text-center mt-5 mb-3">Grafik Pembiayaan per Tahun</h4>
    <div class="card shadow-sm p-4 rounded-4">
        <div style="max-width: 500px; margin: 0 auto;">
            <canvas id="barPembiayaan" height="250"></canvas>
        </div>
        <p class="mt-3 text-center small text-muted">
            Menunjukkan besar pembiayaan desa dari tahun ke tahun.
        </p>
    </div>
</div>

    </div>
</section>

<script>
    const tahun = {!! json_encode($grafikPerTahun->pluck('tahun')) !!};
    const pendapatan = {!! json_encode($grafikPerTahun->pluck('total_pendapatan')) !!};
    const belanja = {!! json_encode($grafikPerTahun->pluck('total_belanja')) !!};
    const pembiayaan = {!! json_encode($grafikPerTahun->pluck('total_pembiayaan')) !!};

    // Pie Chart Generator
    const pie = (id, labels, data, colors) => {
        new Chart(document.getElementById(id), {
            type: 'pie',
            data: {
                labels: labels,
                datasets: [{
                    data: data,
                    backgroundColor: colors,
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom'
                    }
                }
            }
        });
    };

    pie('piePendapatan', {!! json_encode($pendapatan->pluck('kategori')) !!}, {!! json_encode($pendapatan->pluck('jumlah')) !!}, ['#4CAF50', '#8BC34A', '#CDDC39']);
    pie('pieBelanja', {!! json_encode($belanja->pluck('kategori')) !!}, {!! json_encode($belanja->pluck('jumlah')) !!}, ['#F44336', '#FF9800', '#FF5722']);
    pie('piePembiayaan', {!! json_encode($pembiayaan->pluck('kategori')) !!}, {!! json_encode($pembiayaan->pluck('jumlah')) !!}, ['#2196F3', '#03A9F4', '#00BCD4']);

    const makeBarChart = (id, label, data, color) => {
        new Chart(document.getElementById(id), {
            type: 'bar',
            data: {
                labels: tahun,
                datasets: [{
                    label: label,
                    data: data,
                    backgroundColor: color,
                    borderRadius: 12,
                    barThickness: 40
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: false },
                    tooltip: {
                        callbacks: {
                            label: ctx => 'Rp ' + Number(ctx.raw).toLocaleString('id-ID')
                        }
                    }
                },
                scales: {
                    x: {
                        ticks: { font: { size: 14 } },
                        grid: { display: false }
                    },
                    y: {
                        beginAtZero: true,
                        ticks: {
                            callback: value => 'Rp ' + value.toLocaleString('id-ID')
                        }
                    }
                }
            }
        });
    };

    makeBarChart('barPendapatan', 'Pendapatan', pendapatan, '#4CAF50');
    makeBarChart('barBelanja', 'Belanja', belanja, '#F44336');
    makeBarChart('barPembiayaan', 'Pembiayaan', pembiayaan, '#2196F3');
</script>




        <!-- subscribe-style-two -->
        <section class="subscribe-style-two">
            <div class="bg-color"></div>
            <div class="auto-container">
                <div class="inner-container">
                    <div class="shape-box">
                        <div class="shape-1" style="background-image: url(http://127.0.0.1:8000/LandingPage/assets/images/shape/shape-8.png);"></div>
                        <div class="shape-2" style="background-image: url(http://127.0.0.1:8000/LandingPage/assets/images/shape/shape-9.png);"></div>
                    </div>
                    <div class="text-box">
                        <h2>Subscribe for <span>latest update</span></h2>
                    </div>
                    <div class="form-inner">
                        <form method="post" action="https://jobaway.pixcelsthemes.com/contact.html">
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Email Address" required>
                                <button type="submit" class="theme-btn btn-one">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
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


    <!-- jequery plugins -->
    @include('Landingpage.layout.scripts')

</body><!-- End of .page_wrapper -->

<!-- Mirrored from jobaway.pixcelsthemes.com/portfolio.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Jul 2025 14:03:47 GMT -->

</html>