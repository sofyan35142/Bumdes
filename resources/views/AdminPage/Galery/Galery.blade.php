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
                                <h4 class="mb-0">Datatables</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                        <li class="breadcrumb-item active">Datatables</li>
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
                                    <h4 class="card-title">DATA GALERY BUMDES PAKUKERTO</h4>
                                    {{-- <p class="card-title-desc">DataTables has most features enabled by
                                        default, so all you need to do to use it with your own tables is to call
                                        the construction function: <code>$().DataTable();</code>. --}}
                                    {{-- </p> --}}
                                    <div class="mb-3 text-end">
                                        <a href="{{ route('admin.tambahgalery') }}" class="btn btn-primary">
                                            <i class="fas fa-plus"></i> Tambah Data Galeri
                                        </a>
                                    </div>
                                    <div class="table-responsive">
                                        <table id="tableku" class="table table-bordered dt-responsive nowrap"
                                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>NO</th>
                                                    <th>Tipe</th>
                                                    <th>Nama Kegiatan</th>
                                                    <th>Foto</th>
                                                    <th>Link Video</th>
                                                    <th>Tanggal Dibuat</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($galerys as $item)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ ucfirst($item->tipe) }}</td>
                                                        <td class="text-break" style="max-width: 300px;">
                                                            @if (!empty($item->nama_kegiatan_foto))
                                                                {{ $item->nama_kegiatan_foto }}
                                                            @elseif(!empty($item->nama_kegiatan_video))
                                                                {{ $item->nama_kegiatan_video }}
                                                            @else
                                                                <em>Tidak ada nama kegiatan</em>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->tipe === 'foto' && $item->foto_path)
                                                                <img src="{{ asset('Galery/' . $item->foto_path) }}"
                                                                    alt="Foto Kegiatan"
                                                                    style="width: 80px; height: 80px;">
                                                            @else
                                                                -
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->tipe === 'video' && $item->link_video)
                                                                <a href="{{ $item->link_video }}" target="_blank">Tonton
                                                                    Video</a>
                                                            @else
                                                                -
                                                            @endif
                                                        </td>
                                                        <td>{{ $item->created_at->format('d-m-Y') }}</td>
                                                        <td>
                                                            <a href="{{ route('admin.editgalery', $item->id) }}"
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
                        </div> <!-- end col -->
                    </div> <!-- end row -->



                </div> <!-- container-fluid -->
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
                            let url = "{{ route('admin.deletegalery', ':id') }}";
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
