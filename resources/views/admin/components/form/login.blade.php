<form action="{{ route('handle.admin.login') }}" method="post">
    @csrf

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
    <div class="row">
        <div class="col-6">
            <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                    {{ __('Remember me') }}
                </label>
            </div>
        </div>

        <div class="col-6">
            <button type="submit" class="btn btn-primary btn-block">{{ __('Sign in') }}</button>
        </div>

    </div>
</form>
