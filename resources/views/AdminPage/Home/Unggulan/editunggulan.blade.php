<!doctype html>
<html lang="en">


<!-- Mirrored from themesbrand.com/minible/layouts/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Jun 2025 07:29:48 GMT -->

@include('AdminPage.layouts.head')

<body>

    <!-- <body data-layout="horizontal" data-topbar="colored"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        @include('AdminPage.layouts.header')
        <!-- ========== Left Sidebar Start ========== -->
        @include('AdminPage.layouts.sidebar')
        <!-- Left Sidebar End -->


        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Form Edit Unggulan</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Unggulan</a></li>
                                        <li class="breadcrumb-item active">Edit Unggulan</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">Edit Layanan Unggulan</h4> <br>
                                    {{-- <p class="card-title-desc">Isi semua kolom di bawah untuk menambahkan entri blog
                                        baru.</p> --}}

                                    <form method="POST" action="{{ route('admin.updateunggulan', $unggulan->id) }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <div class="mb-3 row">
                                            <label for="blog-title-input" class="col-md-2 col-form-label">Nama
                                                Layanan</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" id="blog-title-input"
                                                    placeholder="Masukkan judul layanan" name="Nama_Layanan"
                                                    value="{{ old('nama_layanan', $unggulan->nama_layanan) }}">
                                                @error('nama_layanan')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <h4 class="card-title">Deskripsi</h4>
                                        <textarea id="classic-editor" name="deskripsi" class="form-control" rows="10">{{ old('deskripsi', $unggulan->deskripsi) }}</textarea>
                                        @error('deskripsi')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror

                                        <div class="mb-3 row">
                                            <label for="kategori_id" class="col-md-2 col-form-label">Kategori</label>
                                            <div class="col-md-10">
                                                <select class="form-select" name="kategori_id" id="kategori_id"
                                                    required>
                                                    <option value="" disabled>Pilih Kategori</option>
                                                    @foreach ($kategoris as $kat)
                                                        <option value="{{ $kat->id }}"
                                                            {{ old('kategori_id', $unggulan->kategori_id) == $kat->id ? 'selected' : '' }}>
                                                            {{ $kat->nama_kategori }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('kategori_id')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="foto_layanan" class="col-md-2 col-form-label">Poster
                                                Layanan</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="file" id="foto_layanan"
                                                    accept="image/*" name="foto_layanan" onchange="previewImage(event)">
                                                <div class="form-text">Unggah gambar baru jika ingin mengganti</div>

                                                @if ($unggulan->foto_layanan)
                                                    <div class="mt-2">
                                                        <img id="image-preview"
                                                            src="{{ asset('foto_layanan_unggulan/' . $unggulan->foto_layanan) }}"
                                                            alt="Gambar Layanan" width="200">
                                                    </div>
                                                @else
                                                    <img id="image-preview" class="mt-2"
                                                        style="max-height: 200px; display: none;">
                                                @endif

                                                @error('foto_layanan')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="d-flex flex-wrap gap-3 mt-3">
                                            <button type="submit"
                                                class="btn btn-primary waves-effect waves-light w-md">Simpan</button>
                                            <button type="reset"
                                                class="btn btn-outline-secondary waves-effect waves-light w-md">Reset</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Page-content -->


            @include('AdminPage.layouts.footer')
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!-- Right Sidebar -->

    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    @include('AdminPage.layouts.scripts')

    <script>
        ClassicEditor
            .create(document.querySelector('#classic-editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        function previewImage(event) {
            const input = event.target;
            const preview = document.getElementById('image-preview');

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
