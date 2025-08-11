<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from jobaway.pixcelsthemes.com/job.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Jul 2025 14:03:44 GMT -->

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
        @include('Landingpage.layout.search')


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
                    <h1>Form Testimonial</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>-</li>
                        <li>Form Testimonial</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- about-style-three -->
        <!-- about-style-three end -->


        <!-- job-form-section -->
        <section class="job-form-section pt_120 pb_120">
            <div class="auto-container">
                <div class="sec-title centred pb_70 light sec-title-animation animation-style2">
                    <span class="sub-title mb_10 title-animation">TESTIMONIAL</span>
                    <h2 class="title-animation">Kami sangat menghargai setiap masukan dari Anda!</h2>
                    <p class="title-animation">Silakan bagikan pengalaman, kesan, atau saran Anda mengenai layanan atau
                        kegiatan kami. <br />Testimoni Anda akan membantu kami untuk terus berkembang dan memberikan
                        yang terbaik.</p>
                </div>
                <form id="testimonialForm" method="post" action="/admin/testimonial/store"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 form-column">
                            <div class="form-inner">
                                <div class="title-box">
                                    <div class="icon-box"><i class="icon-39"></i></div>
                                    <h3>Form Testimoni</h3>
                                    <p>Silahkan Isi Form Testimoni dengan jujur sesuai pengalaman kalian.</p>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="nama" placeholder="Masukkan Nama Anda" required>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="number" name="nomor_telepone" placeholder="Nomor Telepone"
                                            required>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="keterangan"
                                            placeholder="Keterangan (Contoh: Konsumen BumDes) " required>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <div class="upload-box">
                                            <div class="icon-box">
                                                <img src="{{ asset('LandingPage/assets/images/icons/icon-24.png') }}"
                                                    alt="">
                                            </div>
                                            <input name="foto_testimonial" id="filer_input" multiple="multiple"
                                                type="file" accept="image/*" onchange="previewImages(event)">
                                            <button type="button">Upload Photo</button>
                                        </div>
                                        <div id="image-preview"
                                            style="margin-top: 15px; display: flex; gap: 10px; flex-wrap: wrap;"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea type="text" name="deskripsi_testimonial" placeholder="Deskripsi Testimonial" required></textarea>
                                </div>
                                <div class="form-group message-btn">
                                    <button type="submit" class="theme-btn btn-one">Kirim Testimonial Anda</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- job-form-section end -->


        <!-- clients-style-two -->
        <!-- clients-style-two end -->


        <!-- testimonial-style-three -->
        <section class="testimonial-section pt_120 pb_90">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-3.png);"></div>
            <div class="auto-container">
                <div class="sec-title light centred pb_60 sec-title-animation animation-style2">
                    <span class="sub-title mb_10 title-animation">Testimonials</span>
                    <h2 class="title-animation">Apa Kata Mereka Tentang Kita?</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 testimonial-block">
                        <div class="testimonial-block-one">
                            <div class="inner-box">
                                <div class="shape" style="background-image: url(assets/images/shape/shape-7.png);">
                                </div>
                                <div class="icon-box"><img src="assets/images/icons/icon-10.png" alt="">
                                </div>
                                <div class="author-box">
                                    <figure class="thumb-box"><img src="assets/images/resource/testimonial-1.png"
                                            alt=""></figure>
                                    <h4>Ashitaka Dai</h4>
                                    <span class="designation">Art Director</span>
                                </div>
                                <p>Company and was impressed by the main personalized approach of their recruitment
                                    team. They kept me informed at every stage and ensured that I had all</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 testimonial-block">
                        <div class="testimonial-block-one">
                            <div class="inner-box">
                                <div class="shape" style="background-image: url(assets/images/shape/shape-7.png);">
                                </div>
                                <div class="icon-box"><img src="assets/images/icons/icon-10.png" alt="">
                                </div>
                                <div class="author-box">
                                    <figure class="thumb-box"><img src="assets/images/resource/testimonial-2.png"
                                            alt=""></figure>
                                    <h4>Franklin Bailey</h4>
                                    <span class="designation">Sale Manager</span>
                                </div>
                                <p>Recently I went through their recruitment process with Jobaway Company, and I was
                                    impressed by how the smooth and efficient these were.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 testimonial-block">
                        <div class="testimonial-block-one">
                            <div class="inner-box">
                                <div class="shape" style="background-image: url(assets/images/shape/shape-7.png);">
                                </div>
                                <div class="icon-box"><img src="assets/images/icons/icon-10.png" alt="">
                                </div>
                                <div class="author-box">
                                    <figure class="thumb-box"><img src="assets/images/resource/testimonial-3.png"
                                            alt=""></figure>
                                    <h4>Evan Clement</h4>
                                    <span class="designation">Mahager, Cypertech</span>
                                </div>
                                <p>I had a fantastic experience throughout the recruitment process with Jobaway team.
                                    The communication was clear, interview process was well-organized</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 testimonial-block">
                        <div class="testimonial-block-one">
                            <div class="inner-box">
                                <div class="shape" style="background-image: url(assets/images/shape/shape-7.png);">
                                </div>
                                <div class="icon-box"><img src="assets/images/icons/icon-10.png" alt="">
                                </div>
                                <div class="author-box">
                                    <figure class="thumb-box"><img src="assets/images/resource/testimonial-6.png"
                                            alt=""></figure>
                                    <h4>Ashitaka Dai</h4>
                                    <span class="designation">Art Director</span>
                                </div>
                                <p>The quality of candidates we've received has significantly improved, and the
                                    time-to-hire has reduced dramatically. It's a must-have tool for any company</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 testimonial-block">
                        <div class="testimonial-block-one">
                            <div class="inner-box">
                                <div class="shape" style="background-image: url(assets/images/shape/shape-7.png);">
                                </div>
                                <div class="icon-box"><img src="assets/images/icons/icon-10.png" alt="">
                                </div>
                                <div class="author-box">
                                    <figure class="thumb-box"><img src="assets/images/resource/testimonial-7.png"
                                            alt=""></figure>
                                    <h4>Diarmuid Eoin</h4>
                                    <span class="designation">Art Director</span>
                                </div>
                                <p>The targeted advertising options and comprehensive candidate profiles have allowed us
                                    to connect with highly qualified professionals</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 testimonial-block">
                        <div class="testimonial-block-one">
                            <div class="inner-box">
                                <div class="shape" style="background-image: url(assets/images/shape/shape-7.png);">
                                </div>
                                <div class="icon-box"><img src="assets/images/icons/icon-10.png" alt="">
                                </div>
                                <div class="author-box">
                                    <figure class="thumb-box"><img src="assets/images/resource/testimonial-8.png"
                                            alt=""></figure>
                                    <h4>Antonio Alex</h4>
                                    <span class="designation">Mahager, Cypertech</span>
                                </div>
                                <p>We’ve seen a significant increase in the quality of applicants since using this
                                    recruitment site. The detailed profiles and easy-to-use dashboard make managing</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-style-three end -->
        <!-- clients-section -->
        <section class="clients-section pt_110 pb_120 centred">
            <div class="auto-container">
                <div class="title-text pb_60 sec-title-animation animation-style2">
                    <h3 class="title-animation">Trusted by the next-gen industry leaders</h3>
                </div>
                <div class="inner-box">
                    <div class="clients-box">
                        <figure class="clients-logo"><a href="index.html"><img
                                    src="assets/images/clients/clients-1.png" alt=""></a></figure>
                        <figure class="overlay-logo"><a href="index.html"><img
                                    src="assets/images/clients/clients-1.png" alt=""></a></figure>
                    </div>
                    <div class="clients-box">
                        <figure class="clients-logo"><a href="index.html"><img
                                    src="assets/images/clients/clients-2.png" alt=""></a></figure>
                        <figure class="overlay-logo"><a href="index.html"><img
                                    src="assets/images/clients/clients-2.png" alt=""></a></figure>
                    </div>
                    <div class="clients-box">
                        <figure class="clients-logo"><a href="index.html"><img
                                    src="assets/images/clients/clients-3.png" alt=""></a></figure>
                        <figure class="overlay-logo"><a href="index.html"><img
                                    src="assets/images/clients/clients-3.png" alt=""></a></figure>
                    </div>
                    <div class="clients-box">
                        <figure class="clients-logo"><a href="index.html"><img
                                    src="assets/images/clients/clients-4.png" alt=""></a></figure>
                        <figure class="overlay-logo"><a href="index.html"><img
                                    src="assets/images/clients/clients-4.png" alt=""></a></figure>
                    </div>
                    <div class="clients-box">
                        <figure class="clients-logo"><a href="index.html"><img
                                    src="assets/images/clients/clients-5.png" alt=""></a></figure>
                        <figure class="overlay-logo"><a href="index.html"><img
                                    src="assets/images/clients/clients-5.png" alt=""></a></figure>
                    </div>
                </div>
            </div>
        </section>
        <!-- clients-section end -->


        <!-- main-footer -->
        @include('LandingPage.layout.footer')
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
        function previewImages(event) {
            const previewContainer = document.getElementById('image-preview');
            previewContainer.innerHTML = ''; // Clear previous previews

            const files = event.target.files;

            for (let i = 0; i < files.length; i++) {
                const file = files[i];

                if (file.type.startsWith('image/')) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const img = document.createElement('img');
                        img.src = e.target.result;
                        img.style.maxHeight = '100px';
                        img.style.border = '1px solid #ccc';
                        img.style.borderRadius = '6px';
                        img.style.objectFit = 'cover';
                        img.style.padding = '4px';
                        previewContainer.appendChild(img);
                    };
                    reader.readAsDataURL(file);
                }
            }
        }
    </script>
    <script>
        document.getElementById("testimonialForm").addEventListener("submit", function(e) {
            e.preventDefault();

            const formData = new FormData(this);

            fetch(this.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                })
                .then(async response => {
                    if (response.ok) {
                        // ✅ SUKSES: pindah ke halaman sukses
                        window.location.href = '/sukses';
                    } else {
                        const err = await response.text();
                        console.error("Gagal mengirim data:", err);
                        alert('Gagal mengirim data. Server menolak permintaan.');
                    }
                })
                .catch(error => {
                    console.error("Terjadi error:", error);
                    alert('Terjadi kesalahan saat mengirim (fetch gagal).');
                });
        });
    </script>


</body><!-- End of .page_wrapper -->

<!-- Mirrored from jobaway.pixcelsthemes.com/job.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Jul 2025 14:03:44 GMT -->

</html>
