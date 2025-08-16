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
                                <h4 class="mb-0">Tambah Industri Baru</h4>
                                <div class="page-title-right d-flex align-items-center">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a
                                                href="{{ route('admin.industries.index') }}">Industries</a></li>
                                        <li class="breadcrumb-item active">Tambah Industri</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Form Create --}}
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <form action="{{ route('admin.industries.store') }}" method="POST">
                                        @csrf

                                        <div class="mb-3 row">
                                            <label for="name" class="col-md-2 col-form-label">Nama Industri</label>
                                            <div class="col-md-10">
                                                <input type="text" name="name" id="name" class="form-control"
                                                    value="{{ old('name') }}" required>
                                                @error('name')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="icon" class="col-md-2 col-form-label">Ikon</label>
                                            <div class="col-md-10">
                                                <div class="input-group">
                                                    <input type="text" name="icon" id="icon"
                                                        class="form-control" value="{{ old('icon') }}" required>
                                                    <a href="{{ route('ikonlist') }}" class="btn btn-outline-primary">
                                                        Pilih Ikon
                                                    </a>
                                                </div>
                                                <small class="form-text text-muted">
                                                    Masukkan class ikon, atau klik tombol <strong>Pilih Ikon</strong> di
                                                    samping.
                                                    Contoh: <code>icon-9</code>
                                                </small>
                                                @error('icon')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="staff_count" class="col-md-2 col-form-label">Jumlah
                                                Staff</label>
                                            <div class="col-md-10">
                                                <input type="number" name="staff_count" id="staff_count"
                                                    class="form-control" value="{{ old('staff_count') }}" required>
                                                @error('staff_count')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-10 offset-md-2">
                                                <button type="submit"
                                                    class="btn btn-primary waves-effect waves-light w-md">Submit</button>
                                                <a href="{{ route('admin.industries.index') }}"
                                                    class="btn btn-outline-secondary waves-effect waves-light w-md">Kembali</a>
                                            </div>
                                        </div>
                                    </form>
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
        document.addEventListener("DOMContentLoaded", function() {
            let selectedIcon = localStorage.getItem('selectedIcon');
            if (selectedIcon) {
                document.getElementById('icon').value = selectedIcon;
                localStorage.removeItem('selectedIcon'); // hapus setelah dipakai
            }
        });
    </script>
</body>

</html>
