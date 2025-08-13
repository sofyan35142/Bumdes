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

        <!-- page-direction end -->


        <!--Search Popup-->
        @include('Landingpage.layout.search')


        <!-- main header -->
        @include('Landingpage.layout.header')
        <!-- main-header end -->


        <!-- Mobile Menu  -->
        @include('Landingpage.layout.mobilemenu')
        <!-- End Mobile Menu -->


        <!-- about-style-three -->
        <!-- about-style-three end -->
        <div class="container">
            <style>
                .container {
                    font-family: 'Poppins', sans-serif;
                    max-width: 800px;
                    margin: 40px auto;
                    background: #ffffff;
                    border-radius: 16px;
                    padding: 40px;
                    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
                }

                .success-icon {
                    text-align: center;
                    font-size: 60px;
                    color: #10b981;
                    margin-bottom: 20px;
                }

                h1 {
                    text-align: center;
                    color: #111827;
                    font-size: 28px;
                    margin-bottom: 10px;
                }

                p.subtitle {
                    text-align: center;
                    color: #6b7280;
                    font-size: 16px;
                    margin-bottom: 40px;
                }

                .steps {
                    display: grid;
                    gap: 20px;
                    border: 1px solid #e5e7eb;
                    border-radius: 12px;
                    padding: 25px;
                    margin-bottom: 30px;
                }

                .step {
                    display: flex;
                    gap: 15px;
                    align-items: flex-start;
                }

                .step-number {
                    background-color: #3b82f6;
                    color: white;
                    width: 36px;
                    height: 36px;
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-weight: 600;
                    font-size: 16px;
                    flex-shrink: 0;
                }

                .step-content {
                    color: #374151;
                    font-size: 15px;
                }

                .step-content strong {
                    display: block;
                    color: #111827;
                    font-size: 16px;
                    margin-bottom: 4px;
                }

                .notes {
                    background-color: #f9fafb;
                    border-left: 4px solid #3b82f6;
                    padding: 20px 25px;
                    border-radius: 8px;
                    margin-bottom: 40px;
                }

                .notes h3 {
                    margin-top: 0;
                    color: #1f2937;
                    font-size: 18px;
                    margin-bottom: 12px;
                }

                .notes p {
                    margin: 6px 0;
                    color: #4b5563;
                    font-size: 15px;
                }

                .notes p strong {
                    color: #111827;
                }

                .button-container {
                    display: flex;
                    justify-content: center;
                    margin-top: 30px;
                }

                .back-button {
                    display: inline-flex;
                    align-items: center;
                    background-color: #059669;
                    color: #fff;
                    padding: 12px 24px;
                    border-radius: 9999px;
                    font-weight: 600;
                    font-size: 14px;
                    text-decoration: none;
                    border: 2px solid white;
                    transition: background-color 0.3s, border-color 0.3s;
                }

                .back-button:hover {
                    background-color: #047857;
                    border-color: #d1fae5;
                }

                .back-button span {
                    margin-left: 8px;
                }

                @media (max-width: 600px) {
                    .container {
                        padding: 25px;
                        margin: 20px;
                    }

                    h1 {
                        font-size: 24px;
                    }

                    .step {
                        flex-direction: row;
                    }

                    .step-number {
                        width: 30px;
                        height: 30px;
                        font-size: 14px;
                    }
                }
            </style>

            <div class="success-icon">✅</div>
            <h1>Permohonan Berhasil Dikirim!</h1>
            <p class="subtitle">Terima kasih telah mengajukan permohonan surat layanan desa</p>

            <div class="steps">
                <div class="step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <strong>Verifikasi Data</strong>
                        Petugas desa akan memverifikasi kelengkapan dan keakuratan data yang Anda kirimkan
                    </div>
                </div>

                <div class="step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <strong>Pembuatan Surat</strong>
                        Jika data sudah lengkap dan benar, surat akan dibuatkan
                    </div>
                </div>

                <div class="step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <strong>Pengiriman Surat</strong>
                        Surat yang sudah jadi akan dikirim ke nomor WhatsApp yang Anda berikan
                    </div>
                </div>
            </div>

            <div class="notes">
                <h3>📘 Catatan Penting</h3>
                <p><strong>Waktu Pemrosesan:</strong> Biasanya membutuhkan waktu 1-3 hari kerja</p>
                <p><strong>Notifikasi:</strong> Anda akan dihubungi melalui WhatsApp jika ada informasi tambahan yang
                    diperlukan</p>
                <p><strong>Pengiriman:</strong> Surat akan dikirim dalam format PDF melalui WhatsApp</p>
            </div>

            <div class="btn-box">
                <center><a href="{{ url('/') }}" class="theme-btn btn-one">Kembali Keberanda</a></center>
            </div>
        </div>


        <!-- clients-style-two -->
        {{-- <section class="clients-style-two centred pt_110 pb_120">
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
        </section> --}}
        <!-- clients-style-two end -->


        <!-- testimonial-style-three -->
        {{-- <section class="testimonial-style-three pb_120">
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
        </section> --}}
        <!-- testimonial-style-three end -->


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

<!-- Mirrored from jobaway.pixcelsthemes.com/job.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Jul 2025 14:03:44 GMT -->

</html>
