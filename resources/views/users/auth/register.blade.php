<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Booksphere Register</title>
    <link rel="apple-touch-icon" href="{{ asset('logo/favicon.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('logo/favicon.png') }}">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/semi-dark-layout.css') }}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/authentication.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <!-- END: Page CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern boxicon-layout no-card-shadow 1-column  navbar-sticky footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- register section starts -->
                <section class="row flexbox-container">
                    <div class="col-xl-8 col-10">
                        <div class="card bg-authentication mb-0">
                            <div class="row m-0">
                                <!-- register section left -->
                                <div class="col-md-6 col-12 px-0">
                                    <div class="card disable-rounded-right mb-0 p-2 h-100 d-flex justify-content-center">
                                        <div class="card-header pb-1">
                                            <div class="card-title">
                                                <h4 class="text-center mb-2">Sign Up</h4>
                                            </div>
                                        </div>
                                        {{-- <div class="text-center">
                                            <p><small>Please enter your details to sign up and be part of our great community</small></p>
                                            @include('users.layouts.alert')
                                        </div> --}}
                                        <div class="card-content">
                                            <div class="card-body">
                                                <div class="d-flex flex-md-row flex-column justify-content-around">
                                                    <a href="#" class="btn btn-social btn-google btn-block font-small-3 mr-md-1 mb-md-0 mb-1">
                                                        <i class="bx bxl-google font-medium-3"></i><span class="pl-50 d-block text-center">Google</span></a>
                                                    <a href="#" class="btn btn-social btn-block mt-0 btn-facebook font-small-3">
                                                        <i class="bx bxl-facebook-square font-medium-3"></i><span class="pl-50 d-block text-center">Facebook</span></a>
                                                </div>
                                                <div class="divider">
                                                    <div class="divider-text text-uppercase text-muted"><small>or login with email</small>
                                                    </div>
                                                    <div class="text-center">
                                                        @include('users.layouts.alert')
                                                    </div>
                                                </div>
                                                <form action="{{ route('signup') }}" method="POST">
                                                    @csrf
                                                    {{-- <div class="form-row">
                                                        <div class="form-group col-md-6 mb-50">
                                                            <label for="inputfirstname4">first name</label>
                                                            <input type="text" class="form-control" id="inputfirstname4" placeholder="First name">
                                                        </div>
                                                        <div class="form-group col-md-6 mb-50">
                                                            <label for="inputlastname4">last name</label>
                                                            <input type="text" class="form-control" id="inputlastname4" placeholder="Last name">
                                                        </div>
                                                    </div> --}}
                                                    <div class="form-group mb-50">
                                                        <label class="text-bold-600" for="exampleInputUsername1">Full Name</label>
                                                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" id="exampleInputUsername1" placeholder="Full Name">
                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group mb-50">
                                                        <label class="text-bold-600" for="exampleInputEmail1">Email address</label>
                                                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="exampleInputEmail1" placeholder="Email address">
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group mb-50">
                                                        <label class="text-bold-600" for="exampleInputPassword1">Password</label>
                                                        <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group mb-2">
                                                        <label class="text-bold-600" for="exampleInputPassword1">Confirm Password</label>
                                                        <input type="password" class="form-control" name="password_confirmation" id="exampleInputPassword1" placeholder="Password">
                                                        @error('password_confirmation')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <button type="submit" class="btn btn-primary glow position-relative w-100">SIGN UP<i id="icon-arrow" class="bx bx-right-arrow-alt"></i></button>
                                                </form>
                                                <hr>
                                                <div class="text-center"><small class="mr-25">Already have an account?</small><a href="{{ url('login') }}"><small>Sign in</small> </a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- image section right -->
                                <div class="col-md-6 d-md-block d-none text-center align-self-center p-3">
                                    <img class="img-fluid" src="{{ asset('logo/logo.png') }}" alt="branding logo">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- register section endss -->
            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}"></script>
    <script src="{{ asset('app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js') }}"></script>
    <script src="{{ asset('app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js') }}"></script>
    <script src="{{ asset('app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('app-assets/js/core/app.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/components.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/footer.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>