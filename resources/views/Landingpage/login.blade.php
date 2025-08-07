<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from jobaway.pixcelsthemes.com/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Jul 2025 14:03:52 GMT -->
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
        {{-- <div id="search-popup" class="search-popup">
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
        </div> --}}


        <!-- main header -->
        {{-- @include('Landingpage.layout.header') --}}
        <!-- main-header end -->


        <!-- Mobile Menu  -->
        {{-- <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="assets/images/logo-2.png" alt=""
                            title=""></a></div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
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
        </div> --}}
        <!-- End Mobile Menu -->


        <!-- page-title -->
        <!-- page-title end -->


        <!-- sign-section -->
        <div
            style="display: flex; justify-content: center; align-items: center; height: 100vh; background: #f5f7fa; font-family: 'Segoe UI', sans-serif;">
            <div
                style="background: white; padding: 40px 30px; border-radius: 20px; box-shadow: 0 10px 40px rgba(0,0,0,0.1); width: 100%; max-width: 400px;">
                <h2 style="text-align: center; font-size: 24px; font-weight: 600; margin-bottom: 30px; color: #333;">
                    Login ke Admin</h2>
                    {{-- <p >Masukkan email dan password untuk mengakses dashboard admin</p> --}}

                <form action="/admin/postsignin" method="POST">
                    @csrf
                    <!-- CSRF Token -->
                    <!-- Email -->
                    <label style="display: block; margin-bottom: 8px; font-weight: 500; color: #555;">Email *</label>
                    <input type="email" placeholder="masukkan email" required
                        style="width: 100%; padding: 12px 16px; border: 1px solid #ccc; border-radius: 12px; margin-bottom: 20px; font-size: 14px; transition: 0.3s; outline: none;"
                        onfocus="this.style.borderColor='#4ade80'" onblur="this.style.borderColor='#ccc'" name="email">

                    <!-- Password -->
                    <label style="display: block; margin-bottom: 8px; font-weight: 500; color: #555;">Password *</label>
                    <div style="position: relative; margin-bottom: 30px;">
                        <input type="password" id="password" placeholder="masukkan password" required
                            style="width: 100%; padding: 12px 40px 12px 16px; border: 1px solid #ccc; border-radius: 12px; font-size: 14px; transition: 0.3s; outline: none;"
                            onfocus="this.style.borderColor='#4ade80'" onblur="this.style.borderColor='#ccc'" name="password">
                        <span onclick="togglePassword()"
                            style="position: absolute; right: 14px; top: 50%; transform: translateY(-50%); cursor: pointer;">
                            👁️
                        </span>
                    </div>

                    <!-- Button -->
                    <button type="submit"
                        style="width: 100%; padding: 12px; background-color: #4ade80; color: white; font-weight: 600; border: none; border-radius: 9999px; font-size: 16px; cursor: pointer; transition: background-color 0.3s;"
                        onmouseover="this.style.backgroundColor='#22c55e'"
                        onmouseout="this.style.backgroundColor='#4ade80'">
                        Log In
                    </button>
                </form>
            </div>
        </div>
        <!-- sign-section end -->


        <!-- subscribe-style-two -->
        {{-- <section class="subscribe-style-two">
            <div class="bg-color"></div>
            <div class="auto-container">
                <div class="inner-container">
                    <div class="shape-box">
                        <div class="shape-1" style="background-image: url(assets/images/shape/shape-8.png);"></div>
                        <div class="shape-2" style="background-image: url(assets/images/shape/shape-9.png);"></div>
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
        </section> --}}
        <!-- subscribe-style-two end -->


        <!-- main-footer -->
        {{-- @include('Landingpage.layout.footer') --}}
        <!-- main-footer end -->



        <!--Scroll to top-->
        <div class="scroll-to-top">
            <svg class="scroll-top-inner" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>

    </div>


    @include('Landingpage.layout.scripts')
    <script>
        function togglePassword() {
            const input = document.getElementById('password');
            input.type = input.type === 'password' ? 'text' : 'password';
        }
    </script>
</body><!-- End of .page_wrapper -->

<!-- Mirrored from jobaway.pixcelsthemes.com/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Jul 2025 14:03:53 GMT -->

</html>
