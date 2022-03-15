@extends('admin.layouts.auth')

@section('title')
    {{ __('Register') }}
@endsection

@section('content')
<div class="register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="#"><b>Eshop</b>PER</a>
        </div>
        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">{{ __('Register a new membership') }}</p>

                @include('admin.components.form.register')

                <div class="social-auth-links text-center">
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
            </div>

        </div>
    </div>
</div>
@endsection
