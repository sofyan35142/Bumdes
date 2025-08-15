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
                                    <h4 class="card-title">Data Informasi Kontak</h4>
                                    @if ($kontak)
                                        {{-- Tombol Edit --}}
                                        <div class="mb-3 text-end">
                                            <a href="{{ route('admin.contact.edit') }}">
                                                <button class="btn btn-primary mb-3"><i class="fas fa-pencil"></i>Edit Informasi Kontak</button>
                                            </a>
                                        </div>

                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <th style="width: 20%">Alamat</th>
                                                    <td>{{ $kontak->alamat }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Email</th>
                                                    <td>{{ $kontak->email }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Telepon</th>
                                                    <td>{{ $kontak->telepon }}</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="mt-4">
                                            <h5>Lokasi di Google Maps</h5>
                                            <iframe src="{{ $kontak->iframe_maps }}" width="100%" height="350"
                                                style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                        </div>
                                    @else
                                        <div class="alert alert-warning">
                                            Data informasi kontak belum tersedia.
                                        </div>
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

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    @include('AdminPage.layouts.scripts')

</body>

</html>
