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
                                <h4 class="mb-0">Manajemen Jenis Layanan</h4>

                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Layanan</a></li>
                                    <li class="breadcrumb-item active">Edit Jenis Layanan</li>
                                </ol>

                            </div>
                        </div>
                    </div>

                    {{-- Konten utama --}}
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">Form Edit Jenis Layanan</h4>
                                    <p class="card-title-desc">Silakan perbarui data jenis layanan di bawah ini.</p>

                                    <form action="{{ route('admin.jenisLayanan.update', $layanan->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('PUT')

                                        {{-- Nama Layanan --}}
                                        <div class="mb-3 row">
                                            <label for="nama" class="col-md-2 col-form-label">Nama Layanan</label>
                                            <div class="col-md-10">
                                                <input type="text" name="nama" id="nama" class="form-control"
                                                    value="{{ old('nama', $layanan->nama) }}" required maxlength="255">
                                                @error('nama')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- Satuan Sewa --}}
                                        <div class="mb-3 row">
                                            <label for="satuan_sewa" class="col-md-2 col-form-label">Satuan Sewa</label>
                                            <div class="col-md-10">
                                                <select name="satuan_sewa" id="satuan_sewa" class="form-select"
                                                    required>
                                                    <option value="" disabled
                                                        {{ old('satuan_sewa', $layanan->satuan_sewa) ? '' : 'selected' }}>
                                                        -- Pilih Satuan --
                                                    </option>
                                                    <option value="hari"
                                                        {{ old('satuan_sewa', $layanan->satuan_sewa) == 'hari' ? 'selected' : '' }}>
                                                        Hari</option>
                                                    <option value="bulan"
                                                        {{ old('satuan_sewa', $layanan->satuan_sewa) == 'bulan' ? 'selected' : '' }}>
                                                        Bulan</option>
                                                </select>
                                                @error('satuan_sewa')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- Harga Sewa --}}
                                        <div class="mb-3 row">
                                            <label for="harga_sewa" class="col-md-2 col-form-label">Harga Sewa</label>
                                            <div class="col-md-10">
                                                <input type="text" name="harga_sewa" id="harga_sewa"
                                                    class="form-control currency"
                                                    value="{{ old('harga_sewa', number_format($layanan->harga_sewa, 0, ',', '.')) }}"
                                                    required>
                                                @error('harga_sewa')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- Beban Perbulan --}}
                                        <div class="mb-3 row">
                                            <label for="beban_perbulan" class="col-md-2 col-form-label">Beban
                                                Perbulan</label>
                                            <div class="col-md-10">
                                                <input type="text" name="beban_perbulan" id="beban_perbulan"
                                                    class="form-control currency"
                                                    value="{{ old('beban_perbulan', number_format($layanan->beban_perbulan, 0, ',', '.')) }}"
                                                    required>
                                                @error('beban_perbulan')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- Tombol Submit --}}
                                        <div class="row">
                                            <div class="col-md-10 offset-md-2">
                                                <button type="submit"
                                                    class="btn btn-primary waves-effect waves-light w-md">Update</button>
                                                <a href="{{ route('admin.jenisLayanan.index') }}"
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            function formatRupiah(angka, prefix) {
                let number_string = angka.replace(/[^,\d]/g, '').toString(),
                    split = number_string.split(','),
                    sisa = split[0].length % 3,
                    rupiah = split[0].substr(0, sisa),
                    ribuan = split[0].substr(sisa).match(/\d{3}/gi);

                if (ribuan) {
                    let separator = sisa ? '.' : '';
                    rupiah += separator + ribuan.join('.');
                }

                rupiah = split[1] !== undefined ? rupiah + ',' + split[1] : rupiah;
                return prefix === undefined ? rupiah : (rupiah ? 'Rp ' + rupiah : '');
            }

            // Setiap input dengan class currency
            document.querySelectorAll('.currency').forEach(function(input) {
                input.addEventListener('keyup', function(e) {
                    this.value = formatRupiah(this.value, 'Rp ');
                });

                // Agar saat submit form, yang dikirim nilai numeric tanpa "Rp" dan titik
                input.form.addEventListener('submit', function() {
                    input.value = input.value.replace(/[^0-9]/g, '');
                });
            });
        });
    </script>
</body>

</html>
