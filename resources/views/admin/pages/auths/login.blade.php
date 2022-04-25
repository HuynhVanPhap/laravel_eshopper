@extends('admin.layouts.auth')

@section('title')
{{ __('Login') }}
@endsection

@section('content')
<div class="login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>Eshop</b>PER</a>
        </div>

        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">{{ __('Sign in to start your session') }}</p>

                    @include('admin.components.common.alert.fail')
                    @include('admin.components.form.login')

                <div class="social-auth-links text-center mb-3">
                    <p>- {{ __('Or') }} -</p>
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i>
                        {{ __('Sign in using Facebook') }}
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i>
                        {{ __('Sign in using Google+') }}
                    </a>
                </div>

                <p class="mb-1">
                    <a href="forgot-password.html">{{ __('I forgot my password') }}</a>
                </p>
                <p class="mb-0">
                    <a href="{{ route('get.admin.register.page') }}" class="text-center">{{ __('Register a new membership') }}</a>
                </p>
            </div>

        </div>
    </div>
</div>
@endsection
