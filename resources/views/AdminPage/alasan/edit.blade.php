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
                                <h4 class="mb-0">Kenapa Memilih BUMDes Pakukerto?</h4>
                                <div class="page-title-right d-flex align-items-center">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Profil</a></li>
                                        <li class="breadcrumb-item active">Kenapa Memilih Kami</li>
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

                                    <h4 class="card-title">Form Edit Alasan Memilih BUMDes</h4>
                                    <p class="card-title-desc">Silakan perbarui data alasan memilih BUMDes di bawah ini.
                                    </p>

                                    <form action="{{ route('admin.alasan.update', $alasan->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')

                                        <div class="mb-3 row">
                                            <label for="judul" class="col-md-2 col-form-label">Judul</label>
                                            <div class="col-md-10">
                                                <input type="text" name="judul" id="judul" class="form-control"
                                                    value="{{ old('judul', $alasan->judul) }}" required>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="ikon" class="col-md-2 col-form-label">Ikon
                                                (Flaticon)</label>
                                            <div class="col-md-10">
                                                <input type="text" name="ikon" id="ikon" class="form-control"
                                                    value="{{ old('ikon', $alasan->ikon) }}" required>
                                                <small class="form-text text-muted">
                                                    Masukkan class ikon dari <a href="https://www.flaticon.com/"
                                                        target="_blank">Flaticon</a>, contoh: <code>fi
                                                        fi-rr-check</code>
                                                </small>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="deskripsi" class="col-md-2 col-form-label">Deskripsi</label>
                                            <div class="col-md-10">
                                                <textarea name="deskripsi" id="deskripsi" class="form-control" rows="4" required>{{ old('deskripsi', $alasan->deskripsi) }}</textarea>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-10 offset-md-2">
                                                <button type="submit"
                                                    class="btn btn-primary waves-effect waves-light w-md">Submit</button>
                                                <a href="{{ route('admin.alasan.index') }}"
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

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    @include('AdminPage.layouts.scripts')

</body>

</html>
