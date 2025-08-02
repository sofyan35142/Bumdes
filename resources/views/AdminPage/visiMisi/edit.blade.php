<!doctype html>
<html lang="en">

<head>
    {{-- Memanggil file head --}}
    @include('AdminPage.layouts.head')
</head>

<body>
    <div id="layout-wrapper">
        {{-- Header dan Sidebar --}}
        @include('AdminPage.layouts.header')
        @include('AdminPage.layouts.sidebar')

        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">

                    {{-- Judul halaman --}}
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Edit Visi Misi BUMDes</h4>
                                <div class="page-title-right d-flex align-items-center">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="#">Profil</a></li>
                                        <li class="breadcrumb-item active">Edit Visi Misi</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Konten utama --}}
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('admin.visi_misi.update') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        {{-- VISI --}}
                                        <div class="mb-3">
                                            <label class="form-label">Visi</label>
                                            <textarea name="visi" class="form-control" rows="3">{{ old('visi', $data->visi) }}</textarea>
                                        </div>

                                        {{-- MISI --}}
                                        {{-- MISI --}}
                                        <div class="mb-3">
                                            <label class="form-label">Misi</label>
                                            <div class="repeater">
                                                <div data-repeater-list="misi_raw">
                                                    @if (!empty($data->misi))
                                                        @foreach ($data->misi as $item)
                                                            <div data-repeater-item class="mb-2 d-flex gap-2">
                                                                <input type="text" name="value"
                                                                    class="form-control" value="{{ $item }}">
                                                                <input data-repeater-delete type="button"
                                                                    class="btn btn-danger" value="Hapus">
                                                            </div>
                                                        @endforeach
                                                    @else
                                                        <div data-repeater-item class="mb-2 d-flex gap-2">
                                                            <input type="text" name="value" class="form-control"
                                                                placeholder="Tulis misi...">
                                                            <input data-repeater-delete type="button"
                                                                class="btn btn-danger" value="Hapus">
                                                        </div>
                                                    @endif
                                                </div>
                                                <input data-repeater-create type="button" class="btn btn-primary mt-2"
                                                    value="Tambah Misi">
                                            </div>
                                        </div>



                                        {{-- TUJUAN --}}
                                        <div class="mb-3">
                                            <label class="form-label">Tujuan</label>
                                            <div class="repeater">
                                                <div data-repeater-list="tujuan_raw">
                                                    @if (!empty($data->tujuan))
                                                        @foreach ($data->tujuan as $item)
                                                            <div data-repeater-item class="mb-2 d-flex gap-2">
                                                                <input type="text" name="value"
                                                                    class="form-control" value="{{ $item }}">
                                                                <input data-repeater-delete type="button"
                                                                    class="btn btn-danger" value="Hapus">
                                                            </div>
                                                        @endforeach
                                                    @else
                                                        <div data-repeater-item class="mb-2 d-flex gap-2">
                                                            <input type="text" name="tujuan" class="form-control"
                                                                placeholder="Tulis tujuan...">
                                                            <input data-repeater-delete type="button"
                                                                class="btn btn-danger" value="Hapus">
                                                        </div>
                                                    @endif
                                                </div>
                                                <input data-repeater-create type="button" class="btn btn-primary mt-2"
                                                    value="Tambah Tujuan">
                                            </div>
                                        </div>


                                        {{-- GAMBAR VISI MISI --}}
                                        <div class="mb-3">
                                            <label class="form-label">Gambar Visi Misi</label><br>
                                            @if ($data->gambar_visi_misi)
                                                <img src="{{ asset($data->gambar_visi_misi) }}" width="200"
                                                    class="mb-2"><br>
                                            @endif
                                            <input type="file" name="gambar_visi_misi" class="form-control">
                                        </div>

                                        {{-- JUDUL PANDUAN --}}
                                        <div class="mb-3">
                                            <label class="form-label">Judul Panduan</label>
                                            <input type="text" name="judul_panduan" class="form-control"
                                                value="{{ old('judul_panduan', $data->judul_panduan) }}">
                                        </div>

                                        {{-- POIN PANDUAN --}}
                                        <div class="mb-3">
                                            <label class="form-label">Poin Panduan</label>
                                            <div class="repeater">
                                                <div data-repeater-list="poin_panduan_raw">
                                                    @if (!empty($data->poin_panduan))
                                                        @foreach ($data->poin_panduan as $item)
                                                            <div data-repeater-item class="mb-2 d-flex gap-2">
                                                                <input type="text" name="value"
                                                                    class="form-control" value="{{ $item }}">
                                                                <input data-repeater-delete type="button"
                                                                    class="btn btn-danger" value="Hapus">
                                                            </div>
                                                        @endforeach
                                                    @else
                                                        <div data-repeater-item class="mb-2 d-flex gap-2">
                                                            <input type="text" name="poin_panduan"
                                                                class="form-control"
                                                                placeholder="Tulis poin panduan...">
                                                            <input data-repeater-delete type="button"
                                                                class="btn btn-danger" value="Hapus">
                                                        </div>
                                                    @endif
                                                </div>
                                                <input data-repeater-create type="button"
                                                    class="btn btn-primary mt-2" value="Tambah Poin">
                                            </div>
                                        </div>

                                        {{-- GAMBAR PANDUAN --}}
                                        <div class="mb-3">
                                            <label class="form-label">Gambar Panduan</label><br>
                                            @if ($data->gambar_panduan)
                                                <img src="{{ asset($data->gambar_panduan) }}" width="200"
                                                    class="mb-2"><br>
                                            @endif
                                            <input type="file" name="gambar_panduan" class="form-control">
                                        </div>

                                        {{-- FILE PANDUAN --}}
                                        <div class="mb-3">
                                            <label class="form-label">File Panduan (PDF/DOC)</label>
                                            @if ($data->file_panduan)
                                                <p><a href="{{ asset($data->file_panduan) }}" target="_blank">Lihat
                                                        File Saat Ini</a></p>
                                            @endif
                                            <input type="file" name="file_panduan" class="form-control">
                                        </div>

                                        {{-- BUTTON --}}
                                        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            @include('AdminPage.layouts.footer')
        </div>
    </div>

    <div class="rightbar-overlay"></div>
    @include('AdminPage.layouts.scripts')

</body>

</html>
