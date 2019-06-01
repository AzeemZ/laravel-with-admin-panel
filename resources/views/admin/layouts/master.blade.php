<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

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

    @yield('css')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    [endif]-->
</head>

<body>
<!-- Preloader -->
@include('admin.layouts.partials.preloader')

<!-- Main wrapper -->
<div id="main-wrapper">
    <!-- Topbar header -->
    @include('admin.layouts.partials.header')

    <!-- Left Sidebar -->
    @include('admin.layouts.partials.left-sidebar')

    <!-- Page wrapper  -->
    <div class="page-wrapper">
        <!-- Bread crumb and right sidebar toggle -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Dashboard</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Library</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Container fluid  -->
        <div class="container-fluid">
            @yield('content')
        </div>

        @include('admin.layouts.partials.footer')
    </div>
</div>

<!-- jQuery -->
<script src="{{ url('assets/js-libs/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap tether Core JavaScript -->
<script src="{{ url('assets/js-libs/popper/popper.min.js') }}"></script>
<script src="{{ url('assets/js-libs/bootstrap/bootstrap.min.js') }}"></script>

<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{ url('assets/js-libs/scrollbar/perfect-scrollbar.jquery.min.js') }}"></script>
<script src="{{ url('assets/js-libs/sparkline/sparkline.js') }}"></script>

<!--Wave Effects -->
<script src="{{ url('assets/js-libs/waves/waves.js') }}"></script>

<!--Menu sidebar -->
<script src="{{ url('assets/js-libs/sidebar/sidebarmenu.js') }}"></script>

<!--Custom JavaScript -->
<script src="{{ url('assets/custom/js/custom.min.js') }}"></script>

@yield('javascript')

</body>
</html>
