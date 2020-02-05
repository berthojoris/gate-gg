<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
        <title>Login</title>
        <meta content="Admin Dashboard" name="description">
        <meta content="Themesbrand" name="author">
        <link rel="shortcut icon" href="{{ asset('template/images/favicon.ico') }}">
        <link href="{{ asset('template/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('template/css/metismenu.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('template/css/icons.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('template/css/style.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="home-btn d-none d-sm-block">
            <a href="{{ url('/') }}" class="text-dark"><i class="fas fa-home h2"></i></a>
        </div>
        <div class="wrapper-page">
            <div class="card overflow-hidden account-card mx-3">
                @yield('content')
            </div>
            <div class="m-t-40 text-center">
                <p>© @php echo date('Y') @endphp by Gudang Garam</p>
            </div>
        </div>
        <script src="{{ asset('template/js/jquery.min.js') }}"></script>
        <script src="{{ asset('template/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('template/js/metisMenu.min.js') }}"></script>
        <script src="{{ asset('template/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('template/js/waves.min.js') }}"></script>
        <script src="{{ asset('template/js/app.js') }}"></script>
    </body>
</html>
