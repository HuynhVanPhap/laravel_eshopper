@php
    $label = $label ?? '';
    $required = $required ?? false;
    $disabled = $disabled ?? false;
    $data = $data ?? [];
    $name = $name ?? '';
    $defaultValue = $defaultValue ?? '';
@endphp

<select class="form-control select2" name="{{ $name }}" {{ ($required) ? 'required' : '' }}
    @if($disabled) {{'disabled'}} @endif>
    >
    @if(isset($data))
    <option value="">
        {{ __('Default') }}
    </option>
    @foreach($data as $key => $item)
    <option
        value="{{$item['id']}}"
        {{-- @selected(old($name) == $item['id']) --}}
        {{ (old($name, $defaultValue) === $item['id']) ? 'selected' : '' }}
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
