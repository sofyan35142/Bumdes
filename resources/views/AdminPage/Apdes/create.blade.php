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
                                                <select class="form-select" name="tahun" id="tahun" required>
                                                    <option value="">Pilih Tahun</option>
                                                    @for ($year = date('Y'); $year >= date('Y') - 5; $year--)
                                                        <option value="{{ $year }}">{{ $year }}</option>
                                                    @endfor
                                                </select>
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
                                                <select class="form-select kategori-select" name="kategori"
                                                    id="kategori" required>
                                                    <option value="">Pilih atau ketik kategori</option>
                                                    <option value="Pajak">Pajak</option>
                                                    <option value="Belanja Barang">Belanja Barang</option>
                                                    <option value="Subsidi">Subsidi</option>
                                                    <option value="Lainnya">Lainnya</option>
                                                </select>
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
    <script>
        $(document).ready(function() {
            $('.kategori-select').select2({
                // theme: "bootstrap-5",
                width: '100%',
                tags: true, // bisa tambah kategori baru
                placeholder: "Pilih atau ketik kategori",
                allowClear: true
            });
        });
    </script>

</body>

</html>
