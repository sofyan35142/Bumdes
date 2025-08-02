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
                                    {{-- Tombol Edit Visi Misi, sesuaikan rute dengan nama yang benar --}}
                                    <a href="{{ route('admin.visi_misi.edit', $data->id) }}">
                                        <button class="btn btn-primary mb-3">Edit Visi Misi</button>
                                    </a>

                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="width: 20%">Visi</th>
                                                <th>Misi</th>
                                                <th>Tujuan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                {{-- Menampilkan Visi --}}
                                                <td>{{ $data->visi }}</td>

                                                {{-- Menampilkan Misi sebagai list --}}
                                                <td>
                                                    <ol>
                                                        @if (is_array($data->misi))
                                                            @foreach ($data->misi as $misiItem)
                                                                <li>{{ $misiItem }}</li>
                                                            @endforeach
                                                        @endif
                                                    </ol>
                                                </td>

                                                {{-- Menampilkan Tujuan sebagai list --}}
                                                <td>
                                                    <ol>
                                                        @if (is_array($data->tujuan))
                                                            @foreach ($data->tujuan as $tujuanItem)
                                                                <li>{{ $tujuanItem }}</li>
                                                            @endforeach
                                                        @endif
                                                    </ol>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div class="row mt-4">
                                        {{-- Menampilkan Gambar Visi Misi --}}
                                        @if ($data->gambar_visi_misi)
                                            <div class="col-md-6 mb-3">
                                                <h5>Gambar Visi Misi</h5>
                                                <img src="{{ asset('visimisi/' . $data->gambar_visi_misi) }}"
                                                    alt="Gambar Visi Misi" class="img-fluid rounded border"
                                                    style="max-height: 300px;">
                                            </div>
                                        @endif

                                        {{-- Menampilkan Panduan --}}
                                        <div class="col-md-6 mb-3">
                                            <h5>{{ $data->judul_panduan ?? 'Panduan BUMDes' }}</h5>

                                            {{-- Gambar Panduan --}}
                                            @if ($data->gambar_panduan)
                                                <img src="{{ asset('visimisi/' . $data->gambar_panduan) }}"
                                                    alt="Gambar Panduan" class="img-fluid rounded border mb-3"
                                                    style="max-height: 200px;">
                                            @endif

                                            {{-- Poin-poin Panduan --}}
                                            @if (is_array($data->poin_panduan))
                                                <ul class="list-unstyled">
                                                    @foreach ($data->poin_panduan as $poin)
                                                        <li><i class="mdi mdi-check-bold text-primary me-2"></i>{{ $poin }}</li>
                                                    @endforeach
                                                </ul>
                                            @endif

                                            {{-- Link Unduh File Panduan --}}
                                            @if ($data->file_panduan)
                                                <a href="{{ asset('panduan/' . $data->file_panduan) }}" class="btn btn-info mt-2" download>
                                                    <i class="mdi mdi-download me-1"></i>Unduh Panduan
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                    @else
                                        <p>Data Visi Misi BUMDes belum tersedia.</p>
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
