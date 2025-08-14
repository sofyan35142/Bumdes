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
        @include('Landingpage.layout.mobilemenu')
        <!-- End Mobile Menu -->

        <!-- page-title -->
        <section class="page-title centred pt_110 mb-5">
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

        <!-- job-form-section -->
        <section class="job-form-section pt_120 pb_120">
            <div class="auto-container">
                <div class="sec-title centred pb_70 light sec-title-animation animation-style2">
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
                                        <input type="text" name="nama_lengkap" placeholder="Nama Lengkap"
                                            value="{{ old('nama_lengkap') }}" required>
                                        @error('nama_lengkap')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-12 form-group">
                                        <input type="text" name="tempat_lahir" placeholder="Tempat Lahir"
                                            value="{{ old('tempat_lahir') }}" required>
                                        @error('tempat_lahir')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-12 form-group">
                                        <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}"
                                            required>
                                        @error('tanggal_lahir')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-12 form-group">
                                        <input type="text" name="nik" placeholder="NIK" maxlength="16"
                                            pattern="\d{16}" inputmode="numeric" required
                                            oninput="this.value=this.value.replace(/[^0-9]/g,'').slice(0,16)"
                                            value="{{ old('nik') }}">
                                        @error('nik')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-12 form-group">
                                        <input type="text" name="alamat" placeholder="Alamat"
                                            value="{{ old('alamat') }}" required>
                                        @error('alamat')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-12 form-group">
                                        <!-- Nomor WhatsApp -->
                                        <input type="text" name="no_wa" placeholder="Nomor WhatsApp"
                                            pattern="\d{10,13}" inputmode="numeric" required
                                            oninput="this.value=this.value.replace(/[^0-9]/g,'').slice(0,13)"
                                            value="{{ old('no_wa') }}">
                                        @error('no_wa')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-12 form-group">
                                        <label>Upload KTP (PDF/JPG/PNG)</label>
                                        <div class="upload-box">
                                            <div class="icon-box">
                                                <img src="{{ asset('Landingpage/assets/images/icons/icon-24.png') }}"
                                                    alt="">
                                            </div>
                                            <input name="file_ktp" id="filer_input" multiple="multiple" type="file"
                                                accept=".jpg,.jpeg,.png,.pdf">
                                            <button type="button">Upload Photo</button>
                                        </div>
                                        @error('file_ktp')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                        <div id="preview-container" style="margin-top: 10px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Bagian form (hanya bagian kanan Data Pengajuan) -->
                        <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                            <div class="form-inner">
                                <div class="title-box">
                                    <div class="icon-box"><i class="icon-40"></i></div>
                                    <h3>Data Pengajuan</h3>
                                    <p>Masukkan data pengajuan anda.</p>
                                </div>
                                <div class="row clearfix">
                                    <!-- Pilih jenis layanan -->
                                    <div class="col-12 form-group">
                                        <div class="select-box">
                                            <select name="jenis_pengajuan" id="jenis_pengajuan" required>
                                                <option value="" disabled
                                                    {{ old('jenis_pengajuan') ? '' : 'selected' }}>Pilih Jenis Layanan
                                                </option>
                                                @foreach ($jenisLayanan as $layanan)
                                                    <option value="{{ $layanan->nama }}"
                                                        data-harga="{{ $layanan->harga_sewa }}"
                                                        data-pajak="{{ $layanan->beban_perbulan }}"
                                                        {{ old('jenis_pengajuan') == $layanan->nama ? 'selected' : '' }}>
                                                        {{ $layanan->nama }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('jenis_pengajuan')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <!-- Keperluan -->
                                    <div class="col-12 form-group">
                                        <textarea name="keperluan" id="keperluan" placeholder="Keperluan / Deskripsi Pengajuan" rows="5" required>{{ old('keperluan') }}</textarea>
                                        @error('keperluan')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <!-- Form opsional -->
                                    <div class="col-12 form-group form-layanan-opsional" style="display:none;">
                                        <input type="text" name="legalitas_usaha"
                                            placeholder="Nomor Legalitas Usaha (jika ada)"
                                            value="{{ old('legalitas_usaha') }}">
                                        @error('legalitas_usaha')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-12 form-group form-layanan-opsional" style="display:none;">
                                        <input type="text" name="jenis_usaha" placeholder="Jenis Usaha"
                                            value="{{ old('jenis_usaha') }}">
                                        @error('jenis_usaha')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-12 form-group form-layanan-opsional" style="display:none;">
                                        <input type="text" name="produk" placeholder="Produk yang Dijual"
                                            value="{{ old('produk') }}">
                                        @error('produk')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <!-- Pilih satuan sewa -->
                                    <div class="col-12 form-group">
                                        <label for="satuan_sewa">Satuan Sewa</label>
                                        <select name="satuan_sewa" id="satuan_sewa" required>
                                            <option value="bulan"
                                                {{ old('satuan_sewa', 'bulan') == 'bulan' ? 'selected' : '' }}>Bulan
                                            </option>
                                            <option value="hari"
                                                {{ old('satuan_sewa') == 'hari' ? 'selected' : '' }}>Hari</option>
                                        </select>
                                        @error('satuan_sewa')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <!-- Durasi sewa -->
                                    <div class="col-12 form-group">
                                        <input type="number" name="durasi_sewa" id="durasi_sewa"
                                            placeholder="Lama Sewa (bulan)" min="1"
                                            value="{{ old('durasi_sewa') }}" required>
                                        @error('durasi_sewa')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <!-- Harga per satuan -->
                                    <div class="col-12 form-group">
                                        <label>Harga per Satuan</label>
                                        <input type="text" id="harga_per_satuan"
                                            value="{{ old('harga_per_satuan', 'Rp -') }}" readonly>
                                        <input type="hidden" name="total_harga_raw" id="total_harga_raw"
                                            value="{{ old('total_harga_raw') }}">
                                        <small>Harga layanan per bulan atau per hari sesuai pilihan satuan.</small>
                                    </div>

                                    <!-- Pajak per satuan -->
                                    <div class="col-12 form-group">
                                        <label>Pajak / Beban per Satuan</label>
                                        <input type="text" id="pajak_per_bulan"
                                            value="{{ old('pajak_per_bulan', 'Rp -') }}" readonly>
                                        <small>Pajak atau beban lain per bulan atau hari sesuai pilihan satuan.</small>
                                    </div>

                                    <!-- Total pajak -->
                                    <div class="col-12 form-group">
                                        <label>Total Pajak</label>
                                        <input type="text" id="total_pajak"
                                            value="{{ old('total_pajak', 'Rp -') }}" readonly>
                                        <small>Total pajak selama masa sewa (pajak per satuan × lama sewa).</small>
                                    </div>

                                    <!-- Total harga -->
                                    <div class="col-12 form-group">
                                        <label>Total Harga</label>
                                        <input type="text" name="total_harga" id="total_harga"
                                            placeholder="Total Harga" value="{{ old('total_harga') }}" readonly
                                            required>
                                        @error('total_harga')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
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
        <!-- job-form-section end -->

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
    <!-- Bagian form pengajuan layanan -->

    <script>
        $(document).ready(function() {
            const hargaPerLayanan = {};
            const pajakPerBulan = {};

            $('#jenis_pengajuan option').each(function() {
                const id = $(this).val();
                const harga = parseInt($(this).data('harga')) || 0;
                const pajak = parseInt($(this).data('pajak')) || 0;
                if (id) {
                    hargaPerLayanan[id] = harga;
                    pajakPerBulan[id] = pajak;
                }
            });

            function updateHarga() {
                const jenisId = $('#jenis_pengajuan').val();
                if (!jenisId) {
                    $('#harga_per_satuan').val('Rp -');
                    $('#pajak_per_bulan').val('Rp -');
                    $('#total_pajak').val('Rp -');
                    $('#total_harga').val('Rp -');
                    $('#total_harga_raw').val(''); // reset hidden
                    return;
                }

                const durasi = parseInt($('#durasi_sewa').val()) || 0;
                const satuan = $('#satuan_sewa').val() || 'bulan';

                const hargaBulan = hargaPerLayanan[jenisId] || 0;
                const pajakBulan = pajakPerBulan[jenisId] || 0;

                let hargaPerSatuan = hargaBulan;
                let pajakPerSatuan = pajakBulan;
                let keterangan = '';

                if (satuan === 'hari') {
                    hargaPerSatuan = Math.round(hargaBulan / 30);
                    pajakPerSatuan = Math.round(pajakBulan / 30);
                    keterangan = ' / hari';
                    $('#durasi_sewa').attr('placeholder', 'Lama Sewa (hari)');
                } else {
                    keterangan = ' / bulan';
                    $('#durasi_sewa').attr('placeholder', 'Lama Sewa (bulan)');
                }

                const totalHarga = hargaPerSatuan * durasi;
                const totalPajak = pajakPerSatuan * durasi;
                const grandTotal = totalHarga + totalPajak;

                $('#harga_per_satuan').val('Rp ' + hargaPerSatuan.toLocaleString('id-ID') + keterangan);
                $('#pajak_per_bulan').val('Rp ' + pajakPerSatuan.toLocaleString('id-ID') + keterangan);
                $('#total_pajak').val('Rp ' + totalPajak.toLocaleString('id-ID'));
                $('#total_harga').val('Rp ' + grandTotal.toLocaleString('id-ID'));

                // ✅ Tambahan baris ini untuk hidden input angka murni
                $('#total_harga_raw').val(grandTotal);
            }

            if ($.fn.niceSelect) {
                $('#jenis_pengajuan').niceSelect();
                $('#satuan_sewa').niceSelect();
            }

            $('#jenis_pengajuan, #durasi_sewa, #satuan_sewa').on('change input', function() {
                updateHarga();

                const selectedText = $('#jenis_pengajuan option:selected').text().toLowerCase();
                if (selectedText.includes('sewa kios') || selectedText.includes('sewa lahan')) {
                    $('.form-layanan-opsional').show();
                } else {
                    $('.form-layanan-opsional').hide();
                }
            });

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

    <script>
        document.getElementById('no_wa').addEventListener('input', function(e) {
            let value = e.target.value;
            // Hapus semua karakter selain angka
            value = value.replace(/\D/g, '');
            // Batasi panjang maksimal 13 digit
            if (value.length > 13) {
                value = value.slice(0, 13);
            }
            e.target.value = value;
        });
    </script>

</body>

</html>
