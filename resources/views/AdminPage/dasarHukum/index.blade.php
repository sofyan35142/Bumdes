<!doctype html>
<html lang="en">


<!-- Mirrored from themesbrand.com/minible/layouts/form-editors.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Jun 2025 07:29:51 GMT -->
@include('AdminPage.layouts.head')


<body>

    <!-- <body data-layout="horizontal" data-topbar="colored"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('AdminPage.layouts.header')
        <!-- ========== Left Sidebar Start ========== -->
        @include('AdminPage.layouts.sidebar')
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">

                    {{-- Judul halaman --}}
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Manajemen Dasar Hukum BUMDes</h4>
                                <div class="page-title-right d-flex align-items-center">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Profil</a></li>
                                        <li class="breadcrumb-item active">Dasar Hukum</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Konten utama --}}
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Data Dasar Hukum BUMDes</h4>

                                    @if ($data)
                                        {{-- Tombol Edit --}}
                                        <div class="mb-3 text-end">
                                            <a href="{{ route('admin.dasarHukum.edit') }}" class="btn btn-primary">
                                                <i class="fas fa-pen-to-square"></i> Edit Dasar Hukum
                                            </a>
                                        </div>

                                        {{-- Accordion Points --}}
                                        <h5 class="mt-3">Poin Dasar Hukum</h5>
                                        <ol>
                                            @foreach ($data->points as $point)
                                                <li>
                                                    <strong>{{ $point['title'] }}</strong><br>
                                                    <span>{{ $point['body'] }}</span>
                                                </li>
                                            @endforeach
                                        </ol>

                                        {{-- Gambar Samping Accordion --}}
                                        @if ($data->gambar_samping)
                                            <div class="mt-4">
                                                <h5>Gambar Samping</h5>
                                                <img src="{{ asset($data->gambar_samping) }}" alt="Gambar Samping"
                                                    class="img-fluid rounded border" style="max-height: 300px;">
                                            </div>
                                        @endif

                                        {{-- Sertifikat --}}
                                        <div class="mt-4">
                                            <h5>{{ $data->judul }}</h5>
                                            <div>{!! $data->sertifikat_list !!}</div>

                                            @if ($data->sertifikat_file)
                                                <div class="mt-2">
                                                    <a href="{{ asset($data->sertifikat_file) }}"
                                                        target="_blank">
                                                        Lihat Sertifikat (PDF)
                                                    </a>
                                                </div>
                                            @endif
                                        </div>

                                        {{-- Gambar Buku --}}
                                        @if ($data->gambar_buku)
                                            <div class="mt-4">
                                                <h5>Gambar Buku</h5>
                                                <img src="{{ asset($data->gambar_buku) }}" alt="Gambar Buku"
                                                    class="img-fluid rounded border" style="max-height: 300px;">
                                            </div>
                                        @endif
                                    @else
                                        <p class="text-muted">Data dasar hukum belum tersedia.</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            @include('AdminPage.layouts.footer')
        </div>

        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!-- Right Sidebar -->

    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    @include('AdminPage.layouts.scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#classic-editor'))
            .catch(error => {
                console.error(error);
            });
    </script>

</body>

<!-- Mirrored from themesbrand.com/minible/layouts/form-editors.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Jun 2025 07:29:52 GMT -->

</html>
