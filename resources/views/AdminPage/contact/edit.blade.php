<!doctype html>
<html lang="en">

<head>
    {{-- Memanggil file head --}}
    @include('AdminPage.layouts.head')
</head>

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
        {{-- Memanggil file header dan sidebar --}}
        @include('AdminPage.layouts.header')
        @include('AdminPage.layouts.sidebar')

        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">

                    {{-- Judul halaman --}}
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Manajemen Informasi Kontak</h4>

                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Profil</a></li>
                                    <li class="breadcrumb-item active">Informasi Kontak</li>
                                </ol>

                            </div>
                        </div>
                    </div>

                    {{-- Konten utama --}}
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">Form Edit Informasi Kontak</h4>
                                    <p class="card-title-desc">Silakan perbarui informasi kontak BUMDes di bawah ini.
                                    </p>

                                    <form action="{{ route('admin.contact.update') }}" method="POST">
                                        @csrf
                                        @method('PUT')

                                        {{-- Alamat --}}
                                        <div class="mb-3 row">
                                            <label for="alamat" class="col-md-2 col-form-label">Alamat</label>
                                            <div class="col-md-10">
                                                <textarea name="alamat" id="alamat" class="form-control" rows="3">{{ old('alamat', $kontak->alamat) }}</textarea>
                                            </div>
                                        </div>

                                        {{-- Email --}}
                                        <div class="mb-3 row">
                                            <label for="email" class="col-md-2 col-form-label">Email</label>
                                            <div class="col-md-10">
                                                <input type="email" name="email" class="form-control" id="email"
                                                    value="{{ old('email', $kontak->email) }}">
                                            </div>
                                        </div>

                                        {{-- Telepon --}}
                                        <div class="mb-3 row">
                                            <label for="telepon" class="col-md-2 col-form-label">Telepon</label>
                                            <div class="col-md-10">
                                                <input type="tel" name="telepon" class="form-control" id="telepon"
                                                    value="{{ old('telepon', $kontak->telepon) }}">
                                            </div>
                                        </div>

                                        {{-- Iframe Maps --}}
                                        <div class="mb-3 row">
                                            <label for="iframe_maps" class="col-md-2 col-form-label">Google Maps
                                                (src)</label>
                                            <div class="col-md-10">
                                                <input type="url" name="iframe_maps" class="form-control"
                                                    id="iframe_maps"
                                                    value="{{ old('iframe_maps', $kontak->iframe_maps) }}">
                                                <small class="form-text text-muted">
                                                    Masukkan hanya bagian <code>src</code> dari embed Google Maps.
                                                </small>
                                            </div>
                                        </div>
                                        {{-- Tombol Submit --}}
                                        <div class="row">
                                            <div class="col-md-10 offset-md-2">
                                                <button type="submit"
                                                    class="btn btn-primary waves-effect waves-light w-md">Submit</button>
                                                <a href="{{ route('admin.contact.index') }}"
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

            {{-- @include('Admin.LayoutAdmin.footer') --}}

        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    @include('AdminPage.layouts.scripts')

</body>

</html>
