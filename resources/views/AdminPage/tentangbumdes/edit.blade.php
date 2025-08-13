<!doctype html>
<html lang="en">

<head>
    {{-- Memanggil file head --}}
    @include('AdminPage.layouts.head')
</head>

<body>
    <div id="layout-wrapper">
        {{-- Header dan Sidebar --}}
        @include('AdminPage.layouts.header')
        @include('AdminPage.layouts.sidebar')

        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">

                    {{-- Judul halaman --}}
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Edit Tentang BUMDes</h4>
                                <div class="page-title-right d-flex align-items-center">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="#">Profil</a></li>
                                        <li class="breadcrumb-item active">Edit Tentang BUMDes</li>
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
                                    <form action="{{ route('admin.tentangbumdes.update') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        {{-- Gambar 1 - 4 --}}
                                        @for ($i = 1; $i <= 4; $i++)
                                            @php $imgField = "gambar_$i"; @endphp
                                            <div class="mb-3">
                                                <label class="form-label">Gambar {{ $i }}</label><br>
                                                @if (!empty($data->$imgField))
                                                    <img src="{{ asset($data->$imgField) }}" width="200" class="mb-2 rounded border"><br>
                                                @endif
                                                <input type="file" name="{{ $imgField }}" class="form-control">
                                            </div>
                                        @endfor

                                        {{-- Title --}}
                                        <div class="mb-3">
                                            <label class="form-label">Title</label>
                                            <input type="text" name="title" class="form-control" value="{{ old('title', $data->title) }}" required>
                                        </div>

                                        {{-- Deskripsi Singkat --}}
                                        <div class="mb-3">
                                            <label class="form-label">Deskripsi Singkat</label>
                                            <textarea name="deskripsi_singkat" rows="4" class="form-control" required>{{ old('deskripsi_singkat', $data->deskripsi_singkat) }}</textarea>
                                        </div>

                                        {{-- Points (Repeater) --}}
                                        <div class="mb-3">
                                            <label class="form-label">Points</label>
                                            <div class="repeater">
                                                <div data-repeater-list="points">
                                                    @if (!empty($data->points))
                                                        @foreach ($data->points as $point)
                                                            <div data-repeater-item class="mb-3 border p-3 rounded">
                                                                <div class="mb-2">
                                                                    <label>Judul Point</label>
                                                                    <input type="text" name="title" class="form-control" value="{{ $point['title'] ?? '' }}" required>
                                                                </div>
                                                                <div class="mb-2">
                                                                    <label>Subtitle Point</label>
                                                                    <input type="text" name="subtitle" class="form-control" value="{{ $point['subtitle'] ?? '' }}" required>
                                                                </div>
                                                                <input data-repeater-delete type="button" class="btn btn-danger" value="Hapus Point">
                                                            </div>
                                                        @endforeach
                                                    @else
                                                        <div data-repeater-item class="mb-3 border p-3 rounded">
                                                            <div class="mb-2">
                                                                <label>Judul Point</label>
                                                                <input type="text" name="title" class="form-control" placeholder="Judul point..." required>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label>Subtitle Point</label>
                                                                <input type="text" name="subtitle" class="form-control" placeholder="Subtitle point..." required>
                                                            </div>
                                                            <input data-repeater-delete type="button" class="btn btn-danger" value="Hapus Point">
                                                        </div>
                                                    @endif
                                                </div>
                                                <input data-repeater-create type="button" class="btn btn-primary mt-2" value="Tambah Point">
                                            </div>
                                        </div>

                                        {{-- BUTTON --}}
                                        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
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

    {{-- Pastikan kamu sudah load library repeater seperti jquery repeater --}}
    <script>
        $(document).ready(function () {
            $('.repeater').repeater({
                initEmpty: false,
                defaultValues: {
                    'title': '',
                    'subtitle': ''
                },
                show: function () {
                    $(this).slideDown();
                },
                hide: function (deleteElement) {
                    if(confirm('Apakah yakin ingin menghapus point ini?')) {
                        $(this).slideUp(deleteElement);
                    }
                }
            });
        });
    </script>

</body>

</html>
