<form action="{{ route('handle.admin.register') }}" method="post">
    @csrf

    <div class="input-group mb-3">
        <input
            type="text"
            name="first_name"
            value="{{ old('first_name') }}"
            class="form-control {{ $errors->has('first_name') ? 'is-invalid' : ''}}"
            placeholder="{{ __('First name') }}"
        >
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-user"></span>
            </div>
        </div>

        @if ($errors->has('first_name'))
            <span id="exampleInputPassword1-error" class="error invalid-feedback">{{ $errors->first('first_name') }}</span>
        @endif
    </div>
    <div class="input-group mb-3">
        <input
            type="text"
            name="last_name"
            value="{{ old('last_name') }}"
            class="form-control {{ $errors->has('last_name') ? 'is-invalid' : ''}}"
            placeholder="{{ __('Last name') }}"
        >
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-user"></span>
            </div>
        </div>

        @if ($errors->has('last_name'))
            <span id="exampleInputPassword1-error" class="error invalid-feedback">{{ $errors->first('last_name') }}</span>
        @endif
    </div>
    <div class="input-group mb-3">
        <input
            type="email"
            name="email"
            value="{{ old('email') }}"
            class="form-control {{ $errors->has('email') ? 'is-invalid' : ''}}"
            placeholder="{{ __('Email') }}"
        >
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-envelope"></span>
            </div>
        </div>

        @if ($errors->has('email'))
            <span id="exampleInputPassword1-error" class="error invalid-feedback">{{ $errors->first('email') }}</span>
        @endif
    </div>
    <div class="input-group mb-3">
        <input
            type="password"
            name="password"
            class="form-control {{ $errors->has('password') ? 'is-invalid' : ''}}"
            placeholder="{{ __('Password') }}"
        >
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock"></span>
            </div>
        </div>

        @if ($errors->has('password'))
            <span id="exampleInputPassword1-error" class="error invalid-feedback">{{ $errors->first('password') }}</span>
        @endif
    </div>
    <div class="input-group mb-3">
        <input
            type="password"
            name="password_verify"
            class="form-control {{ $errors->has('password_verify') ? 'is-invalid' : ''}}"
            placeholder="{{ __('Password verify') }}"
        >
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock"></span>
            </div>
        </div>

        @if ($errors->has('password_verify'))
            <span id="exampleInputPassword1-error" class="error invalid-feedback">{{ $errors->first('password_verify') }}</span>
        @endif
    </div>
    <div class="row">
        <div class="col-8">
            <a href="#" class="text-center">{{ __('Already have an account') }}</a>
        </div>

        <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">{{ __('Register') }}</button>
        </div>
    </div>
</form>
