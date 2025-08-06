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

                                    <h4 class="card-title">Tambah Testimonial</h4>
                                    <p class="card-title-desc">Silakan isi data Testimonial</p>

                                    <form action="{{ route('admin.testimonial.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        {{-- Nama --}}
                                        <div class="mb-3 row">
                                            <label for="nama" class="col-md-2 col-form-label">Nama</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="nama" id="nama"
                                                    placeholder="Masukkan nama" required>
                                            </div>
                                        </div>

                                        {{-- Keterangan --}}
                                        <div class="mb-3 row">
                                            <label for="keterangan" class="col-md-2 col-form-label">Keterangan</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="keterangan" id="keterangan"
                                                    placeholder="Contoh: Pelanggan BUMDes" required>
                                            </div>
                                        </div>

                                        {{-- Deskripsi Testimonial --}}
                                        <div class="mb-3 row">
                                            <label for="deskripsi_testimonial" class="col-md-2 col-form-label">Deskripsi Testimonial</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control" name="deskripsi_testimonial" id="deskripsi_testimonial"
                                                    placeholder="Masukkan deskripsi testimonial" required rows="4"></textarea>
                                            </div>
                                        </div>

                                        {{-- Rating --}}
                                        <div class="mb-3 row">
                                            <label for="rating" class="col-md-2 col-form-label">Rating</label>
                                            <div class="col-md-10">
                                                <div class="rating">
                                                    <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                                                    <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
                                                    <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
                                                    <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
                                                    <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- Foto Testimonial --}}
                                        <div class="mb-3 row">
                                            <label for="foto_testimonial" class="col-md-2 col-form-label">Foto</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="file" name="foto_testimonial" id="foto_testimonial"
                                                    accept="image/*" onchange="previewImage(event)">
                                                <img id="preview-img" src="#" alt="Preview" style="display: none; max-width: 200px; margin-top: 10px;">
                                            </div>
                                        </div>

                                        {{-- Tombol Simpan --}}
                                        <div class="mb-3 row">
                                            <div class="col-md-10 offset-md-2">
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                <a href="/"
                                                    class="btn btn-secondary">Kembali</a>
                                            </div>
                                        </div>
                                    </form>

                                    <style>
                                        .rating {
                                            display: flex;
                                            flex-direction: row-reverse;
                                            gap: 0.3rem;
                                            font-size: 1.5rem;
                                            justify-content: flex-end;
                                        }

                                        .rating input {
                                            display: none;
                                        }

                                        .rating label {
                                            color: #ddd;
                                            cursor: pointer;
                                        }

                                        .rating input:checked ~ label {
                                            color: #ffd700;
                                        }

                                        .rating label:hover,
                                        .rating label:hover ~ label {
                                            color: #ffd700;
                                        }
                                    </style>

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
