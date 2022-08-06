<form
    action="{{ route('brands.update', $brand->id) }}"
    method="POST"
    class="form-horizontal"
    >
    @csrf
    @method("PUT")

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
                            'placeholder' => __('Name').' '.__('Brand'),
                            'defaultValue' => $brand->name
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
                            'placeholder' => "Choose brand's categories",
                            'defaultArray' => Arr::pluck($brand->categories, 'id')
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
