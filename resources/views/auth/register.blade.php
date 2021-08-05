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
            <form method="POST" class="js-validation-signin" action="{{ route('register') }}">
                @csrf
                <div class="py-3">
                    <div class="form-group">
                        <input id="name" type="text" class="form-control form-control-lg form-control-alt @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="{{trans('auth.inputName')}}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="email" type="email" class="form-control form-control-lg form-control-alt @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{trans('auth.inputEmail')}}" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="password" type="password" class="form-control form-control-lg form-control-alt @error('password') is-invalid @enderror" name="password"  placeholder="{{trans('auth.inputPassword')}}" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                     <div class="form-group">
                        <input id="password-confirm" type="password" class="form-control form-control-lg form-control-alt @error('password_confirmation') is-invalid @enderror" name="password_confirmation" placeholder="{{trans('auth.inputPasswordConf')}}" required autocomplete="new-password">
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-hero-lg btn-hero-primary">
                        {{trans('auth.btNewAccoun')}}
                    </button>

                    <p class="mt-3 mb-0 d-lg-flex justify-content-lg-between">
                        @if (Route::has('password.request'))
                        <a class="btn btn-sm btn-light d-block d-lg-inline-block mb-1" href="{{ route('password.request') }}">
                            <i class="fa fa-exclamation-triangle text-muted mr-1"></i> {{trans('auth.btIrResetPass')}}
                        </a>
                        @endif
                        <a class="btn btn-sm btn-light d-block d-lg-inline-block mb-1" href="{{ route('login') }}">
                            <i class="fa fa-plus text-muted mr-1"></i> {{trans('auth.btIrLogin')}}
                        </a>
                    </p>
                </div>
            </form>
        </div>
    </div>
    <!-- END Sign In Form -->
</div>
@endsection