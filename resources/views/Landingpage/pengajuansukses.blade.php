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
            <h1>Pengajuan Berhasil Dikirim!</h1>
            <p class="subtitle">Terima kasih telah melakukan pengajuan. Kami akan segera memproses permintaan Anda.</p>

            <div class="steps">
                <div class="step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <strong>Verifikasi Data</strong>
                        Tim kami akan memeriksa kelengkapan dan keabsahan data pengajuan Anda.
                    </div>
                </div>

                <div class="step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <strong>Proses Persetujuan</strong>
                        Pengajuan akan diproses sesuai ketentuan. Kami akan menghubungi Anda jika diperlukan konfirmasi
                        tambahan.
                    </div>
                </div>

                <div class="step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <strong>Notifikasi Hasil</strong>
                        Setelah proses selesai, Anda akan menerima informasi hasil pengajuan melalui kontak yang telah
                        Anda berikan.
                    </div>
                </div>
            </div>

            <div class="notes">
                <h3>📘 Informasi Penting</h3>
                <p><strong>Waktu Proses:</strong> Estimasi 1–3 hari kerja tergantung jenis layanan.</p>
                <p><strong>Dokumen Pendukung:</strong> Pastikan dokumen yang diunggah sudah benar dan jelas.</p>
                <p><strong>Kerahasiaan:</strong> Data pribadi Anda akan tetap aman dan tidak dibagikan ke pihak lain.
                </p>
            </div>

            <div class="btn-box">
                <center><a href="{{ url('/') }}" class="theme-btn btn-one">Kembali ke Beranda</a></center>
            </div>
        </div>

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


</html>
