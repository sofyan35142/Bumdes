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
                                    {{-- Nama --}}
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="nama" placeholder="Masukkan Nama Anda"
                                            value="{{ old('nama') }}">
                                        @error('nama')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="number" name="nomor_telepone" placeholder="Masukkan Nomor Telepone Anda"
                                            value="{{ old('nomor_telepone') }}">
                                        @error('nomor_telepone')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    {{-- Nomor Telepon
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="tel" name="nomor_telepone" placeholder="Masukkan Nomor Telepon"
                                            value="{{ old('nomor_telepone') }}" inputmode="numeric"
                                            pattern="[0-9]{10,13}"
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0,13);"
                                            minlength="10" maxlength="13"
                                            style="border-radius: 50px; padding: 10px 20px; width: 100%;" required>
                                        @error('nomor_telepone')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div> --}}


                                    {{-- Keterangan --}}
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="keterangan"
                                            placeholder="Keterangan (Contoh: Konsumen BumDes)"
                                            value="{{ old('keterangan') }}">
                                        @error('keterangan')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    {{-- Foto Testimonial --}}
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <div class="upload-box">
                                            <div class="icon-box">
                                                <img src="{{ asset('LandingPage/assets/images/icons/icon-24.png') }}"
                                                    alt="">
                                            </div>
                                            <input name="foto_testimonial" id="filer_input" type="file"
                                                accept="image/*" onchange="previewImages(event)">
                                            <button type="button">Upload Photo</button>
                                        </div>
                                        <div id="image-preview"
                                            style="margin-top: 15px; display: flex; gap: 10px; flex-wrap: wrap;"></div>
                                        @error('foto_testimonial')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Deskripsi Testimonial --}}
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="deskripsi_testimonial" placeholder="Deskripsi Testimonial">{{ old('deskripsi_testimonial') }}</textarea>
                                    @error('deskripsi_testimonial')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                {{-- Tombol Submit --}}
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
                    @foreach ($form as $form)
                        <div class="col-lg-4 col-md-6 col-sm-12 testimonial-block">
                            <div class="testimonial-block-one">
                                <div class="inner-box">
                                    <div class="shape" style="background-image: url(assets/images/shape/shape-7.png);">
                                    </div>
                                    <div class="icon-box"><img src="assets/images/icons/icon-10.png" alt="">
                                    </div>
                                    <div class="author-box">
                                        <figure class="thumb-box"><img
                                                src="{{ asset('Testimonial/' . $form->foto_testimonial) }}"
                                                alt=""></figure>
                                        <h4>{{ $form->nama }}</h4>
                                        <span class="designation">{{ $form->keterangan }}</span>
                                    </div>
                                    <p>{{ $form->deskripsi_testimonial }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- testimonial-style-three end -->
        <!-- clients-section -->
        <section class="clients-section pt_110 pb_120 centred">
            <div class="auto-container">
                <div class="title-text pb_60 sec-title-animation animation-style2">
                    <h3 class="title-animation">Supported By</h3>
                </div>
                {{-- @foreach ($support as $support) --}}
                <div class="inner-box">
                    <div class="clients-slider-wrapper">
                        <style>
                            .clients-slider-wrapper {
                                overflow: hidden;
                                width: 100%;
                                position: relative;
                            }

                            .clients-slider {
                                display: flex;
                                align-items: center;
                                gap: 40px;
                                animation: scrollLeft 30s linear infinite;
                            }

                            .clients-box {
                                flex: 0 0 auto;
                                width: 220px;
                                height: 130px;
                                display: flex;
                                flex-direction: column;
                                justify-content: center;
                                align-items: center;
                                background-color: #fff;
                                border-radius: 12px;
                                box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
                                padding: 10px;
                            }

                            .clients-logo img,
                            .overlay-logo img {
                                max-width: 100%;
                                max-height: 100px;
                                object-fit: contain;
                                transition: transform 0.3s ease;
                            }

                            .clients-box:hover img {
                                transform: scale(1.1);
                            }

                            @keyframes scrollLeft {
                                0% {
                                    transform: translateX(0);
                                }

                                100% {
                                    transform: translateX(-50%);
                                }
                            }

                            @media (max-width: 768px) {
                                .clients-box {
                                    width: 160px;
                                    height: 100px;
                                }

                                .clients-logo img,
                                .overlay-logo img {
                                    max-height: 80px;
                                }
                            }
                        </style>

                        <div class="clients-slider">
                            {{-- @foreach ($support->take(5) as $support)
                                    <div class="clients-box">
                                        <figure class="clients-logo">
                                            <a href="#">
                                                <img src="{{ asset('Media Partner/' . $support->Logo_Media) }}"
                                                    alt="">
                                            </a>
                                        </figure>
                                        <figure class="overlay-logo">
                                            <a href="#">
                                                <img src="{{ asset('Media Partner/' . $support->Logo_Media) }}"
                                                    alt="">
                                            </a>
                                        </figure>
                                    </div>
                                @endforeach --}}

                            {{-- Duplikat isi agar animasi tidak putus --}}
                            @foreach ($support->take(5) as $support)
                                <div class="clients-box">
                                    <figure class="clients-logo">
                                        <a href="#">
                                            <img src="{{ asset('Media Partner/' . $support->Logo_Media) }}"
                                                alt="">
                                        </a>
                                    </figure>
                                    <figure class="overlay-logo">
                                        <a href="#">
                                            <img src="{{ asset('Media Partner/' . $support->Logo_Media) }}"
                                                alt="">
                                        </a>
                                    </figure>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    {{-- @endforeach --}}
                </div>
        </section>
        <!-- clients-section end -->


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

            const form = this;
            const formData = new FormData(form);

            // Bersihkan pesan error sebelumnya
            document.querySelectorAll('.text-danger').forEach(el => el.innerText = '');

            fetch(form.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Accept': 'application/json' // PENTING supaya Laravel balikin JSON 422
                    }
                })
                .then(async response => {
                    if (response.status === 422) {
                        const data = await response.json();
                        for (const field in data.errors) {
                            const inputField = form.querySelector(`[name="${field}"]`);
                            if (inputField) {
                                let errorElement = inputField.parentElement.querySelector('.text-danger');
                                if (!errorElement) {
                                    errorElement = document.createElement('small');
                                    errorElement.classList.add('text-danger');
                                    inputField.parentElement.appendChild(errorElement);
                                }
                                errorElement.innerText = data.errors[field][0];
                            }
                        }
                    } else if (response.ok) {
                        // Sukses → pindah ke halaman sukses
                        window.location.href = "{{ route('home.testimoni') }}";
                    } else {
                        alert('Gagal mengirim data.');
                    }
                })
                .catch(error => {
                    console.error("Error:", error);
                    alert('Terjadi kesalahan koneksi.');
                });
        });
    </script>




</body><!-- End of .page_wrapper -->

<!-- Mirrored from jobaway.pixcelsthemes.com/job.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Jul 2025 14:03:44 GMT -->

</html>
