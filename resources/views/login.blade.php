<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login - Hotel Pangeran Cirebon</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('data-asset') }}/vendors/iconfonts/mdi/css/materialdesignicons.css" />
    <link rel="stylesheet" href="{{ asset('data-asset') }}/vendors/css/vendor.addons.css" />
    <!-- endinject -->
    <!-- vendor css for this page -->
    <!-- End vendor css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('data-asset') }}/css/shared/style.css" />
    <!-- endinject -->
    <!-- Layout style -->
    <link rel="stylesheet" href="{{ asset('data-asset') }}/css/demo_1/style.css">
    <!-- Layout style -->
    <link rel="shortcut icon" href="{{ asset('data-asset') }}/images/favicon.ico" />
</head>

<body>
    <div class="authentication-theme auth-style_1">
        {{-- <div class="row">

        </div> --}}
        <div class="row">
            <div class="col-lg-5 col-md-7 col-sm-9 col-11 mx-auto">
                <div class="grid shadow-2xl">
                    <div class="grid-body">
                        <div class="row">
                            <div class="col-lg-7 col-md-8 col-sm-9 col-12 mx-auto form-wrapper">

                                <form action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="col-12 logo-section">
                                        <h1 class="text-primary" align="center">Silahkan Masuk</h1>
                                    </div>
                                    @if ($errors->any())
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <button type="button" class="close" data-dismiss="alert"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                <span class="sr-only">Close</span>
                                            </button>
                                            <strong>Oops!</strong> Terjadi kesalahan :
                                            <ol>
                                                @foreach ($errors->all() as $r)
                                                    <li>{{ $r }}</li>
                                                @endforeach
                                            </ol>
                                        </div>
                                    @endif
                                    @if ($message = Session::get('loginError'))
                                        <div class="alert alert-danger alert-dismissible show fade">
                                            <button type="button" class="close" data-dismiss="alert"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                <span class="sr-only">Close</span>
                                            </button>
                                            <strong>Oops!</strong> {{ $message }}.
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="email" placeholder="Email" />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password"
                                            placeholder="Password" />
                                    </div>
                                    <div class="form-inline">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" class="form-check-input" />Remember me <i
                                                    class="input-frame"></i>
                                            </label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block"> Masuk </button>
                                </form>
                                <div class="signup-link">
                                    <p>Tidak punya akun?</p>
                                    <a href="#">Daftar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="auth_footer">
            <p class="text-muted text-center">?? Hotel Pangeran - {{ date('Y') }}</p>
        </div>
    </div>
    <!--page body ends -->
    <!-- SCRIPT LOADING START FORM HERE /////////////-->
    <!-- plugins:js -->
    <script src="{{ asset('data-asset') }}/vendors/js/core.js"></script>
    <script src="{{ asset('data-asset') }}/vendors/js/vendor.addons.js"></script>
    <!-- endinject -->
    <!-- Vendor Js For This Page Ends-->
    <!-- Vendor Js For This Page Ends-->
    <!-- build:js -->
    <script src="{{ asset('data-asset') }}/js/template.js"></script>
    <!-- endbuild -->
</body>

</html>
