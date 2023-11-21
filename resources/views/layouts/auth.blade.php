<!doctype html>
<html lang="en">

    <head>
    
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Household of David CRM" name="description">
        <meta content="hod" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ url('assets/images/favicon.ico') }}">
    
    
        <!-- Bootstrap Css -->
        <link href="{{ url('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="{{ url('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="{{ url('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css">
        <style>
            .red {
                color: red;
            }
        </style>
        @yield('css')
    </head>

    <body>

        {{-- <div class="home-btn d-none d-sm-block">
            <a href="index.html" class="text-dark"><i class="fas fa-home h2"></i></a>
        </div> --}}
        <div class="account-pages my-5 pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-6">
                        @yield('content')
    
                        {{-- <div class="mt-5 text-center">
                            <p>Already have an account ? <a href="{{ route('login') }}" class="fw-medium text-primary"> Login </a> </p>
                            <p>© <?= date('Y') ?>Household of David</p>
                        </div> --}}
    
    
                    </div>
                </div>
            </div>
        </div>

            <!-- JAVASCRIPT -->
            <script src="{{ url('assets/libs/jquery/jquery.min.js') }}"></script>
            <script src="{{ url('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
            <script src="{{ url('assets/libs/metismenu/metisMenu.min.js') }}"></script>
            <script src="{{ url('assets/libs/simplebar/simplebar.min.js') }}"></script>
            <script src="{{ url('assets/libs/node-waves/waves.min.js') }}"></script>
            <script src="{{ url('assets/js/app.js') }}"></script>
            @yield('js')
    </body>
</html>
