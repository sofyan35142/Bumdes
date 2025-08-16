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
                    <h1>Visi dan Misi BUMDes</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>-</li>
                        <li>Visi dan Misi BUMDes</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="testimonial-page-section pt_110 pb_120">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_three">
                            <div class="content-box">
                                <div class="sec-title pb_30 sec-title-animation animation-style2">
                                    <span class="sub-title mb_10 title-animation">Visi dan Misi Kami</span>
                                    <h2 class="title-animation">Visi, Misi dan Tujuan BUMDes</h2>
                                </div>
                                <ul class="accordion-box">
                                    <!-- Visi -->
                                    <li class="accordion block active-block">
                                        <div class="acc-btn active">
                                            <div class="icon-box"><i class="icon-21"></i></div>
                                            <h4>Visi BUMDes</h4>
                                        </div>
                                        <div class="acc-content current">
                                            <div class="content">
                                                <p>{{ $data->visi }}</p>
                                            </div>
                                        </div>
                                    </li>

                                    <!-- Misi -->
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <div class="icon-box"><i class="icon-21"></i></div>
                                            <h4>Misi BUMDes</h4>
                                        </div>
                                        <div class="acc-content">
                                            <div class="content">
                                                @foreach ($data->misi as $index => $misi)
                                                    <p>{{ $index + 1 }}. {{ $misi }}</p>
                                                @endforeach
                                            </div>
                                        </div>
                                    </li>

                                    <!-- Tujuan -->
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <div class="icon-box"><i class="icon-21"></i></div>
                                            <h4>Tujuan BUMDes</h4>
                                        </div>
                                        <div class="acc-content">
                                            <div class="content">
                                                @foreach ($data->tujuan as $index => $tujuan)
                                                    <p>{{ $index + 1 }}. {{ $tujuan }}</p>
                                                @endforeach
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Gambar -->
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image-box ml_70">
                            <figure class="image image-hov-one">
                                <img src="{{ asset($data->gambar_visi_misi) }}" alt="" width="540"
                                    height="519" style="object-fit:cover;">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- download-section -->
        <section class="download-section alternat-3 pb_120">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="pattern-layer"
                        style="background-image: url('{{ asset('landingpage/assets/images/shape/shape-20.png') }}');">
                    </div>
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                            <div class="content-box">
                                @php
                                    $judul = explode(' ', $book->judul, 2);
                                @endphp
                                <h2>{{ $judul[0] }}
                                    @if (isset($judul[1]))
                                        <span>{{ $judul[1] }}</span>
                                    @endif
                                </h2>
                                <ul class="list-item mb_30">
                                    {!! $book->points !!}
                                </ul>
                                <a type="button" href="{{ asset($book->file_ebook) }}" download
                                    class="theme-btn btn-one">Download E-book</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 image-column">
                            <div class="image-box">
                                <figure class="image">
                                    <img src="{{ asset($book->gambar) }}" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- download-section end -->
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
