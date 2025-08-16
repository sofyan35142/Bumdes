<!DOCTYPE html>
<html lang="en">

<head>
    @include('Landingpage.layout.head')
</head>


<!-- page wrapper -->

<body>

    <div class="boxed_wrapper ltr">


        <!-- preloader -->
        @include('Landingpage.layout.preloader')
        <!-- preloader end -->
        <section class="page-title centred pt_110">
            <div class="auto-container">
                <div class="content-box">
                    <h1>Pilih Ikon</h1>
                    <p class="mt-3 text-muted">
                        Silakan <strong>klik salah satu ikon</strong> di bawah untuk memilih.
                        Ikon yang dipilih akan otomatis dimasukkan ke form edit.
                    </p>
                </div>
            </div>
        </section>

        <!-- contact-section -->
        <section class="contact-section pt_110 pb_30">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="row">
                        @for ($i = 1; $i <= 47; $i++)
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                                <div class="inner-box text-center p-3 border rounded shadow-sm h-100 pilih-ikon"
                                    style="cursor:pointer;" onclick="pilihIkon('icon-{{ $i }}')">
                                    <div class="icon-box mb-2" style="font-size: 48px; line-height: 1;">
                                        <i class="icon-{{ $i }}"></i>
                                    </div>
                                    <small class="text-muted">icon-{{ $i }}</small>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </section>

        <!--Scroll to top-->
        <div class="scroll-to-top">
            <svg class="scroll-top-inner" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>

    </div>


    @include('Landingpage.layout.scripts')
    <script>
        function pilihIkon(iconClass) {
            localStorage.setItem('selectedIcon', iconClass);
            window.location.href = "{{ url()->previous() }}";
        }
    </script>
</body>

</html>
