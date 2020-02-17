<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>GATE UI Admin Dashboard</title>
    <meta content="Admin Dashboard" name="description">
    <meta content="Themesbrand" name="author">
    <link rel="shortcut icon" href="{{ asset('template/images/favicon.ico') }}">
    <link href="{{ asset('template/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('template/css/metismenu.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('template/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('template/css/style.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="ex-pages">
        <div class="content-center">
            <div class="content-desc-center">
                <div class="container">
                    <div class="card mo-mt-2">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-lg-4 offset-lg-1">
                                    <div class="ex-page-content">
                                        <h1 class="text-dark">404!</h1>
                                        <h4 class="mb-4">Sorry, page not found</h4>
                                        <p class="mb-5"><mark>{{ $exception->getMessage() }}</mark></p>
                                        <a class="btn btn-primary mb-5 waves-effect waves-light" href="{{ route('home') }}"><i class="mdi mdi-home"></i> Back to dashboard</a>
                                    </div>
                                </div>
                                <div class="col-lg-5 offset-lg-1"><img src="{{ asset('template/images/error.png') }}" alt="" class="img-fluid mx-auto d-block"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
