@extends('admin.layouts.master')

@section('css')
    <!-- css libraries -->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css-libs/magnific-popup/magnific-popup.css') }}">
@endsection

@section('content')
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row el-element-overlay">
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="el-card-item">
                    <div class="el-card-avatar el-overlay-1">
                        <picture>
                            <source srcset="{{ url('assets/images/big/img1.webp') }}">
                            <img src="{{ url('assets/images/big/img1.jpg') }}" alt="user" />
                        </picture>
                        <div class="el-overlay">
                            <ul class="list-style-none el-info">
                                <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="{{ url('assets/images/big/img1.jpg') }}"><i class="mdi mdi-magnify-plus"></i></a></li>
                                <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="mdi mdi-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="el-card-content">
                        <h4 class="m-b-0">Project title</h4> <span class="text-muted">subtitle of project</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="el-card-item">
                    <div class="el-card-avatar el-overlay-1">
                        <picture>
                            <source srcset="{{ url('assets/images/big/img2.webp') }}">
                            <img src="{{ url('assets/images/big/img2.jpg') }}" alt="user" />
                        </picture>
                        <div class="el-overlay">
                            <ul class="list-style-none el-info">
                                <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="{{ url('assets/images/big/img2.jpg') }}"><i class="mdi mdi-magnify-plus"></i></a></li>
                                <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="mdi mdi-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="el-card-content">
                        <h4 class="m-b-0">Project title</h4> <span class="text-muted">subtitle of project</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="el-card-item">
                    <div class="el-card-avatar el-overlay-1">
                        <picture>
                            <source srcset="{{ url('assets/images/big/img3.webp') }}">
                            <img src="{{ url('assets/images/big/img3.jpg') }}" alt="user" />
                        </picture>
                        <div class="el-overlay">
                            <ul class="list-style-none el-info">
                                <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="{{ url('assets/images/big/img3.jpg') }}"><i class="mdi mdi-magnify-plus"></i></a></li>
                                <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="mdi mdi-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="el-card-content">
                        <h4 class="m-b-0">Project title</h4> <span class="text-muted">subtitle of project</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="el-card-item">
                    <div class="el-card-avatar el-overlay-1">
                        <picture>
                            <source srcset="{{ url('assets/images/big/img4.webp') }}">
                            <img src="{{ url('assets/images/big/img4.jpg') }}" alt="user" />
                        </picture>
                        <div class="el-overlay">
                            <ul class="list-style-none el-info">
                                <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="{{ url('assets/images/big/img4.jpg') }}"><i class="mdi mdi-magnify-plus"></i></a></li>
                                <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="mdi mdi-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="el-card-content">
                        <h4 class="m-b-0">Project title</h4> <span class="text-muted">subtitle of project</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="el-card-item">
                    <div class="el-card-avatar el-overlay-1">
                        <picture>
                            <source srcset="{{ url('assets/images/big/img3.webp') }}">
                            <img src="{{ url('assets/images/big/img3.jpg') }}" alt="user" />
                        </picture>
                        <div class="el-overlay">
                            <ul class="list-style-none el-info">
                                <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="{{ url('assets/images/big/img3.jpg') }}"><i class="mdi mdi-magnify-plus"></i></a></li>
                                <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="mdi mdi-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="el-card-content">
                        <h4 class="m-b-0">Project title</h4> <span class="text-muted">subtitle of project</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="el-card-item">
                    <div class="el-card-avatar el-overlay-1">
                        <picture>
                            <source srcset="{{ url('assets/images/big/img5.webp') }}">
                            <img src="{{ url('assets/images/big/img5.jpg') }}" alt="user" />
                        </picture>
                        <div class="el-overlay">
                            <ul class="list-style-none el-info">
                                <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="{{ url('assets/images/big/img5.jpg') }}"><i class="mdi mdi-magnify-plus"></i></a></li>
                                <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="mdi mdi-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="el-card-content">
                        <h4 class="m-b-0">Project title</h4> <span class="text-muted">subtitle of project</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="el-card-item">
                    <div class="el-card-avatar el-overlay-1">
                        <picture>
                            <source srcset="{{ url('assets/images/big/img6.webp') }}">
                            <img src="{{ url('assets/images/big/img6.jpg') }}" alt="user" />
                        </picture>
                        <div class="el-overlay">
                            <ul class="list-style-none el-info">
                                <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="{{ url('assets/images/big/img6.jpg') }}"><i class="mdi mdi-magnify-plus"></i></a></li>
                                <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="mdi mdi-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="el-card-content">
                        <h4 class="m-b-0">Project title</h4> <span class="text-muted">subtitle of project</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="el-card-item">
                    <div class="el-card-avatar el-overlay-1">
                        <picture>
                            <source srcset="{{ url('assets/images/big/img1.webp') }}">
                            <img src="{{ url('assets/images/big/img1.jpg') }}" alt="user" />
                        </picture>
                        <div class="el-overlay">
                            <ul class="list-style-none el-info">
                                <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="{{ url('assets/images/big/img1.jpg') }}"><i class="mdi mdi-magnify-plus"></i></a></li>
                                <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="mdi mdi-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="el-card-content">
                        <h4 class="m-b-0">Project title</h4> <span class="text-muted">subtitle of project</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="el-card-item">
                    <div class="el-card-avatar el-overlay-1">
                        <picture>
                            <source srcset="{{ url('assets/images/big/img1.webp') }}">
                            <img src="{{ url('assets/images/big/img1.jpg') }}" alt="user" />
                        </picture>
                        <div class="el-overlay">
                            <ul class="list-style-none el-info">
                                <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="{{ url('assets/images/big/img1.jpg') }}"><i class="mdi mdi-magnify-plus"></i></a></li>
                                <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="mdi mdi-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="el-card-content">
                        <h4 class="m-b-0">Project title</h4> <span class="text-muted">subtitle of project</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="el-card-item">
                    <div class="el-card-avatar el-overlay-1">
                        <picture>
                            <source srcset="{{ url('assets/images/big/img2.webp') }}">
                            <img src="{{ url('assets/images/big/img2.jpg') }}" alt="user" />
                        </picture>
                        <div class="el-overlay">
                            <ul class="list-style-none el-info">
                                <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="{{ url('assets/images/big/img2.jpg') }}"><i class="mdi mdi-magnify-plus"></i></a></li>
                                <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="mdi mdi-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="el-card-content">
                        <h4 class="m-b-0">Project title</h4> <span class="text-muted">subtitle of project</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="el-card-item">
                    <div class="el-card-avatar el-overlay-1">
                        <picture>
                            <source srcset="{{ url('assets/images/big/img3.webp') }}">
                            <img src="{{ url('assets/images/big/img3.jpg') }}" alt="user" />
                        </picture>
                        <div class="el-overlay">
                            <ul class="list-style-none el-info">
                                <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="{{ url('assets/images/big/img3.jpg') }}"><i class="mdi mdi-magnify-plus"></i></a></li>
                                <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="mdi mdi-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="el-card-content">
                        <h4 class="m-b-0">Project title</h4> <span class="text-muted">subtitle of project</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="el-card-item">
                    <div class="el-card-avatar el-overlay-1">
                        <picture>
                            <source srcset="{{ url('assets/images/big/img4.webp') }}">
                            <img src="{{ url('assets/images/big/img4.jpg') }}" alt="user" />
                        </picture>
                        <div class="el-overlay">
                            <ul class="list-style-none el-info">
                                <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="{{ url('assets/images/big/img4.jpg') }}"><i class="mdi mdi-magnify-plus"></i></a></li>
                                <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="mdi mdi-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="el-card-content">
                        <h4 class="m-b-0">Project title</h4> <span class="text-muted">subtitle of project</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
@endsection

@section('javascript')
    <!-- This page js -->
    <script src="{{ url('assets/js-libs/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ url('assets/js-libs/magnific-popup/meg.init.js') }}"></script>
@endsection
