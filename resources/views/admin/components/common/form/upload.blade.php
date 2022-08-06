@php
    $name = $name ?? '';
    $placeholder = $placeholder ?? '';
    $defaultValue = $defaultValue ?? '';
    $classes = $classes ?? '';
    $defaultValue = $defaultValue ?? '';
@endphp

<input
    type="file"
    class="custom-file-input {{ $classes }} {{ $errors->has($name) ? 'is-invalid' : ''}}"
    id="customFile"
    name="{{ $name }}"
    value="{{ old($name, $defaultValue) }}"
>

<label class="custom-file-label" for="customFile">{{ $placeholder }}</label>

    @if ($errors->has($name))
    <span id="exampleInputPassword1-error" class="error invalid-feedback">{{ $errors->first($name) }}</span>
@endif
