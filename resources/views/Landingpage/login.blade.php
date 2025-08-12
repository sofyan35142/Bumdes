<!DOCTYPE html>
<html lang="en">

@include('Landingpage.layout.head')


<!-- page wrapper -->

<body>
    <div class="boxed_wrapper ltr">
        <!-- preloader -->
        @include('Landingpage.layout.preloader')
        <!-- preloader end --

        <!-- sign-section -->
        <div
            style="display: flex; justify-content: center; align-items: center; height: 100vh; background: #f5f7fa; font-family: 'Segoe UI', sans-serif;">
            <div
                style="background: white; padding: 40px 30px; border-radius: 20px; box-shadow: 0 10px 40px rgba(0,0,0,0.1); width: 100%; max-width: 400px;">
                <h2 style="text-align: center; font-size: 24px; font-weight: 600; margin-bottom: 30px; color: #333;">
                    Login ke Admin
                </h2>

                {{-- Pesan sukses --}}
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                {{-- Pesan gagal --}}
                @if (session('salah'))
                    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                        {{ session('salah') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif


                <form action="/admin/postsignin" method="POST">
                    @csrf
                    <!-- Email -->
                    <label style="display: block; margin-bottom: 8px; font-weight: 500; color: #555;">Email *</label>
                    <input type="email" placeholder="masukkan email" value="{{ old('email') }}"
                        style="width: 100%; padding: 12px 16px; border: 1px solid #ccc; border-radius: 12px; margin-bottom: 5px; font-size: 14px; transition: 0.3s; outline: none;"
                        onfocus="this.style.borderColor='#4ade80'" onblur="this.style.borderColor='#ccc'"
                        name="email">
                    @error('email')
                        <div style="color: red; font-size: 13px; margin-bottom: 15px;">{{ $message }}</div>
                    @enderror

                    <!-- Password -->
                    <label style="display: block; margin-bottom: 8px; font-weight: 500; color: #555;">Password *</label>
                    <div style="position: relative; margin-bottom: 5px;">
                        <input type="password" id="password" placeholder="masukkan password"
                            style="width: 100%; padding: 12px 40px 12px 16px; border: 1px solid #ccc; border-radius: 12px; font-size: 14px; transition: 0.3s; outline: none;"
                            onfocus="this.style.borderColor='#4ade80'" onblur="this.style.borderColor='#ccc'"
                            name="password">
                        <span onclick="togglePassword()"
                            style="position: absolute; right: 14px; top: 50%; transform: translateY(-50%); cursor: pointer;">
                            👁️
                        </span>
                    </div>
                    @error('password')
                        <div style="color: red; font-size: 13px; margin-bottom: 15px;">{{ $message }}</div>
                    @enderror

                    <!-- Button -->
                    <button type="submit"
                        style="margin-top:1pc;width: 100%; padding: 12px; background-color: #4ade80; color: white; font-weight: 600; border: none; border-radius: 9999px; font-size: 16px; cursor: pointer; transition: background-color 0.3s;"
                        onmouseover="this.style.backgroundColor='#22c55e'"
                        onmouseout="this.style.backgroundColor='#4ade80'">
                        Log In
                    </button>
                </form>
            </div>
        </div>

        <!-- sign-section end -->
        <!--Scroll to top-->
        <div class="scroll-to-top">
            <svg class="scroll-top-inner" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>

    </div>


    @include('Landingpage.layout.scripts')
    <script>
        function togglePassword() {
            const input = document.getElementById('password');
            input.type = input.type === 'password' ? 'text' : 'password';
        }
    </script>
</body><!-- End of .page_wrapper -->
<!-- Mirrored from jobaway.pixcelsthemes.com/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Jul 2025 14:03:53 GMT -->

</html>
