<!-- Core JS -->
<script src="{{ asset('AdminPage/assets/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('AdminPage/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('AdminPage/assets/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('AdminPage/assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('AdminPage/assets/libs/node-waves/waves.min.js') }}"></script>

<!-- Optional Utility Libraries (load kalau perlu) -->
<script src="{{ asset('AdminPage/assets/libs/waypoints/lib/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('AdminPage/assets/libs/jquery.counterup/jquery.counterup.min.js') }}"></script>

<!-- Charting (load kalau halaman pakai chart) -->
<script src="{{ asset('AdminPage/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('AdminPage/assets/js/pages/dashboard.init.js') }}"></script>

<!-- Editors (load kalau halaman pakai editor) -->
<script src="{{ asset('AdminPage/assets/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>
<script src="{{ asset('AdminPage/assets/libs/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('AdminPage/assets/js/pages/form-editor.init.js') }}"></script>

<!-- Form Repeater (optional) -->
<script src="{{ asset('AdminPage/assets/libs/jquery.repeater/jquery.repeater.min.js') }}"></script>
<script src="{{ asset('AdminPage/assets/js/pages/form-repeater.int.js') }}"></script>

<!-- App JS -->
<script src="{{ asset('AdminPage/assets/js/app.js') }}"></script>

<!-- SweetAlert2 (CDN) -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Toastr JS (CDN) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<!-- DataTables JS (CDN) -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
{{-- <script src="https://cdn.dataxtables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script> --}}

<!-- Toastr Notifications -->
<script>
    @if (session('success')) toastr.success("{{ session('success') }}", 'Berhasil'); @endif
    @if (session('error')) toastr.error("{{ session('error') }}", 'Gagal'); @endif
    @if (session('warning')) toastr.warning("{{ session('warning') }}", 'Peringatan'); @endif
    @if (session('info')) toastr.info("{{ session('info') }}", 'Info'); @endif
</script>

<!-- DataTables Init -->
<script>
$(function() {
    $('#tableku').DataTable({
        responsive: true,
        pageLength: 5,
        lengthMenu: [5, 10, 25, 50],
        autoWidth: false,
        language: { url: "//cdn.datatables.net/plug-ins/1.13.6/i18n/id.json" }
    });
});
</script>

