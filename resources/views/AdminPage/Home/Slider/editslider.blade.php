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

                    <form action="{{ route('admin.updateslider', $data->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        {{-- Slider 1 --}}
                        <div class="mb-4">
                            <label class="form-label fw-bold">Title Slider 1</label>
                            <input type="text" name="title_slider1" class="form-control"
                                placeholder="Masukkan title slider 1" value="{{ $data->title_slider1 ?? '' }}">

                            <label class="form-label mt-2">Deskripsi Slider 1</label>
                            <textarea name="deskripsi_slider1" class="form-control" rows="3" placeholder="Masukkan deskripsi slider 1">{{ $data->deskripsi_slider1 ?? '' }}</textarea>

                            <label class="form-label mt-2">Foto Slider 1</label>
                            <center>
                                <img id="preview-slider1"
                                    src="{{ $data->foto_slider1 ? asset('foto slider/' . $data->foto_slider1) : 'https://via.placeholder.com/200x150?text=Belum+Ada+Gambar' }}"
                                    class="img-fluid rounded mb-2 d-block" style="max-height: 200px;">
                            </center>
                            <input type="file" name="foto_slider1" class="form-control" accept="image/*"
                                onchange="previewImage(this, 'preview-slider1')">
                        </div>

                        {{-- Slider 2 --}}
                        <div class="mb-4">
                            <label class="form-label fw-bold">Title Slider 2</label>
                            <input type="text" name="title_slider2" class="form-control"
                                placeholder="Masukkan title slider 2" value="{{ $data->title_slider2 ?? '' }}">

                            <label class="form-label mt-2">Deskripsi Slider 2</label>
                            <textarea name="deskripsi_slider2" class="form-control" rows="3" placeholder="Masukkan deskripsi slider 2">{{ $data->deskripsi_slider2 ?? '' }}</textarea>

                            <label class="form-label mt-2">Foto Slider 2</label>
                            <center>
                                <img id="preview-slider2"
                                    src="{{ $data->foto_slider2 ? asset('foto slider/' . $data->foto_slider2) : 'https://via.placeholder.com/200x150?text=Belum+Ada+Gambar' }}"
                                    class="img-fluid rounded mb-2 d-block" style="max-height: 200px;">
                            </center>
                            <input type="file" name="foto_slider2" class="form-control" accept="image/*"
                                onchange="previewImage(this, 'preview-slider2')">
                        </div>

                        {{-- Slider 3 --}}
                        <div class="mb-4">
                            <label class="form-label fw-bold">Title Slider 3</label>
                            <input type="text" name="title_slider3" class="form-control"
                                placeholder="Masukkan title slider 3" value="{{ $data->title_slider3 ?? '' }}">

                            <label class="form-label mt-2">Deskripsi Slider 3</label>
                            <textarea name="deskripsi_slider3" class="form-control" rows="3" placeholder="Masukkan deskripsi slider 3">{{ $data->deskripsi_slider3 ?? '' }}</textarea>

                            <label class="form-label mt-2">Foto Slider 3</label>
                            <center>
                                <img id="preview-slider3"
                                    src="{{ $data->foto_slider3 ? asset('foto slider/' . $data->foto_slider3) : 'https://via.placeholder.com/200x150?text=Belum+Ada+Gambar' }}"
                                    class="img-fluid rounded mb-2 d-block" style="max-height: 200px;">
                            </center>
                            <input type="file" name="foto_slider3" class="form-control" accept="image/*"
                                onchange="previewImage(this, 'preview-slider3')">
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-primary px-4">Simpan Perubahan</button>
                        </div>
                    </form>




                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            @include('AdminPage.layouts.footer')
        </div>
        <!-- end main content--

    </div>
    <!END layout-wrapper -->



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
                        <input class="form-check-input" type="radio" name="sidebar-color"
                            id="sidebar-color-colored" value="colored"
                            onchange="document.body.setAttribute('data-sidebar', 'colored')">
                        <label class="form-check-label" for="sidebar-color-colored">Colored</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Direction</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-direction"
                            id="layout-direction-ltr" value="ltr">
                        <label class="form-check-label" for="layout-direction-ltr">LTR</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-direction"
                            id="layout-direction-rtl" value="rtl">
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
            ClassicEditor
                .create(document.querySelector('#classic-editor'))
                .catch(error => {
                    console.error(error);
                });
        </script>
        <script>
            function previewImage(input, previewId) {
                const file = input.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById(previewId).src = e.target.result;
                    };
                    reader.readAsDataURL(file);
                }
            }
        </script>


</body>

<!-- Mirrored from themesbrand.com/minible/layouts/form-editors.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Jun 2025 07:29:52 GMT -->

</html>
