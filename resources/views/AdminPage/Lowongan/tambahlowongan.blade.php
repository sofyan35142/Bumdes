<!doctype html>
<html lang="en">


<!-- Mirrored from themesbrand.com/minible/layouts/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Jun 2025 07:29:48 GMT -->

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

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Form Tambah Data Kegiatan</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Blog</a></li>
                                        <li class="breadcrumb-item active">Tambah Data</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">Input Data Kegiatan Baru</h4> <br>
                                    {{-- <p class="card-title-desc">Isi semua kolom di bawah untuk menambahkan entri blog
                                        baru.</p> --}}

                                    <form method="post" action="/admin/insertlowongan" enctype="multipart/form-data">
                                        @csrf

                                        {{-- Judul Lowongan --}}
                                        <div class="mb-3 row">
                                            <label for="judul_lowongan" class="col-md-2 col-form-label">Judul
                                                Lowongan</label>
                                            <div class="col-md-10">
                                                <input
                                                    class="form-control @error('judul_lowongan') is-invalid @enderror"
                                                    type="text" id="judul_lowongan"
                                                    placeholder="Masukkan judul lowongan" name="judul_lowongan"
                                                    value="{{ old('judul_lowongan') }}">
                                                @error('judul_lowongan')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <br>

                                        {{-- Deskripsi Lowongan --}}
                                        <h4 class="card-title">Deskripsi Lowongan :</h4>
                                        <textarea id="classic-editor" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror"
                                            rows="10">{{ old('deskripsi') }}</textarea>
                                        @error('deskripsi')
                                            <div class="text-danger small">{{ $message }}</div>
                                        @enderror

                                        <br>

                                        {{-- Tugas Yang Ditawarkan --}}
                                        <h4 class="card-title">Tugas Yang Ditawarkan :</h4>
                                        <textarea id="kualifikasi-editor" name="tugas" class="form-control @error('tugas') is-invalid @enderror"
                                            rows="10">{{ old('tugas') }}</textarea>
                                        @error('tugas')
                                            <div class="text-danger small">{{ $message }}</div>
                                        @enderror

                                        <br>

                                        {{-- Kualifikasi Lowongan --}}
                                        <h4 class="card-title">Kualifikasi Lowongan :</h4>
                                        <textarea id="tugas-editor" name="kualifikasi" class="form-control @error('kualifikasi') is-invalid @enderror"
                                            rows="10">{{ old('kualifikasi') }}</textarea>
                                        @error('kualifikasi')
                                            <div class="text-danger small">{{ $message }}</div>
                                        @enderror

                                        {{-- Tanggal Dibuka --}}
                                        <div class="mb-3 row">
                                            <label for="tanggal_dibuka" class="col-md-2 col-form-label">Tanggal
                                                Dibuka</label>
                                            <div class="col-md-10">
                                                <input
                                                    class="form-control @error('tanggal_dibuka') is-invalid @enderror"
                                                    type="date" id="tanggal_dibuka" name="tanggal_dibuka"
                                                    value="{{ old('tanggal_dibuka') }}">
                                                @error('tanggal_dibuka')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- Tanggal Ditutup --}}
                                        <div class="mb-3 row">
                                            <label for="tanggal_ditutup" class="col-md-2 col-form-label">Tanggal
                                                Ditutup</label>
                                            <div class="col-md-10">
                                                <input
                                                    class="form-control @error('tanggal_ditutup') is-invalid @enderror"
                                                    type="date" id="tanggal_ditutup" name="tanggal_ditutup"
                                                    value="{{ old('tanggal_ditutup') }}">
                                                @error('tanggal_ditutup')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- Lokasi Lowongan --}}
                                        <div class="mb-3 row">
                                            <label for="lokasi" class="col-md-2 col-form-label">Lokasi
                                                Lowongan</label>
                                            <div class="col-md-10">
                                                <input class="form-control @error('lokasi') is-invalid @enderror"
                                                    type="text" id="lokasi" placeholder="Masukkan Lokasi lowongan"
                                                    name="lokasi" value="{{ old('lokasi') }}">
                                                @error('lokasi')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- Poster Lowongan --}}
                                        <div class="mb-3 row">
                                            <label for="blog-image-input" class="col-md-2 col-form-label">Poster
                                                Lowongan</label>
                                            <div class="col-md-10">
                                                <input
                                                    class="form-control @error('poster_lowongan') is-invalid @enderror"
                                                    type="file" id="blog-image-input" accept="image/*"
                                                    name="poster_lowongan" onchange="previewImage(event)">
                                                <div class="form-text">Unggah gambar poster Layanan</div>
                                                @error('poster_lowongan')
                                                    <div class="text-danger small">{{ $message }}</div>
                                                @enderror

                                                <!-- Preview akan muncul di bawah input -->
                                                <img id="image-preview" class="mt-2"
                                                    style="max-height: 200px; display: none;">
                                            </div>
                                        </div>

                                        <div class="d-flex flex-wrap gap-3 mt-3">
                                            <button type="submit"
                                                class="btn btn-primary waves-effect waves-light w-md">Simpan
                                                Lowongan Pekerjaan</button>
                                            <button type="reset"
                                                class="btn btn-outline-secondary waves-effect waves-light w-md">Reset
                                                Form</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Page-content -->


