<<<<<<< HEAD
    <script src="{{ asset('AdminPage/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('AdminPage/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('AdminPage/assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('AdminPage/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('AdminPage/assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('AdminPage/assets/libs/waypoints/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('AdminPage/assets/libs/jquery.counterup/jquery.counterup.min.js') }}"></script>

    <!-- apexcharts -->
    <script src="{{ asset('AdminPage/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <script src="{{ asset('AdminPage/assets/js/pages/dashboard.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('AdminPage/assets/js/app.js') }}"></script>

    <!-- ckeditor -->
    <script src="{{ asset('AdminPage/assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>

    <!--tinymce js-->
    <script src="{{ asset('AdminPage/assets/libs/tinymce/tinymce.min.js') }}"></script>

    <!-- init js -->
    <script src="{{ asset('AdminPage/assets/js/pages/form-editor.init.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.2/css/all.min.css" rel="stylesheet">
    <!-- Tambahkan SweetAlert2 dari CDN -->
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
=======
<!-- ========== Core JS Libraries ========== -->
<script src="{{ asset('AdminPage/assets/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('AdminPage/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('AdminPage/assets/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('AdminPage/assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('AdminPage/assets/libs/node-waves/waves.min.js') }}"></script>

<!-- ========== Utility Libraries ========== -->
<script src="{{ asset('AdminPage/assets/libs/waypoints/lib/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('AdminPage/assets/libs/jquery.counterup/jquery.counterup.min.js') }}"></script>

<!-- ========== Charts ========== -->
<script src="{{ asset('AdminPage/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('AdminPage/assets/js/pages/dashboard.init.js') }}"></script>

<!-- ========== App JS ========== -->
<script src="{{ asset('AdminPage/assets/js/app.js') }}"></script>

<!-- ========== Editors ========== -->
<script src="{{ asset('AdminPage/assets/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>
<script src="{{ asset('AdminPage/assets/libs/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('AdminPage/assets/js/pages/form-editor.init.js') }}"></script>

<!-- ========== Repeater ========== -->
<script src="{{ asset('AdminPage/assets/libs/jquery.repeater/jquery.repeater.min.js') }}"></script>
<script src="{{ asset('AdminPage/assets/js/pages/form-repeater.int.js') }}"></script>

<!-- ========== Font Awesome ========== -->
<link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.2/css/all.min.css" rel="stylesheet">
>>>>>>> 7007257c50bd923beb9a2d7bd3b796945eef966e

<!-- ========== Toastr JS ========== -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    @if (session('success'))
        toastr.success("{{ session('success') }}", 'Berhasil');
    @endif

    @if (session('error'))
        toastr.error("{{ session('error') }}", 'Gagal');
    @endif

    @if (session('warning'))
        toastr.warning("{{ session('warning') }}", 'Peringatan');
    @endif

    @if (session('info'))
        toastr.info("{{ session('info') }}", 'Info'); @endif
</script>
