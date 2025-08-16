<!doctype html>
<html lang="en">


<!-- Mirrored from themesbrand.com/minible/layouts/form-editors.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Jun 2025 07:29:51 GMT -->
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

                    {{-- Judul halaman --}}
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Manajemen Bidang Industries</h4>
                                <div class="page-title-right d-flex align-items-center">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Profil</a></li>
                                        <li class="breadcrumb-item active">Industries</li>
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

                                    {{-- Tombol tambah --}}
                                    <div class="mb-3 text-end">
                                        <a href="{{ route('admin.industries.create') }}" class="btn btn-primary">
                                            <i class="fas fa-plus"></i> Tambah Industry
                                        </a>
                                    </div>

                                    {{-- Tabel data --}}
                                    <div class="table-responsive">
                                        <table class="table table-bordered align-middle">
                                            <thead class="table-light">
                                                <tr>
                                                    <th width="5%">#</th>
                                                    <th>Nama</th>
                                                    <th>Icon</th>
                                                    <th>Jumlah Staff</th>
                                                    <th width="15%">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($industries as $index => $industry)
                                                    <tr>
                                                        <td>{{ $index + 1 }}</td>
                                                        <td>{{ $industry->name }}</td>
                                                        <td><i class="{{ $industry->icon }}"></i> {{ $industry->icon }}
                                                        </td>
                                                        <td>{{ $industry->staff_count }}</td>
                                                        <td>
                                                            <a href="{{ route('admin.industries.edit', $industry->id) }}"
                                                                class="btn btn-sm btn-warning">
                                                                <i class="fas fa-edit"></i>
                                                            </a>
                                                            <form
                                                                action="{{ route('admin.industries.delete', $industry->id) }}"
                                                                method="POST" class="d-inline delete-form">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-sm btn-danger">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="5" class="text-center">Belum ada data industries
                                                        </td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>

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



    <!-- Right Sidebar -->
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    @include('AdminPage.layouts.scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Pilih semua form dengan class delete-form
            const deleteForms = document.querySelectorAll('.delete-form');

            deleteForms.forEach(form => {
                form.addEventListener('submit', function(e) {
                    e.preventDefault(); // hentikan submit default

                    Swal.fire({
                        title: 'Yakin ingin menghapus?',
                        text: "Data akan dihapus secara permanen!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Ya, hapus!',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit(); // submit form jika dikonfirmasi
                        }
                    });
                });
            });
        });
    </script>
</body>

</html>
