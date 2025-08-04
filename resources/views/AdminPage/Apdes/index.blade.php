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

                    {{-- Tombol Tambah --}}
                    <div class="row mb-3">
                        <div class="col-12 d-flex justify-content-end">
                            <a href="{{ route('admin.struktur.create') }}" class="btn btn-primary">
                                <i class="fas fa-plus me-1"></i> Tambah Anggota
                            </a>
                        </div>
                    </div>

                    {{-- Struktur Organisasi --}}
                    <div class="row">
                        @forelse ($data as $person)
                            <div class="col-xl-3 col-sm-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <img src="{{ asset($person->foto) }}"
                                                onerror="this.src='https://ui-avatars.com/api/?name={{ urlencode($person->nama) }}&background=0D8ABC&color=fff'"
                                                alt="{{ $person->nama }}"
                                                class="avatar-lg rounded-circle img-thumbnail">
                                        </div>

                                        <h5 class="font-size-16 mb-1">{{ $person->nama }}</h5>
                                        <p class="text-muted mb-2">{{ $person->jabatan }}</p>

                                        {{-- Tombol Edit & Hapus --}}
                                        <div class="d-flex justify-content-center gap-2 mt-3">
                                            <a href="{{ route('admin.struktur.edit', $person->id) }}" class="btn btn-sm btn-warning">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <form action="{{ route('admin.struktur.delete', $person->id) }}" method="POST"
                                                onsubmit="return confirm('Yakin ingin menghapus?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="fas fa-trash"></i> Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12">
                                <div class="alert alert-warning text-center">
                                    Belum ada data struktur organisasi.
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
            @include('AdminPage.layouts.footer')
        </div>
    </div>

    <div class="rightbar-overlay"></div>
    @include('AdminPage.layouts.scripts')
</body>

</html>
