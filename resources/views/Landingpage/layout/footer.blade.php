<footer class="main-footer light-footer">
    <div class="widget-section p_relative pt_60 pb_60">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Tentang BUMDes -->
                <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget logo-widget mr_30">
                        <figure class="footer-logo mb_20">
                            <a href="/"><img src="{{ asset('LandingPage/assets/images/bumdes.png') }}" alt="Logo BUMDes"></a>
                        </figure>
                        <p>
                            BUMDes Pakukerto berperan aktif mengelola potensi desa secara profesional,
                            transparan, dan berkelanjutan untuk meningkatkan kesejahteraan masyarakat.
                        </p>
                    </div>
                </div>

                <!-- Layanan -->
                <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget links-widget">
                        <div class="widget-title">
                            <h4>Layanan Kami</h4>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list clearfix">
                                @php
                                    $jenisLayanan = \App\Models\JenisLayanan::all();
                                @endphp
                                @foreach ($jenisLayanan as $item)
                                    <li><a href="#">{{ $item->nama }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Kontak -->
                <div class="col-lg-4 col-md-12 col-sm-12 footer-column">
                    <div class="footer-widget contact-widget">
                        <div class="widget-title">
                            <h4>Kontak Kami</h4>
                        </div>
                        @php
                            $kontak = \App\Models\InformasiKontak::first();
                        @endphp
                        <ul class="contact-info">
                            <li><i class="fa-solid fa-phone"></i> {{ $kontak->telepon }}</li>
                            <li><i class="fa-solid fa-envelope"></i> {{ $kontak->email }}</li>
                            <li><i class="fa-solid fa-location-dot"></i> {{ $kontak->alamat }}</li>
                        </ul>
                        {{-- <ul class="social-links mt_15">
                            <li><a href="#"><i class="icon-22"></i></a></li>
                            <li><a href="#"><i class="icon-23"></i></a></li>
                            <li><a href="#"><i class="icon-24"></i></a></li>
                            <li><a href="#"><i class="icon-25"></i></a></li>
                        </ul> --}}
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom centred">
        <div class="auto-container">
            <div class="bottom-inner d_block">
                <div class="copyright">
                    <p>
                        &copy; 2025 BUMDes Pakukerto | PMM-KKN 01 - Universitas Muhammadiyah Malang
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
