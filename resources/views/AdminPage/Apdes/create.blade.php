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

                                    <h4 class="card-title">Tambah Apdes</h4>
                                    <p class="card-title-desc">Silakan isi data Apdes</p>

                                    <form action="{{ route('admin.apdes.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        {{-- Tahun --}}
                                        <div class="mb-3 row">
                                            <label for="tahun" class="col-md-2 col-form-label">Tahun</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="tahun" id="tahun"
                                                    placeholder="Contoh: 2023" required>
                                            </div>
                                        </div>

                                        {{-- Jenis --}}
                                        <div class="mb-3 row">
                                            <label for="jenis" class="col-md-2 col-form-label">Jenis</label>
                                            <div class="col-md-10">
                                                <select class="form-select" name="jenis" id="jenis" required>
                                                    <option value="">Pilih Jenis</option>
                                                    <option value="pendapatan">Pendapatan</option>
                                                    <option value="belanja">Belanja</option>
                                                    <option value="pembiayaan">Pembiayaan</option>
                                                </select>
                                            </div>
                                        </div>

                                        {{-- Kategori --}}
                                        <div class="mb-3 row">
                                            <label for="kategori" class="col-md-2 col-form-label">Kategori</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="kategori" id="kategori"
                                                    placeholder="Masukkan kategori" required>
                                            </div>
                                        </div>

                                        {{-- Jumlah --}}
                                        <div class="mb-3 row">
                                            <label for="jumlah" class="col-md-2 col-form-label">Jumlah</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="number" name="jumlah" id="jumlah"
                                                    placeholder="Masukkan jumlah" required step="0.01">
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
