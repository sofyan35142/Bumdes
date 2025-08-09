<!doctype html>
<html lang="en">
@include('AdminPage.layouts.head')

<body>

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
                            <div class="card">
                                <div class="card-header bg-light d-flex justify-content-between align-items-center">
                                    <h4 class="mb-0">Daftar Pengajuan Layanan</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="datatable-buttons"
                                            class="table table-striped table-bordered dt-responsive nowrap"
                                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead class="thead-dark text-center">
                                                <tr>    
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>NIK</th>
                                                    <th>No. WA</th>
                                                    <th>Jenis Layanan</th>
                                                    <th>File KTP</th>
                                                    <th>File Surat</th>
                                                    <th>Data Tambahan</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse($permohonan as $index => $item)
                                                    <tr>
                                                        <td class="text-center">{{ $index + 1 }}</td>
                                                        <td>{{ $item->nama_lengkap }}</td>
                                                        <td>{{ $item->nik }}</td>
                                                        <td>{{ $item->no_wa }}</td>
                                                        <td>{{ $item->jenis_layanan }}</td>
                                                        <td class="text-center">
                                                            @if ($item->file_ktp)
                                                                <a href="{{ asset('storage/' . $item->file_ktp) }}"
                                                                    target="_blank">Lihat KTP</a>
                                                            @else
                                                                <span class="text-muted">-</span>
                                                            @endif
                                                        </td>
                                                        <td class="text-center">
                                                            @if ($item->file_surat)
                                                                <a href="{{ asset('storage/' . $item->file_surat) }}"
                                                                    target="_blank">Unduh Surat</a>
                                                            @else
                                                                <span class="text-muted">-</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if (is_array($item->data_lainnya))
                                                                <ul class="mb-0 pl-3">
                                                                    @foreach ($item->data_lainnya as $key => $value)
                                                                        <li>
                                                                            <strong>{{ ucwords(str_replace('_', ' ', $key)) }}</strong>:
                                                                            {{ $value ?? '-' }}
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            @else
                                                                <span class="text-muted">-</span>
                                                            @endif
                                                        </td>
                                                        <td class="text-center">
                                                            <button class="btn btn-sm btn-danger btn-delete"
                                                                data-id="{{ $item->id }}"
                                                                data-token="{{ csrf_token() }}">
                                                                <i class="fa-solid fa-trash"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                @empty

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
            <!-- End Page-content -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Minible.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Crafted with <i class="mdi mdi-heart text-danger"></i> by <a
                                    href="https://themesbrand.com/" target="_blank" class="text-reset">Themesbrand</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
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
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: "btn btn-success",
                    cancelButton: "btn btn-danger"
                },
                buttonsStyling: false
            });

            document.querySelectorAll('.btn-delete').forEach(function(button) {
                button.addEventListener('click', function() {
                    const id = this.getAttribute('data-id');

                    swalWithBootstrapButtons.fire({
                        title: "Yakin mau hapus?",
                        text: "Data yang dihapus tidak bisa dikembalikan!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonText: "Ya, hapus!",
                        cancelButtonText: "Batal",
                        reverseButtons: true
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "/deletepersuratan/" + id;
                        } else if (result.dismiss === Swal.DismissReason.cancel) {
                            swalWithBootstrapButtons.fire(
                                "Dibatalkan",
                                "Data tidak jadi dihapus :)",
                                "error"
                            );
                        }
                    });
                });
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const deleteButtons = document.querySelectorAll(".btn-delete");

            deleteButtons.forEach(button => {
                button.addEventListener("click", function() {
                    const id = this.getAttribute("data-id");
                    const token = this.getAttribute("data-token");

                    Swal.fire({
                        title: 'Yakin ingin menghapus?',
                        text: "Data tidak bisa dikembalikan setelah dihapus!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Ya, hapus!',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            fetch(`/admin/layanan/${id}`, {
                                    method: "DELETE",
                                    headers: {
                                        "X-CSRF-TOKEN": token,
                                        "Accept": "application/json"
                                    }
                                })
                                .then(response => response.json())
                                .then(data => {
                                    if (data.success) {
                                        Swal.fire(
                                            'Terhapus!',
                                            'Data berhasil dihapus.',
                                            'success'
                                        ).then(() => {
                                            location.reload();
                                        });
                                    } else {
                                        Swal.fire(
                                            'Gagal!',
                                            data.message ||
                                            'Terjadi kesalahan saat menghapus.',
                                            'error'
                                        );
                                    }
                                })
                                .catch(() => {
                                    Swal.fire(
                                        'Error!',
                                        'Terjadi kesalahan saat menghubungi server.',
                                        'error'
                                    );
                                });
                        }
                    });
                });
            });
        });
    </script>

</body>

</html>
