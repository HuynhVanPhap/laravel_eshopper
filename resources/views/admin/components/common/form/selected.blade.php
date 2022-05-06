@php
    $label = $label ?? '';
    $required = $required ?? false;
    $disabled = $disabled ?? false;
    $data = $data ?? [];
    $name = $name ?? '';
    $defaultValue = $defaultValue ?? '';
@endphp

<select
    class="form-control select2 {{ $errors->has($name) ? 'is-invalid' : ''}}"
    name="{{ $name }}" {{ ($required) ? 'required' : '' }}
    @if($disabled)
        {{'disabled'}}
    @endif
>
    @if(isset($data))
        <option value="">
            {{ __('Default') }}
        </option>
    @foreach($data as $key => $item)
    <option
        value="{{$item['id']}}"
        {{-- @selected(old($name) == $item['id']) --}}
        {{ ((int)old($name, $defaultValue) === $item['id']) ? 'selected' : '' }}
    >
        {{ $item['name'] }}
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

