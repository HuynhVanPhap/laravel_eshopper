@php
    $categories = $categories ?? [];
@endphp

<form
    action="{{ route('brands.store') }}"
    method="POST"
    class="form-horizontal"
    >
    @csrf

    <div class="card-body">
        <div class="form-group row">
            <div class="col-sm-6">
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label for="inputEmail3" class="col-form-label">
                            {{ __('Name').' '.__('Brand') }}
                        </label>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        @include('admin.components.common.form.input', [
                            'label' => __('Name').' '.__('Brand'),
                            'name' => 'name',
                            'placeholder' => __('Name').' '.__('Brand')
                        ])
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label for="inputEmail3" class="col-form-label">
                            {{ __('Category').' '.__('Product') }}
                        </label>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        @include('admin.components.common.form.selected', [
                            'name' => 'categories[]',
                            'data' => $categories,
                            'multiple' => true,
                            'default' => false,
                            'placeholder' => "Choose brand's categories"
                        ])
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-footer">
        <button type="submit" class="btn btn-info">{{ __('Save') }}</button>
        <a href="{{ route('brands.index') }}" class="btn btn-default float-right">{{ __('Back') }}</a>
    </div>

</form>
