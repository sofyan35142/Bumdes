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

                                    <form method="post" action="{{ route('admin.insertgalery') }}" enctype="multipart/form-data">
                                        @csrf

                                        {{-- Pilih tipe --}}
                                        <div class="mb-3 row">
                                            <label for="tipe_lowongan" class="col-md-2 col-form-label">Pilih
                                                Tipe</label>
                                            <div class="col-md-10">
                                                <select id="tipe_lowongan" name="tipe" class="form-select"
                                                    onchange="showForm()">
                                                    <option value="" selected disabled>-- Pilih tipe --</option>
                                                    <option value="foto">Foto</option>
                                                    <option value="video">Video</option>
                                                </select>
                                            </div>
                                        </div>

                                        <br>

                                        {{-- Form Foto --}}
                                        <div id="form-foto" style="display:none;">
                                            <div class="mb-3 row">
                                                <label for="nama_kegiatan_foto" class="col-md-2 col-form-label">Nama
                                                    Kegiatan</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" id="nama_kegiatan_foto"
                                                        name="nama_kegiatan_foto"
                                                        placeholder="Masukkan nama kegiatan untuk foto">
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-md-2 col-form-label">Foto</label>
                                                <div id="foto-repeater">
                                                    <div class="foto-input mb-2 d-flex align-items-center gap-2">
                                                        <input type="file" name="foto_path[]" accept="image/*"
                                                            class="form-control" onchange="previewFoto(this)">
                                                        <button type="button" class="btn btn-danger btn-sm"
                                                            onclick="removeFotoInput(this)">Hapus</button>
                                                        <!-- Tempat preview gambar -->
                                                        <img src="" alt="Preview Foto"
                                                            style="max-height: 100px; margin-left: 10px; display: none;">
                                                    </div>
                                                </div>

                                                <div class="col-md-10 offset-md-2">
                                                    <button type="button" class="btn btn-success btn-sm"
                                                        onclick="addFotoInput()">Tambah Foto</button>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- Form Video --}}
                                        <div id="form-video" style="display:none;">
                                            <div class="mb-3 row">
                                                <label for="nama_kegiatan_video" class="col-md-2 col-form-label">Nama
                                                    Kegiatan</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" id="nama_kegiatan_video"
                                                        name="nama_kegiatan_video"
                                                        placeholder="Masukkan nama kegiatan untuk video">
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label for="link_video" class="col-md-2 col-form-label">Link
                                                    Video</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="url" id="link_video"
                                                        name="link_video" placeholder="Masukkan link video">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-wrap gap-3 mt-3">
                                            <button type="submit"
                                                class="btn btn-primary waves-effect waves-light w-md">Simpan</button>
                                            <button type="reset"
                                                class="btn btn-outline-secondary waves-effect waves-light w-md"
                                                onclick="resetForm()">Reset Form</button>
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
        function showForm() {
            const tipe = document.getElementById('tipe_lowongan').value;
            const formFoto = document.getElementById('form-foto');
            const formVideo = document.getElementById('form-video');

            if (tipe === 'foto') {
                formFoto.style.display = 'block';
                formVideo.style.display = 'none';
            } else if (tipe === 'video') {
                formFoto.style.display = 'none';
                formVideo.style.display = 'block';
            } else {
                formFoto.style.display = 'none';
                formVideo.style.display = 'none';
            }
        }

        function addFotoInput() {
            const repeater = document.getElementById('foto-repeater');
            const div = document.createElement('div');
            div.className = 'foto-input mb-2 d-flex align-items-center gap-2';

            const input = document.createElement('input');
            input.type = 'file';
            input.name = 'foto_path[]';
            input.accept = 'image/*';
            input.className = 'form-control';

            const btn = document.createElement('button');
            btn.type = 'button';
            btn.className = 'btn btn-danger btn-sm';
            btn.innerText = 'Hapus';
            btn.onclick = function() {
                removeFotoInput(btn);
            };

            div.appendChild(input);
            div.appendChild(btn);
            repeater.appendChild(div);
        }

        function removeFotoInput(button) {
            const div = button.parentElement;
            div.remove();
        }

        function resetForm() {
            document.getElementById('form-foto').style.display = 'none';
            document.getElementById('form-video').style.display = 'none';
            document.getElementById('tipe_lowongan').value = '';

            // Reset foto repeater: hapus semua kecuali satu
            const repeater = document.getElementById('foto-repeater');
            while (repeater.children.length > 1) {
                repeater.removeChild(repeater.lastChild);
            }
            // Kosongkan input file pertama
            repeater.children[0].querySelector('input').value = '';

            // Reset input lain juga kalau mau
            document.getElementById('nama_kegiatan_foto').value = '';
            document.getElementById('nama_kegiatan_video').value = '';
            document.getElementById('link_video').value = '';
        }
    </script>

    <script>
        function addFotoInput() {
            const repeater = document.getElementById('foto-repeater');
            const div = document.createElement('div');
            div.className = 'foto-input mb-2 d-flex align-items-center gap-2';

            const input = document.createElement('input');
            input.type = 'file';
            input.name = 'foto_path[]';
            input.accept = 'image/*';
            input.className = 'form-control';
            input.onchange = function() {
                previewFoto(this);
            };

            const btn = document.createElement('button');
            btn.type = 'button';
            btn.className = 'btn btn-danger btn-sm';
            btn.innerText = 'Hapus';
            btn.onclick = function() {
                removeFotoInput(btn);
            };

            const imgPreview = document.createElement('img');
            imgPreview.style.maxHeight = '100px';
            imgPreview.style.marginLeft = '10px';
            imgPreview.style.display = 'none';
            imgPreview.alt = 'Preview Foto';

            div.appendChild(input);
            div.appendChild(btn);
            div.appendChild(imgPreview);
            repeater.appendChild(div);
        }

        function previewFoto(input) {
            const file = input.files[0];
            const img = input.parentElement.querySelector('img');

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    img.src = e.target.result;
                    img.style.display = 'inline-block';
                };
                reader.readAsDataURL(file);
            } else {
                img.src = '';
                img.style.display = 'none';
            }
        }

        function removeFotoInput(button) {
            const div = button.parentElement;
            div.remove();
        }
    </script>
</body>

</html>
