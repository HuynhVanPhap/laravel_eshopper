<form
    action="{{ route('categories.store') }}"
    method="POST"
    class="form-horizontal"
    >
    @csrf

    <div class="card-body">
        <div class="form-group row">
            <div class="col-sm-6">
                <div class="form-group row">
                    <div class="col-sm-12">
                        @include('admin.components.common.form.label', [
                            'label' => __('Name').' '.__('Category')
                        ])
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-12">
                        @include('admin.components.common.form.input', [
                            'label' => __('Name').' '.__('Category'),
                            'name' => 'name',
                            'placeholder' => __('Name').' '.__('Category')
                        ])
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group row">
                    <div class="col-sm-12">
                        @include('admin.components.common.form.label', [
                            'label' => __('Brand').' '.__('Product')
                        ])
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        @include('admin.components.common.form.selected', [
                            'name' => 'brands[]',
                            'data' => $brands,
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
        <a href="{{ route('categories.index') }}" class="btn btn-default float-right">{{ __('Back') }}</a>
    </div>

</form>
