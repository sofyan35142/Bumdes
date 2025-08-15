<!doctype html>
<html lang="en">

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
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Data Layanan Unggulan</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Layanan</a></li>
                                        <li class="breadcrumb-item active">Unggulan</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Data Layanan Unggulan BUMDes Pakukerto</h4>

                                    <!-- Tombol Tambah Data -->
                                    <div class="mb-3 text-end">
                                        <a href="{{ route('admin.tambahunggulan') }}">
                                            <button class="btn btn-primary mb-3"><i class=""></i>Tambah Layanan
                                                Unggulan</button>
                                        </a>
                                    </div>

                                    <div class="table-responsive">
                                        <table id="tableku" class="table table-bordered dt-responsive nowrap"
                                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Layanan</th>
                                                    <th>Deskripsi</th>
                                                    <th>Kategori</th>
                                                    <th>Foto</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($unggulan as $index => $item)
                                                    <tr>
                                                        <td>{{ $index + 1 }}</td>
                                                        <td>{{ $item->nama_layanan }}</td>
                                                        <td style="word-break: break-word; white-space: normal;">
                                                            {!! $item->deskripsi !!}
                                                        </td>
                                                        <td>{{ $item->kategori->nama_kategori ?? '-' }}</td>
                                                        <td>
                                                            @if ($item->foto_layanan)
                                                                <img src="{{ asset('foto layanan unggulan/' . $item->foto_layanan) }}"
                                                                    alt="Foto Layanan"
                                                                    style="max-width: 80px; max-height:80px;">
                                                            @else
                                                                <span class="text-muted">Tidak ada foto</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <a href="{{ route('admin.editunggulan', $item->id) }}"
                                                                class="btn btn-warning">
                                                                <i class="fa-solid fa-pen-to-square"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-danger btn-delete"
                                                                data-id="{{ $item->id }}">
                                                                <i class="fa-solid fa-trash"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- container-fluid -->
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
                            // Lakukan penghapusan, misalnya redirect ke route destroy
                            let url = "{{ route('admin.hapusunggulan', ':id') }}";
                            url = url.replace(':id', id);
                            window.location.href = url;
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

</body>

</html>
