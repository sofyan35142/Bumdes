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
                                <h4 class="mb-0">Manajemen Tentang BUMDes</h4>
                                <div class="page-title-right d-flex align-items-center">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Profil</a></li>
                                        <li class="breadcrumb-item active">Tentang BUMDes</li>
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
                                    <h4 class="card-title">Data Tentang BUMDes</h4>

                                    @if ($data)
                                        {{-- Tombol Edit --}}
                                        <a href="{{ route('admin.tentangbumdes.edit') }}">
                                            <button class="btn btn-primary mb-3">Edit Tentang BUMDes</button>
                                        </a>

                                        {{-- Gambar --}}
                                        <div class="row mb-4">
                                            @for ($i = 1; $i <= 4; $i++)
                                                @php $imgField = "gambar_$i"; @endphp
                                                @if (!empty($data->$imgField))
                                                    <div class="col-md-3 col-sm-6 mb-3">
                                                        <img src="{{ asset($data->$imgField) }}"
                                                            alt="Gambar {{ $i }}"
                                                            class="img-fluid rounded border"
                                                            style="width: 100%; height: auto;">
                                                    </div>
                                                @endif
                                            @endfor
                                        </div>

                                        {{-- Title --}}
                                        <h3>{{ $data->title }}</h3>

                                        {{-- Deskripsi Singkat --}}
                                        <p>{{ $data->deskripsi_singkat }}</p>

                                        {{-- Points --}}
                                        @if (is_array($data->points) && count($data->points) > 0)
                                            <div class="mt-4">
                                                <div class="row">
                                                    @foreach ($data->points as $point)
                                                        <div class="col-md-6 mb-3">
                                                            <h5>{{ $point['title'] ?? '' }}</h5>
                                                            <span>{{ $point['subtitle'] ?? '' }}</span>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endif
                                    @else
                                        <p class="text-muted">Data tentang BUMDes belum tersedia.</p>
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
