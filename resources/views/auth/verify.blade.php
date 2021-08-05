@extends('layouts.master-auth')
@section('title-page') @lang('auth.nameNewAccoun') @endsection
@section('content')
<div class="p-3 w-100">
    <!-- Header -->
    <div class="mb-3 text-center">
        <a class="link-fx font-w700 font-size-h1" href="{{ route('inicio') }}">
            <span class="text-dark">{{env('APP_NAME')}}</span><span class="text-primary">°</span>
        </a>
        <p class="text-uppercase font-w700 font-size-sm text-muted">@lang('auth.nameIniSes')</p>
    </div>
    <!-- END Header -->

    <!-- Sign In Form -->
    <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _js/pages/op_auth_signin.js) -->
    <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
    <div class="row no-gutters justify-content-center">
        <div class="col-sm-8 col-xl-6">
            <div class="card">
                <div class="card-header">@lang('auth.msjVerify1')</div>

                <div class="card-body">
                    @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        @lang('auth.msjVerify2')
                    </div>
                    @endif

                    @lang('auth.msjVerify3')
                    @lang('auth.msjVerify4'),
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">@lang('auth.msjVerify4')</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END Sign In Form -->
</div>
@endsection
