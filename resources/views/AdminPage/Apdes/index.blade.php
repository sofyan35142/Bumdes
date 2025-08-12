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
                                <h4 class="mb-0">Laporan Keuangan BUMDes</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="#">Laporan</a></li>
                                        <li class="breadcrumb-item active">Keuangan</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>


                    {{-- Tombol Tambah --}}
                    <div class="row mb-3">
                        <div class="col-12 d-flex justify-content-end">
                            <a href="{{ route('admin.apdes.create') }}" class="btn btn-primary">
                                <i class="fas fa-plus me-1"></i> Tambah Data Keuangan
                            </a>
                        </div>
                    </div>

                    <!-- Chart.js -->
                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                    {{-- Konten Utama --}}
                    {{-- PIE CHART --}}
                    <div class="row mb-5">
                        <div class="col-md-4 mb-4">
                            <div class="card shadow-sm p-3 rounded-4">
                                <h5 class="text-center mb-3">Distribusi Pendapatan</h5>
                                <canvas id="piePendapatan"></canvas>
                                <p class="mt-3 text-center small text-muted">
                                    Grafik menunjukkan kategori sumber pendapatan desa pada tahun {{ $tahun }}.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card shadow-sm p-3 rounded-4">
                                <h5 class="text-center mb-3">Distribusi Belanja</h5>
                                <canvas id="pieBelanja"></canvas>
                                <p class="mt-3 text-center small text-muted">
                                    Grafik menunjukkan alokasi belanja desa pada tahun {{ $tahun }}.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card shadow-sm p-3 rounded-4">
                                <h5 class="text-center mb-3">Distribusi Pembiayaan</h5>
                                <canvas id="piePembiayaan"></canvas>
                                <p class="mt-3 text-center small text-muted">
                                    Menampilkan pembiayaan masuk dan keluar pada tahun {{ $tahun }}.
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- BAR CHART --}}
                    <div class="row">
                        <div class="col-12 col-md-4 mb-5">
                            <h4 class="text-center mt-5 mb-3">Grafik Pendapatan per Tahun</h4>
                            <div class="card shadow-sm p-4 rounded-4">
                                <canvas id="barPendapatan"></canvas>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mb-5">
                            <h4 class="text-center mt-5 mb-3">Grafik Belanja per Tahun</h4>
                            <div class="card shadow-sm p-4 rounded-4">
                                <canvas id="barBelanja"></canvas>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mb-5">
                            <h4 class="text-center mt-5 mb-3">Grafik Pembiayaan per Tahun</h4>
                            <div class="card shadow-sm p-4 rounded-4">
                                <canvas id="barPembiayaan"></canvas>
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
    {{-- ChartJS Script --}}
    <script>
        const tahun = {!! json_encode($grafikPerTahun->pluck('tahun')) !!};
        const totalPendapatan = {!! json_encode($grafikPerTahun->pluck('total_pendapatan')) !!};
        const totalBelanja = {!! json_encode($grafikPerTahun->pluck('total_belanja')) !!};
        const totalPembiayaan = {!! json_encode($grafikPerTahun->pluck('total_pembiayaan')) !!};

        const pie = (id, labels, data, colors) => {
            new Chart(document.getElementById(id), {
                type: 'pie',
                data: {
                    labels: labels,
                    datasets: [{
                        data: data,
                        backgroundColor: colors
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'bottom'
                        }
                    }
                }
            });
        };

        pie('piePendapatan', {!! json_encode($pendapatan->pluck('kategori')) !!}, {!! json_encode($pendapatan->pluck('jumlah')) !!}, ['#4CAF50', '#8BC34A', '#CDDC39']);
        pie('pieBelanja', {!! json_encode($belanja->pluck('kategori')) !!}, {!! json_encode($belanja->pluck('jumlah')) !!}, ['#F44336', '#FF9800', '#FF5722']);
        pie('piePembiayaan', {!! json_encode($pembiayaan->pluck('kategori')) !!}, {!! json_encode($pembiayaan->pluck('jumlah')) !!}, ['#2196F3', '#03A9F4', '#00BCD4']);

        const makeBarChart = (id, label, data, color) => {
            new Chart(document.getElementById(id), {
                type: 'bar',
                data: {
                    labels: tahun,
                    datasets: [{
                        label,
                        data,
                        backgroundColor: color
                    }]
                },
                options: {
                    responsive: true
                }
            });
        };
        makeBarChart('barPendapatan', 'Pendapatan', totalPendapatan, '#4CAF50');
        makeBarChart('barBelanja', 'Belanja', totalBelanja, '#F44336');
        makeBarChart('barPembiayaan', 'Pembiayaan', totalPembiayaan, '#2196F3');
    </script>
</body>

</html>
