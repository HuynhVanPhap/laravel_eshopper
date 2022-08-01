@php
    $require = $require ?? true;
    $label = $label ?? '';
@endphp

<label for="inputEmail3" class="col-sm-12 col-form-label">
    {{ __($label) }}
    <span
        @class([
            'badge',
            'badge-danger' => $require,
            'badge-primary' => !$require
        ])
    >
        {{ ($require) ? __('Require') : __('Not Require') }}
    </span>
</label>
