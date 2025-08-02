<!doctype html>
<html lang="en">

<head>
    @include('AdminPage.layouts.head')
</head>

<body>
    <div id="layout-wrapper">
        @include('AdminPage.layouts.header')
        @include('AdminPage.layouts.sidebar')

        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">

                    {{-- Judul halaman --}}
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Struktur Organisasi BUMDes</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="#">Profil</a></li>
                                        <li class="breadcrumb-item active">Struktur Organisasi</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">Tambah Anggota Struktur Organisasi</h4>
                                    <p class="card-title-desc">Silakan isi data anggota struktur organisasi BUMDes.</p>

                                    <form action="{{ route('admin.struktur.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf

                                        {{-- Nama --}}
                                        <div class="mb-3 row">
                                            <label for="nama" class="col-md-2 col-form-label">Nama</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="nama" id="nama"
                                                    placeholder="Nama Lengkap" required>
                                            </div>
                                        </div>

                                        {{-- Jabatan --}}
                                        <div class="mb-3 row">
                                            <label for="jabatan" class="col-md-2 col-form-label">Jabatan</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="jabatan" id="jabatan"
                                                    placeholder="Contoh: Ketua" required>
                                            </div>
                                        </div>

                                        {{-- Urutan Tampil --}}
                                        <div class="mb-3 row">
                                            <label for="urutan" class="col-md-2 col-form-label">Urutan</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="number" name="urutan" id="urutan"
                                                    placeholder="Contoh: 1" required min="1">
                                            </div>
                                        </div>

                                        {{-- Foto --}}
                                        <div class="mb-3 row">
                                            <label for="foto" class="col-md-2 col-form-label">Foto</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="file" name="foto" id="foto"
                                                    accept="image/*" required onchange="previewImage(event)">
                                                {{-- Preview Gambar --}}
                                                <div class="mt-3">
                                                    <img id="preview-img" src="#" alt="Preview" class="img-thumbnail"
                                                        style="max-width: 200px; display: none;">
                                                </div>
                                            </div>
                                        </div>

                                        {{-- Tombol Simpan --}}
                                        <div class="mb-3 row">
                                            <div class="col-md-10 offset-md-2">
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                <a href="{{ route('admin.struktur.index') }}"
                                                    class="btn btn-secondary">Kembali</a>
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
    </div>

    <div class="rightbar-overlay"></div>
    @include('AdminPage.layouts.scripts')

    {{-- Script Preview Gambar --}}
    <script>
        function previewImage(event) {
            const input = event.target;
            const preview = document.getElementById('preview-img');
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
</body>

</html>
