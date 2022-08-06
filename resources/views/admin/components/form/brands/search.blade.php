@php
    $categories = $categories ?? [];
@endphp

<form
    action="{{ route('brands.index') }}"
    method="GET"
>
    <div class="row">
        <div class="col-4">
            <div class="form-group">
                <label for="name">{{ __('Name').' '.__('Brand') }}</label>

                @include('admin.components.common.form.input', [
                    'label' => __('Name').' '.__('Brand'),
                    'name' => 'name_search',
                    'placeholder' => __('Name').' '.__('Brand')
                ])
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label for="name">{{ __('Category') }}</label>

                @include('admin.components.common.form.selected', [
                    'label' => __('Display'),
                    'name' => 'category_id_search',
                    'data' => $categories
                ])
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label for="name">{{ __('Display') }}</label>

                @include('admin.components.common.form.selected', [
                    'label' => __('Display'),
                    'name' => 'display_search',
                    'data' => config('global.display')
                ])
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="form-group float-right">
                <button type="submit" class="btn btn-primary">{{ __('Search') }}</button>
            </div>
        </div>
    </div>
</form>
