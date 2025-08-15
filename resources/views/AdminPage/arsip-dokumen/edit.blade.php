<!doctype html>
<html lang="en">

@include('AdminPage.layouts.head')

<body>
    <div id="layout-wrapper">

        @include('AdminPage.layouts.header')
        @include('AdminPage.layouts.sidebar')

        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">

                    <form action="{{ route('admin.arsip-dokumen.update', $arsip->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Judul halaman -->
                        <div class="row mb-4">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0">Edit Arsip Dokumen</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript:void(0);">Profil</a></li>
                                            <li class="breadcrumb-item active">Arsip Dokumen</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">

                                        {{-- Nama --}}
                                        <div class="mb-3 row">
                                            <label for="nama-input" class="col-md-2 col-form-label">Nama</label>
                                            <div class="col-md-10">
                                                <input class="form-control @error('nama') is-invalid @enderror"
                                                    type="text" id="nama-input" name="nama"
                                                    placeholder="Masukkan nama" value="{{ old('nama', $arsip->nama) }}"
                                                    required>
                                                @error('nama')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- NIK --}}
                                        <div class="mb-3 row">
                                            <label for="nik-input" class="col-md-2 col-form-label">NIK</label>
                                            <div class="col-md-10">
                                                <input class="form-control @error('nik') is-invalid @enderror"
                                                    type="text" id="nik-input" name="nik"
                                                    placeholder="Masukkan NIK" value="{{ old('nik', $arsip->nik) }}"
                                                    required>
                                                @error('nik')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- Gambar --}}
                                        <div class="mb-3 row">
                                            <label for="gambar-input" class="col-md-2 col-form-label">Gambar</label>
                                            <div class="col-md-10">
                                                <input class="form-control @error('gambar') is-invalid @enderror"
                                                    type="file" id="gambar-input" accept="image/*" name="gambar"
                                                    onchange="previewImage(this, 'preview-gambar')">
                                                @error('gambar')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror

                                                {{-- Preview Gambar --}}
                                                <div class="mt-3">
                                                    <p class="mb-2">Gambar Saat Ini:</p>
                                                    <img id="preview-gambar"
                                                        src="{{ $arsip->gambar ? asset('storage/' . $arsip->gambar) : 'https://via.placeholder.com/150x200?text=Belum+Ada+Gambar' }}"
                                                        alt="Preview Gambar" width="150"
                                                        class="rounded shadow-sm border">
                                                </div>
                                                <div class="form-text mt-2">Unggah file baru untuk mengganti dokumen
                                                    (opsional)</div>
                                            </div>
                                        </div>

                                        {{-- Tombol Submit --}}
                                        <div class="row">
                                            <div class="col-md-10 offset-md-2">
                                                <button type="submit"
                                                    class="btn btn-primary waves-effect waves-light w-md">Submit</button>
                                                <a href="{{ route('admin.arsip-dokumen.index') }}"
                                                    class="btn btn-outline-secondary waves-effect waves-light w-md">Kembali</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            @include('AdminPage.layouts.footer')
        </div>
    </div>

    <div class="rightbar-overlay"></div>

    @include('AdminPage.layouts.scripts')

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