@include('AdminPage.layouts.footer')
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="rightbar-title d-flex align-items-center p-3">

                <h5 class="m-0 me-2">Settings</h5>

                <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
            </div>

            <!-- Settings -->
            <hr class="m-0" />

            <div class="p-4">
                <h6 class="mb-3">Layout</h6>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout" id="layout-vertical"
                        value="vertical">
                    <label class="form-check-label" for="layout-vertical">Vertical</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout" id="layout-horizontal"
                        value="horizontal">
                    <label class="form-check-label" for="layout-horizontal">Horizontal</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Layout Mode</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-mode" id="layout-mode-light"
                        value="light">
                    <label class="form-check-label" for="layout-mode-light">Light</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-mode" id="layout-mode-dark"
                        value="dark">
                    <label class="form-check-label" for="layout-mode-dark">Dark</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Layout Width</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-width" id="layout-width-fuild"
                        value="fuild" onchange="document.body.setAttribute('data-layout-size', 'fluid')">
                    <label class="form-check-label" for="layout-width-fuild">Fluid</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-width" id="layout-width-boxed"
                        value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed')">
                    <label class="form-check-label" for="layout-width-boxed">Boxed</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Topbar Color</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="topbar-color" id="topbar-color-light"
                        value="light" onchange="document.body.setAttribute('data-topbar', 'light')">
                    <label class="form-check-label" for="topbar-color-light">Light</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="topbar-color" id="topbar-color-dark"
                        value="dark" onchange="document.body.setAttribute('data-topbar', 'dark')">
                    <label class="form-check-label" for="topbar-color-dark">Dark</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Size</h6>

                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-default"
                        value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
                    <label class="form-check-label" for="sidebar-size-default">Default</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-compact"
                        value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'small')">
                    <label class="form-check-label" for="sidebar-size-compact">Compact</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-small"
                        value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
                    <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Color</h6>

                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-light"
                        value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
                    <label class="form-check-label" for="sidebar-color-light">Light</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-dark"
                        value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
                    <label class="form-check-label" for="sidebar-color-dark">Dark</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-colored"
                        value="colored" onchange="document.body.setAttribute('data-sidebar', 'colored')">
                    <label class="form-check-label" for="sidebar-color-colored">Colored</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Direction</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-direction" id="layout-direction-ltr"
                        value="ltr">
                    <label class="form-check-label" for="layout-direction-ltr">LTR</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-direction" id="layout-direction-rtl"
                        value="rtl">
                    <label class="form-check-label" for="layout-direction-rtl">RTL</label>
                </div>

            </div>

        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    @include('AdminPage.layouts.scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const tanggalDibuka = document.getElementById("tanggal_dibuka");
            const tanggalDitutup = document.getElementById("tanggal_ditutup");

            // Set minimal tanggal dibuka = hari ini
            const today = new Date().toISOString().split('T')[0];
            tanggalDibuka.min = today;
            tanggalDibuka.value = today;

            // Update min tanggal ditutup setiap kali tanggal dibuka diubah
            tanggalDibuka.addEventListener("change", function() {
                tanggalDitutup.min = tanggalDibuka.value;
            });

            // Inisialisasi awal min tanggal ditutup
            tanggalDitutup.min = tanggalDibuka.value;
        });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#classic-editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        function previewImage(event) {
            const input = event.target;
            const preview = document.getElementById('image-preview');

            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#kualifikasi-editor'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#tugas-editor'))
            .catch(error => {
                console.error(error);
            });
    </script>

</body>

</html>
