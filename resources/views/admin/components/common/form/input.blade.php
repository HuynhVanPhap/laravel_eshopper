@php
    $label = $label ?? ''; // Not Use
    $name = $name ?? '';
    $placeholder = $placeholder ?? '';
    $defaultValue = $defaultValue ?? '';
    $classes = $classes ?? '';
    $id = $id ?? '';
    $numeric = $numeric ?? false;
@endphp

<input
    type="text"
    id="{{ $id }}"
    placeholder="{{ $placeholder }}"
    name="{{ $name }}"
    value="{{ old($name, $defaultValue) }}"
    @class([
        'form-control',
        'is-invalid' => $errors->has($name),
        'numeral-input' => $numeric,
        $classes
    ])
>

@if ($errors->has($name))
    <span id="exampleInputPassword1-error" class="error invalid-feedback">{{ $errors->first($name) }}</span>
@endif
