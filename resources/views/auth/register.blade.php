<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keyword" content="">
    <meta name="author" content="theme_ocean">
    <!--! The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags !-->
    <!--! BEGIN: Apps Title-->
    <title>Daftar - SMK IT Baitul Aziz</title>
    <!--! END:  Apps Title-->
    <!--! BEGIN: Favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">
    <!--! END: Favicon-->
    <!--! BEGIN: Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="admin/assets/css/bootstrap.min.css">
    <!--! END: Bootstrap CSS-->
    <!--! BEGIN: Vendors CSS-->
    <link rel="stylesheet" type="text/css" href="admin/assets/vendors/css/vendors.min.css">
    <!--! END: Vendors CSS-->
    <!--! BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="admin/assets/css/theme.min.css">
</head>

<body>
    <!--! ================================================================ !-->
    <!--! [Start] Main Content !-->
    <!--! ================================================================ !-->
    <main class="auth-cover-wrapper">
        <div class="auth-cover-content-inner">
            <div class="auth-cover-content-wrapper">
                <div class="auth-img">
                    <img src="admin/assets/images/auth/auth-cover-register-bg.svg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="auth-cover-sidebar-inner">
            <div class="auth-cover-card-wrapper">
                <div class="auth-cover-card p-sm-5">
                    <h2 class="fs-20 fw-bolder mb-4">Buat Akun</h2>
                    <h4 class="fs-13 fw-bold mb-2">Buat Akun Siswa</h4>
                    <p class="fs-12 fw-medium text-muted">Silahkan isi form dibawah untuk Buat Akun Siswa.</p>
                    <form action="{{ route('register') }}" method="POST" class="w-100 mt-4 pt-2">
                        @csrf
                        <div class="mb-4">
                            <input type="text" name="name" class="form-control" placeholder="Nama Lengkap" required>
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-4 generate-pass">
                            <div class="input-group field">
                                <input type="password" name="password" class="form-control password" id="newPassword"
                                    placeholder="Password" required>
                                <div class="input-group-text c-pointer gen-pass" data-bs-toggle="tooltip"
                                    title="Buat Password Acak"><i class="feather-hash"></i></div>
                                <div class="input-group-text border-start bg-gray-2 c-pointer show-pass"
                                    data-bs-toggle="tooltip" title="Lihat/Sembunyikan Password"><i></i></div>
                            </div>
                            <div class="progress-bar mt-2">
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <input type="password" name="password_confirmation" class="form-control"
                                placeholder="Konfirmasi Password" required>
                        </div>
                        <div class="mt-4">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="termsCondition"
                                    name="termsCondition" required>
                                <label class="custom-control-label c-pointer text-muted" for="termsCondition"
                                    style="font-weight: 400 !important">Saya setuju dengan <a href="">Syarat &amp;
                                        Ketentuan</a> yang berlaku.</label>
                            </div>
                        </div>
                        <div class="mt-5">
                            <button type="submit" class="btn btn-lg btn-primary w-100">Buat Akun</button>
                        </div>
                    </form>
                    <div class="mt-5 text-muted">
                        <span>Sudah punya akun?</span>
                        <a href="{{ route('login') }}" class="fw-bold">Masuk</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--! ================================================================ !-->
    <!--! [End] Main Content !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! Footer Script !-->
    <!--! ================================================================ !-->
    <!--! BEGIN: Vendors JS !-->
    <script src="admin/assets/vendors/js/vendors.min.js"></script>
    <!-- vendors.min.js {always must need to be top} -->
    <script src="admin/assets/vendors/js/lslstrength.min.js"></script>
    <!--! END: Vendors JS !-->
    <!--! BEGIN: Apps Init  !-->
    <script src="admin/assets/js/common-init.min.js"></script>
    <!--! END: Apps Init !-->
    <!--! BEGIN: Theme Customizer  !-->
    <script src="admin/assets/js/theme-customizer-init.min.js"></script>
    <!--! END: Theme Customizer !-->
</body>

</html>