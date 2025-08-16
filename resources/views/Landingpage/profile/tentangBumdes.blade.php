<!DOCTYPE html>
<html lang="en">

<head>
    @include('Landingpage.layout.head')
</head>


<body>

    <div class="boxed_wrapper ltr">
        @include('Landingpage.layout.preloader')


        @include('Landingpage.layout.header')
        @include('Landingpage.layout.mobilemenu')
        <section class="page-title centred pt_110">
            <div class="auto-container">
                <div class="content-box">
                    <h1>Tentang Bumdes</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Beranda</a></li>
                        <li>-</li>
                        <li>Tentang Bumdes</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="about-style-four pt_120 pb_120">
            <div class="auto-container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_two">
                            <div class="image-inner">
                                <div class="image-box mr_15">
                                    <figure class="image image-1 mb_15">
                                        <img src="{{ asset($tentangbumdes->gambar_1 ?? 'Landingpage/assets/images/resource/about-3.jpg') }}"
                                            alt="" width="300" height="300" style="object-fit:cover;">
                                    </figure>
                                    <figure class="image image-2">
                                        <img src="{{ asset($tentangbumdes->gambar_2 ?? 'Landingpage/assets/images/resource/about-4.jpg') }}"
                                            alt="" width="300" height="300" style="object-fit:cover;">
                                    </figure>
                                </div>
                                <div class="image-box">
                                    <figure class="image image-3 mb_15">
                                        <img src="{{ asset($tentangbumdes->gambar_3 ?? 'Landingpage/assets/images/resource/about-5.jpg') }}"
                                            alt="" width="300" height="300" style="object-fit:cover;">
                                    </figure>
                                    <figure class="image image-4">
                                        <img src="{{ asset($tentangbumdes->gambar_4 ?? 'Landingpage/assets/images/resource/about-6.jpg') }}"
                                            alt="" width="300" height="300" style="object-fit:cover;">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_five">
                            <div class="content-box">
                                <div class="sec-title pb_40 sec-title-animation animation-style2">
                                    <span class="sub-title mb_10 title-animation">Tentang Kami</span>
                                    <h2 class="title-animation">{{ $tentangbumdes->title ?? 'Bumdes Terdepan' }}</h2>
                                    <p class="title-animation">
                                        {{ $tentangbumdes->deskripsi_singkat ?? 'Kami berkomitmen untuk menjadi penggerak ekonomi desa yang paling dicintai, dengan menyediakan solusi terbaik untuk masyarakat dan bisnis.' }}
                                    </p>
                                </div>
                                <div class="inner-box clearfix">
                                    @if (!empty($tentangbumdes->points) && is_array($tentangbumdes->points))
                                        @foreach ($tentangbumdes->points as $point)
                                            <div class="single-item">
                                                <div class="icon-box"><i class="{{ $point['icon'] ?? 'icon-29' }}"></i>
                                                </div>
                                                <h4><a href="#">{{ $point['title'] }}</a></h4>
                                                <span>{{ $point['subtitle'] }}</span>
                                            </div>
                                        @endforeach
                                    @else
                                        {{-- fallback static content jika points kosong --}}
                                        <div class="single-item">
                                            <div class="icon-box"><i class="icon-29"></i></div>
                                            <h4><a href="#">Administrasi Mudah stat</a></h4>
                                            <span>Sepanjang 2023</span>
                                        </div>
                                        <div class="single-item">
                                            <div class="icon-box"><i class="icon-30"></i></div>
                                            <h4><a href="#">Dipercaya Masyarakat</a></h4>
                                            <span>Sepanjang 2023</span>
                                        </div>
                                        <div class="single-item">
                                            <div class="icon-box"><i class="icon-31"></i></div>
                                            <h4><a href="#">Terdepan</a></h4>
                                            <span>Sepanjang 2023</span>
                                        </div>
                                        <div class="single-item">
                                            <div class="icon-box"><i class="icon-32"></i></div>
                                            <h4><a href="#">Dukungan Terbaik</a></h4>
                                            <span>Sepanjang 2023</span>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- support by --}}
        <section class="clients-section pt_110 centred pb_120">
            <div class="auto-container">
                <div class="title-text pb_60 sec-title-animation animation-style2">
                    {{-- <span class="sub-title mb_10 title-animation">Mintra</span> --}}
                    <h3 class="title-animation">Mitra BumDes Pakukerto</h3>
                </div>
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
                            @foreach ($mediaPartner->take(5) as $MediaPartner)
                                <div class="clients-box">
                                    <figure class="clients-logo">
                                        <a href="#">
                                            <img src="{{ asset('Media Partner/' . $MediaPartner->Logo_Media) }}"
                                                alt="">
                                        </a>
                                    </figure>
                                    <figure class="overlay-logo">
                                        <a href="#">
                                            <img src="{{ asset('Media Partner/' . $MediaPartner->Logo_Media) }}"
                                                alt="">
                                        </a>
                                    </figure>
                                </div>
                            @endforeach

                            {{-- Duplikat isi agar animasi tidak putus --}}
                            @foreach ($mediaPartner->take(5) as $MediaPartner)
                                <div class="clients-box">
                                    <figure class="clients-logo">
                                        <a href="#">
                                            <img src="{{ asset('Media Partner/' . $MediaPartner->Logo_Media) }}"
                                                alt="">
                                        </a>
                                    </figure>
                                    <figure class="overlay-logo">
                                        <a href="#">
                                            <img src="{{ asset('Media Partner/' . $MediaPartner->Logo_Media) }}"
                                                alt="">
                                        </a>
                                    </figure>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="chooseus-section light-section centred pl_100 pr_100">
            <div class="outer-container p_relative pt_120 pb_90">
                <div class="shape">
                    <div class="shape-1"></div>
                    <div class="shape-2"></div>
                    <div class="shape-3"></div>
                    <div class="shape-4"></div>
                </div>
                <div class="auto-container">
                    <div class="sec-title light pb_60 sec-title-animation animation-style2">
                        <span class="sub-title mb_10 title-animation">Menagapa Kami</span>
                        <h2 class="title-animation">Kenapa Memilih BumDes Pakukerto ?</h2>
                    </div>
                    <div class="row clearfix">
                        @foreach ($alasan as $item)
                            <div class="col-lg-3 col-md-6 col-sm-12 chooseus-block">
                                <div class="chooseus-block-one">
                                    <div class="inner-box">
                                        <div class="icon-box">
                                            <i class="{{ $item->ikon }}"></i>
                                        </div>
                                        <h3><a href="#">{{ $item->judul }}</a></h3>
                                        {{-- @foreach ($alasan as $item) --}}
                                        <p class="overflow-auto" style="height: 9pc">
                                            {{ $item->deskripsi }}
                                        </p>
                                        {{-- @endforeach --}}
                                        <div class="link"></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        {{-- sektor usaha --}}
        <section class="industries-style-four pt_120 pb_90">
            <div class="auto-container">
                <div class="sec-title centred pb_60 sec-title-animation animation-style2">
                    <span class="sub-title mb_10 title-animation">Industries</span>
                    <h2 class="title-animation">Bidang Usaha BUMDes Kami</h2>
                </div>
                <div class="row clearfix">
                    @foreach ($industries as $industry)
                        <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                            <div class="industries-block-two">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="{{ $industry->icon }}"></i></div>
                                    <h3>{{ $industry->name }}</h3>
                                    <p>{{ $industry->staff_count }} Staffs</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="team-section centred pt_120 pb_70">
            <div class="auto-container">
                <div class="sec-title pb_60 sec-title-animation animation-style2">
                    <span class="sub-title mb_10 title-animation">BumDes Pakukerto</span>
                    <h2 class="title-animation">Struktur Organisasi BUMDes</h2>
                </div>
                <div class="row clearfix">
                    @foreach ($team as $index => $member)
                        <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                            <div class="team-block-one wow fadeInUp animated" data-wow-delay="{{ $index * 200 }}ms"
                                data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"
                                            style="width: 300px; height: 300px; border-radius: 50%; overflow: hidden; margin: auto; position: absolute; top: 0; left: 0;">
                                            <img src="{{ asset($member->foto) }}" alt=""
                                                style="width: 100%; height: 100%; object-fit: cover; display: block;">
                                        </figure>
                                        <figure class="overlay-image"
                                            style="width: 300px; height: 300px; border-radius: 50%; overflow: hidden; margin: auto; position: absolute; top: 0; left: 0;">
                                            <img src="{{ asset($member->foto) }}" alt=""
                                                style="width: 100%; height: 100%; object-fit: cover; display: block;">
                                        </figure>
                                    </div>
                                    <div class="lower-content">
                                        <h3><a href="#">{{ $member->nama }}</a></h3>
                                        <span class="designation">{{ $member->jabatan }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="testimonial-style-two pt_70 pb_120">
            <div class="pattern-layer"
                style="background-image: url(http://127.0.0.1:8000/Landingpage/assets/images/shape/shape-17.png);">
            </div>
            <div class="auto-container">
                <div class="sec-title centred pb_60 sec-title-animation animation-style2">
                    <span class="sub-title mb_10 title-animation">Testimoni</span>
                    <h2 class="title-animation">Testimoni Dari Masyarakat</h2>
                </div>
                <div class="two-item-carousel owl-carousel owl-theme owl-nav-none">
                    @foreach ($testi as $item)
                        <div class="testimonial-block-two">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <img src="{{ asset('Landingpage/assets/images/icons/icon-11.png') }}"
                                        alt="">
                                </div>
                                <div class="author-box">
                                    <figure class="thumb-box">
                                        <img src="{{ asset('Testimonial/' . $item->foto_testimonial) }}"
                                            alt="">
                                    </figure>
                                    <h4>{{ $item->nama }}</h4>
                                    <span class="designation">{{ $item->keterangan }}</span>
                                </div>
                                <p>{{ $item->deskripsi_testimonial }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        @include('Landingpage.layout.footer')
        <div class="scroll-to-top">
            <svg class="scroll-top-inner" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
    </div>

    @include('Landingpage.layout.scripts')

</body>

</html>
