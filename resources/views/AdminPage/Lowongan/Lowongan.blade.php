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
                                <h4 class="mb-0">Manajemen Lowongan Kerja BUMDes Pakukerto</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Lowongan Kerja</li>
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
                                    <h4 class="card-title">Daftar Lowongan Kerja BUMDes Pakukerto</h4>

                                    <!-- Tombol Tambah -->
                                    <a href="{{ route('admin.tambahlowongan') }}" class="btn btn-primary mb-3">
                                        <i class="fa fa-plus"></i> Tambah Lowongan Baru
                                    </a>

                                    <table id="tableku" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Judul Lowongan</th>
                                                <th>Deskripsi</th>
                                                <th>Tugas</th>
                                                <th>Kualifikasi</th>
                                                <th>Tanggal Dibuka</th>
                                                <th>Tanggal Ditutup</th>
                                                <th>Lokasi</th>
                                                <th>Poster</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $no = 1; @endphp
                                            @foreach ($lowongan as $item)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $item->judul_lowongan }}</td>
                                                    <td style="word-break: break-word;">{!! $item->deskripsi !!}</td>
                                                    <td style="word-break: break-word;">{!! $item->tugas !!}</td>
                                                    <td style="word-break: break-word;">{!! $item->kualifikasi !!}</td>
                                                    <td>{{ $item->tanggal_dibuka }}</td>
                                                    <td>{{ $item->tanggal_ditutup }}</td>
                                                    <td>{{ $item->lokasi }}</td>
                                                    <td>
                                                        <img src="{{ asset('poster_lowongan/' . $item->poster_lowongan) }}"
                                                            alt="Poster Lowongan"
                                                            style="width: 80px; height: 80px; object-fit: cover;">
                                                    </td>
                                                    <td>
                                                        @if ($item->status == 'dibuka')
                                                            <span class="badge bg-success">Dibuka</span>
                                                        @else
                                                            <span class="badge bg-danger">Ditutup</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('admin.editlowongan', $item->id) }}"
                                                            class="btn btn-warning" title="Edit Lowongan">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-danger btn-delete"
                                                            data-id="{{ $item->id }}" title="Hapus Lowongan">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->

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
                            let url = "{{ route('admin.hapuslowongan', ':id') }}";
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
