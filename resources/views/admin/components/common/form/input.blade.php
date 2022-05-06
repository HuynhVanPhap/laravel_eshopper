@php
    $label = $label ?? '';
    $name = $name ?? '';
    $placeholder = $placeholder ?? '';
    $defaultValue = $defaultValue ?? '';
@endphp

<input
    type="text"
    class="form-control {{ $errors->has($name) ? 'is-invalid' : ''}}"
    id="inputEmail3"
    placeholder="{{ $placeholder }}"
    name="{{ $name }}"
    value="{{ old($name, $defaultValue) }}"
>

@if ($errors->has($name))
    <span id="exampleInputPassword1-error" class="error invalid-feedback">{{ $errors->first($name) }}</span>
@endif
