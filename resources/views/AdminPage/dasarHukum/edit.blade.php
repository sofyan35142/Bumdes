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
                                <h4 class="mb-0">Edit Dasar Hukum / Sertifikat BUMDes</h4>
                                <div class="page-title-right d-flex align-items-center">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="#">Profil</a></li>
                                        <li class="breadcrumb-item active">Edit Dasar Hukum</li>
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
                                    <form action="{{ route('admin.dasarHukum.update') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        {{-- POINTS (Judul + Isi) --}}
                                        <div class="mb-3">
                                            <label class="form-label">Poin Panduan (Judul dan Isi)</label>
                                            <div class="repeater">
                                                <div data-repeater-list="points_raw">
                                                    @if (!empty($data->points))
                                                        @foreach ($data->points as $point)
                                                            <div data-repeater-item class="mb-3 border rounded p-3">
                                                                <div class="mb-2">
                                                                    <label class="form-label">Judul Poin</label>
                                                                    <input type="text" name="title"
                                                                        class="form-control"
                                                                        value="{{ $point['title'] }}">
                                                                </div>
                                                                <div class="mb-2">
                                                                    <label class="form-label">Isi Poin</label>
                                                                    <textarea name="body" class="form-control" rows="3">{{ $point['body'] }}</textarea>
                                                                </div>
                                                                <input data-repeater-delete type="button"
                                                                    class="btn btn-danger" value="Hapus Poin">
                                                            </div>
                                                        @endforeach
                                                    @else
                                                        <div data-repeater-item class="mb-3 border rounded p-3">
                                                            <div class="mb-2">
                                                                <label class="form-label">Judul Poin</label>
                                                                <input type="text" name="title"
                                                                    class="form-control"
                                                                    placeholder="Tulis judul poin...">
                                                            </div>
                                                            <div class="mb-2">
                                                                <label class="form-label">Isi Poin</label>
                                                                <textarea name="body" class="form-control" rows="3" placeholder="Tulis isi poin..."></textarea>
                                                            </div>
                                                            <input data-repeater-delete type="button"
                                                                class="btn btn-danger" value="Hapus Poin">
                                                        </div>
                                                    @endif
                                                </div>
                                                <input data-repeater-create type="button" class="btn btn-primary mt-2"
                                                    value="Tambah Poin">
                                            </div>
                                        </div>

                                        {{-- JUDUL --}}
                                        <div class="mb-3">
                                            <label class="form-label">Judul Sertifikat</label>
                                            <input type="text" name="judul" class="form-control"
                                                value="{{ old('judul', $data->judul) }}">
                                        </div>



                                        {{-- GAMBAR SAMPING --}}
                                        <div class="mb-3">
                                            <label class="form-label">Gambar Samping</label><br>
                                            @if ($data->gambar_samping)
                                                <img id="previewGambarSamping" src="{{ asset($data->gambar_samping) }}"
                                                    width="200" class="mb-2"><br>
                                            @endif
                                            <input type="file" name="gambar_samping" class="form-control"
                                                onchange="previewImage(this, 'previewGambarSamping')">
                                        </div>

                                        {{-- GAMBAR BUKU --}}
                                        <div class="mb-3">
                                            <label class="form-label">Gambar Buku</label><br>
                                            @if ($data->gambar_buku)
                                                <img id="previewGambarBuku" src="{{ asset($data->gambar_buku) }}"
                                                    width="200" class="mb-2"><br>
                                            @endif
                                            <input type="file" name="gambar_buku" class="form-control"
                                                onchange="previewImage(this, 'previewGambarBuku')">
                                        </div>

                                        {{-- FILE SERTIFIKAT --}}
                                        <div class="mb-3">
                                            <label class="form-label">File Sertifikat (PDF)</label>
                                            @if ($data->sertifikat_file)
                                                <p><a href="{{ asset($data->sertifikat_file) }}" target="_blank">Lihat
                                                        File Saat Ini</a></p>
                                            @endif
                                            <input type="file" name="sertifikat_file" class="form-control">
                                        </div>

                                        {{-- SERTIFIKAT LIST (HTML) pakai Editor --}}
                                        <div class="mb-3">
                                            <label class="form-label">Deskripsi Sertifikat</label>
                                            <textarea id="classic-editor" name="sertifikat_list" class="form-control" rows="10">
                                                {{ old('sertifikat_list', $data->sertifikat_list) }}
                                            </textarea>
                                        </div>

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

</html>
