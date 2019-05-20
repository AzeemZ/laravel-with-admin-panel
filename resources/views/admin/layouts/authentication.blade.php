<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('assets/images/favicon.png') }}">
    <title> @yield('title', 'Matrix Template') </title>

    <!-- Main CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/custom/css/style.min.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    [endif]-->
</head>

<body>
<div class="main-wrapper">
    <!-- Preloader -->
    @include('admin.layouts.partials.preloader')

    <!-- Login box -->
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
        <div class="auth-box bg-dark border-top border-secondary">
            @yield('content')
        </div>
    </div>
</div>

@section('javascript')
    <!-- jQuery v3.3.1 -->
    <script src="{{ url('assets/js-libs/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ url('assets/js-libs/popper/popper.min.js') }}"></script>
    <script src="{{ url('assets/js-libs/bootstrap/bootstrap.min.js') }}"></script>
@show
</body>
</html>
