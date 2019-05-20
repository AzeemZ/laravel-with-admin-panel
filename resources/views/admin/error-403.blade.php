@extends('admin.layouts.error-pages')

@section('content')
    <h1 class="error-title text-danger">403</h1>
    <h3 class="text-uppercase error-subtitle">PAGE NOT FOUND !</h3>
    <p class="text-muted m-t-30 m-b-30">YOU SEEM TO BE TRYING TO FIND HIS WAY HOME</p>
    <a href="{{ route('dashboard') }}" class="btn btn-danger btn-rounded waves-effect waves-light m-b-40">Back to home</a>
@endsection

@section('javascript')
    @parent
@endsection
