@php
    $label = $label ?? '';
    $required = $required ?? false;
    $disabled = $disabled ?? false;
    $data = $data ?? []; // type [ id, name ]
    $name = $name ?? '';
    $defaultValue = $defaultValue ?? '';
    $defaultArray = $defaultArray ?? [];
    $default = $default ?? true;
    $id = $id ?? '';
    $class = $class ?? '';
    $multiple = ($multiple) ?? false;
    $placeholder = $placeholder ?? "Select your's option"
@endphp

<select
    {{ ($required) ? 'required' : '' }}
    {{-- @required($required) --}}
    {{ ($multiple) ? 'multiple' : '' }}
    id="{{ $id }}"
    class="{{ $class }} form-control select2 {{ $errors->has($name) ? 'is-invalid' : '' }} select2-purple"
    name="{{ $name }}"
    data-dropdown-css-class="select2-purple"
    data-placeholder="{{ __($placeholder) }}"
    @if($disabled)
        {{'disabled'}}
    @endif
>
    @if(isset($data))
        @if($default)
            <option value="">
                {{ __('Default') }}
            </option>
        @endif
    @foreach($data as $key => $item)
    <option
        value="{{$item['id']}}"
        {{-- @selected(old($name) == $item['id']) --}}
        @if ($multiple)
            {{ (in_array($item['id'], old($name, $defaultArray))) ? 'selected' : '' }}
        @else
            {{ ((int)old($name, $defaultValue) === $item['id']) ? 'selected' : '' }}
        @endif
    >
        {{ __($item['name']) }}
    </option>
    @endforeach
    @else
        <option value="">
            {{ __('Default') }}
        </option>
    @endif
</select>

@if ($errors->has($name))
    <span id="exampleInputPassword1-error" class="error invalid-feedback">{{ $errors->first($name) }}</span>
@endif
