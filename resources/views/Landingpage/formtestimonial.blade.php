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
                <form id="testimonialForm" method="post" action="{{ route('admin.testimonial.store') }}"
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
                                        <input type="text" name="nomor_telepone" placeholder="Nomor Telepone"
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
        <section class="clients-style-two centred pt_110 pb_120">
            <div class="auto-container">
                <div class="title-text">
                    <h3>Trusted by the next-gen industry leaders</h3>
                </div>
                <div class="clients-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                    <figure class="clients-logo"><a href="index-2.html"><img src="assets/images/clients/clients-6.png"
                                alt=""></a></figure>
                    <figure class="clients-logo"><a href="index-2.html"><img src="assets/images/clients/clients-7.png"
                                alt=""></a></figure>
                    <figure class="clients-logo"><a href="index-2.html"><img
                                src="assets/images/clients/clients-8.png" alt=""></a></figure>
                    <figure class="clients-logo"><a href="index-2.html"><img
                                src="assets/images/clients/clients-9.png" alt=""></a></figure>
                    <figure class="clients-logo"><a href="index-2.html"><img
                                src="assets/images/clients/clients-10.png" alt=""></a></figure>
                </div>
            </div>
        </section>
        <!-- clients-style-two end -->


        <!-- testimonial-style-three -->
        <section class="testimonial-style-three pb_120">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="shape">
                        <div class="shape-1"></div>
                        <div class="shape-2"></div>
                    </div>
                    <div class="single-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                        <div class="testimonial-block">
                            <figure class="thumb-box"><img src="assets/images/resource/testimonial-5.png"
                                    alt=""></figure>
                            <div class="content-box">
                                <div class="icon-box"><i class="icon-36"></i></div>
                                <h2>Company was impressed by the personal approach of their recruitment team for the
                                    improvement. They kept informed at every stage of the task.</h2>
                                <h3>Franklin Bailey</h3>
                                <span class="designation">CEO, JobAway</span>
                            </div>
                        </div>
                        <div class="testimonial-block">
                            <figure class="thumb-box"><img src="assets/images/resource/testimonial-5.png"
                                    alt=""></figure>
                            <div class="content-box">
                                <div class="icon-box"><i class="icon-36"></i></div>
                                <h2>Company was impressed by the personal approach of their recruitment team for the
                                    improvement. They kept informed at every stage of the task.</h2>
                                <h3>Franklin Bailey</h3>
                                <span class="designation">CEO, JobAway</span>
                            </div>
                        </div>
                        <div class="testimonial-block">
                            <figure class="thumb-box"><img src="assets/images/resource/testimonial-5.png"
                                    alt=""></figure>
                            <div class="content-box">
                                <div class="icon-box"><i class="icon-36"></i></div>
                                <h2>Company was impressed by the personal approach of their recruitment team for the
                                    improvement. They kept informed at every stage of the task.</h2>
                                <h3>Franklin Bailey</h3>
                                <span class="designation">CEO, JobAway</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-style-three end -->


        <!-- subscribe-style-two -->
        <section class="subscribe-style-two">
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
        </section>
        <!-- subscribe-style-two end -->


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
                        window.location.href = '/testimoni/sukses';
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
