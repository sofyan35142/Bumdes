<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>
    <nav class="menu-box">
        <div class="nav-logo"><a href="/"><img src="{{ asset('LandingPage/assets/images/bumdes.png') }}"
                    alt="" title=""></a></div>
        <div class="menu-outer">
            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
        </div>
        @php
            $kontak = \App\Models\InformasiKontak::first();
        @endphp
        <div class="contact-info">
            <h4>Contact Info</h4>
            <ul>
                <li>{{ $kontak->alamat }}</li>
                <li><a href="tel:{{ $kontak->telepon }}">{{ $kontak->telepon }}</a></li>
                <li><a href="mailto:{{ $kontak->email }}">{{ $kontak->email }}</a></li>
            </ul>
        </div>
        <div class="social-links"></div>
    </nav>
</div>
