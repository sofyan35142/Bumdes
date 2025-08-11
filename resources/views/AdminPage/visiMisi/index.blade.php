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
                                <h4 class="mb-0">Manajemen Visi Misi BUMDes</h4>
                                <div class="page-title-right d-flex align-items-center">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Profil</a></li>
                                        <li class="breadcrumb-item active">Visi Misi</li>
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
                                    <h4 class="card-title">Data Visi Misi BUMDes</h4>

                                    @if ($data)
                                        {{-- Tombol Edit --}}
                                        <a href="{{ route('admin.visi_misi.edit') }}">
                                            <button class="btn btn-primary mb-3">Edit Visi Misi</button>
                                        </a>

                                        {{-- Visi --}}
                                        <div class="mt-3">
                                            <h5>Visi</h5>
                                            <p>{{ $data->visi }}</p>
                                        </div>

                                        {{-- Misi --}}
                                        @if (is_array($data->misi) && count($data->misi) > 0)
                                            <div class="mt-4">
                                                <h5>Misi</h5>
                                                <ol>
                                                    @foreach ($data->misi as $misiItem)
                                                        <li>{{ $misiItem }}</li>
                                                    @endforeach
                                                </ol>
                                            </div>
                                        @endif

                                        {{-- Tujuan --}}
                                        @if (is_array($data->tujuan) && count($data->tujuan) > 0)
                                            <div class="mt-4">
                                                <h5>Tujuan</h5>
                                                <ol>
                                                    @foreach ($data->tujuan as $tujuanItem)
                                                        <li>{{ $tujuanItem }}</li>
                                                    @endforeach
                                                </ol>
                                            </div>
                                        @endif

                                        {{-- Gambar Visi Misi --}}
                                        @if ($data->gambar_visi_misi)
                                            <div class="mt-4">
                                                <h5>Gambar Visi Misi</h5>
                                                <img src="{{ asset($data->gambar_visi_misi) }}" alt="Gambar Visi Misi"
                                                    class="img-fluid rounded border" style="max-height: 300px;">
                                            </div>
                                        @endif
                                    @else
                                        <p class="text-muted">Data visi misi belum tersedia.</p>
                                    @endif
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
