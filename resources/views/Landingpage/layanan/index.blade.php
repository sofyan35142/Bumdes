<!DOCTYPE html>
<html lang="en">

<head>
    @include('Landingpage.layout.head')
    <style>
        .form-layanan-opsional {
            transition: all 0.3s;
        }
    </style>
</head>

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
                    <figure class="logo-box">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('LandingPage/assets/images/logo.png') }}" alt="Logo">
                        </a>
                    </figure>
                    <div class="close-search"><span class="icon-27"></span></div>
                </div>
                <div class="overlay-layer"></div>
                <div class="auto-container">
                    <div class="search-form">
                        <form method="post" action="#">
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
                <div class="nav-logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('LandingPage/assets/images/logo-2.png') }}" alt="Logo 2" title="">
                    </a>
                </div>
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
                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End Mobile Menu -->

        <!-- page-title -->
        <section class="page-title centred pt_110">
            <div class="auto-container">
                <div class="content-box">
                    <h1>Form Pengajuan Layanan</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ url('/') }}">Beranda</a></li>
                        <li>-</li>
                        <li>Pengajuan</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->

        <!-- pengajuan-form-section -->
        <section class="job-form-section dark-section pt_110 pb_90">
            <div class="auto-container">
                <div class="sec-title centred pb_70 sec-title-animation animation-style2">
                    <span class="sub-title mb_10 title-animation">FORM PENGAJUAN</span>
                    <h2 class="title-animation">Ajukan Layanan BUMDes</h2>
                    <p class="title-animation">Silakan isi data Anda dengan benar untuk mengajukan layanan BUMDes.</p>
                </div>

                <!-- Form pengajuan layanan BUMDes -->
                <form method="POST" action="{{ route('pengajuan.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row clearfix">
                        <!-- Kolom Kiri - Data Diri -->
                        <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                            <div class="form-inner">
                                <div class="title-box">
                                    <div class="icon-box"><i class="icon-39"></i></div>
                                    <h3>Data Diri</h3>
                                    <p>Masukkan data pribadi Anda.</p>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-12 form-group">
                                        <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" required>
                                    </div>
                                    <div class="col-12 form-group">
                                        <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" required>
                                    </div>
                                    <div class="col-12 form-group">
                                        <input type="date" name="tanggal_lahir" required>
                                    </div>
                                    <div class="col-12 form-group">
                                        <input type="text" name="nik" placeholder="NIK" required>
                                    </div>
                                    <div class="col-12 form-group">
                                        <input type="text" name="alamat" placeholder="Alamat" required>
                                    </div>
                                    <div class="col-12 form-group">
                                        <input type="text" name="no_wa" placeholder="Nomor WhatsApp" required>
                                    </div>
                                    <div class="col-12 form-group">
                                        <label>Upload KTP (PDF/JPG/PNG)</label>
                                        <div class="upload-box">
                                            <div class="icon-box">
                                                <img src="{{ asset('Landingpage/assets/images/icons/icon-24.png') }}"
                                                    alt="">
                                            </div>
                                            <input name="file_ktp" id="filer_input" multiple="multiple"
                                                type="file" accept=".jpg,.jpeg,.png,.pdf">
                                            <button type="button">Upload Photo</button>
                                        </div>
                                        <div id="preview-container" style="margin-top: 10px;"></div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Kolom Kanan - Data Pengajuan -->
                        <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                            <div class="form-inner">
                                <div class="title-box">
                                    <div class="icon-box"><i class="icon-40"></i></div>
                                    <h3>Data Pengajuan</h3>
                                    <p>Pilih jenis layanan dan lengkapi detailnya.</p>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-12 form-group">
                                        <div class="select-box">
                                            <select name="jenis_pengajuan" id="jenis_pengajuan" required>
                                                <option value="" disabled selected>Pilih Jenis Layanan</option>
                                                <option value="sewa_kios">Sewa Kios</option>
                                                <option value="sewa_lahan">Sewa Lahan</option>
                                                <option value="pemungutan_sampah">Pemungutan Sampah</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12 form-group">
                                        <textarea name="keperluan" placeholder="Keperluan / Deskripsi Pengajuan" rows="5" required></textarea>
                                    </div>

                                    <!-- Bagian khusus untuk kios/lahan (disembunyikan jika bukan) -->
                                    <div class="col-12 form-group form-layanan-opsional">
                                        <input type="text" name="legalitas_usaha"
                                            placeholder="Nomor Legalitas Usaha (jika ada)">
                                    </div>
                                    <div class="col-12 form-group form-layanan-opsional">
                                        <input type="text" name="jenis_usaha" placeholder="Jenis Usaha">
                                    </div>
                                    <div class="col-12 form-group form-layanan-opsional">
                                        <input type="text" name="produk" placeholder="Produk yang Dijual">
                                    </div>

                                    <div class="col-12 form-group">
                                        <input type="number" name="durasi_sewa" id="durasi_sewa"
                                            placeholder="Lama Sewa (hari)" required>
                                    </div>

                                    <div class="col-12 form-group">
                                        <input type="text" id="harga_per_hari" value="Rp -" readonly>
                                    </div>

                                    <div class="col-12 form-group">
                                        <input type="text" name="total_harga" id="total_harga"
                                            placeholder="Total Harga" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tombol Submit -->
                        <div class="col-lg-12 col-md-12 col-sm-12 form-column">
                            <div class="form-inner">
                                <div class="form-group message-btn centred">
                                    <button type="submit" class="theme-btn btn-one">Kirim Pengajuan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- pengajuan-form-section end -->

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
    <script>
        // Harga per layanan
        const hargaPerLayanan = {
            sewa_kios: 10000,
            sewa_lahan: 8000,
            pemungutan_sampah: 5000
        };

        // Update harga per hari dan total harga
        function updateHarga() {
            const jenis = $('#jenis_pengajuan').val();
            const durasi = parseInt($('#durasi_sewa').val()) || 0;
            const hargaPerHari = hargaPerLayanan[jenis] || 0;

            $('#harga_per_hari').val('Rp ' + hargaPerHari.toLocaleString('id-ID'));
            $('#total_harga').val('Rp ' + (hargaPerHari * durasi).toLocaleString('id-ID'));
        }

        $(document).ready(function() {
            // Inisialisasi NiceSelect
            $('#jenis_pengajuan').niceSelect();

            // Saat jenis layanan dipilih
            $('#jenis_pengajuan').on('change', function() {
                const jenis = $(this).val();
                updateHarga();

                if (jenis === 'sewa_kios' || jenis === 'sewa_lahan') {
                    $('.form-layanan-opsional').show();
                } else {
                    $('.form-layanan-opsional').hide();
                }
            });

            // Saat durasi diinput
            $('#durasi_sewa').on('input', function() {
                updateHarga();
            });

            // Trigger awal jika value default sudah ada
            updateHarga();
        });
    </script>
    <script>
        document.getElementById('filer_input').addEventListener('change', function(event) {
            const previewContainer = document.getElementById('preview-container');
            previewContainer.innerHTML = ''; // Bersihkan preview sebelumnya

            const files = event.target.files;

            for (let i = 0; i < files.length; i++) {
                const file = files[i];
                const fileType = file.type;

                const fileReader = new FileReader();

                fileReader.onload = function(e) {
                    if (fileType.startsWith('image/')) {
                        // Jika file gambar
                        const img = document.createElement('img');
                        img.src = e.target.result;
                        img.style.maxWidth = '20pc';
                        img.style.marginRight = '10px';
                        img.style.marginBottom = '10px';
                        previewContainer.appendChild(img);
                    } else if (fileType === 'application/pdf') {
                        // Jika file PDF
                        const pdfPreview = document.createElement('p');
                        pdfPreview.innerHTML = `<strong>PDF:</strong> ${file.name}`;
                        previewContainer.appendChild(pdfPreview);
                    }
                };

                fileReader.readAsDataURL(file);
            }
        });
    </script>

</body>

</html>
