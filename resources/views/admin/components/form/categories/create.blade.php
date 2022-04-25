<form
    action="{{ route('categories.store') }}"
    method="POST"
    class="form-horizontal"
    >
    @csrf

    <div class="card-body">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">
                {{ __('Name').' '.__('Category') }}
            </label>
            <div class="col-sm-10">
                @include('admin.components.common.form.input', [
                    'label' => __('Name').' '.__('Category'),
                    'name' => 'name',
                    'placeholder' => __('Name').' '.__('Category')
                ])
            </div>
        </div>
    </div>

    <div class="card-footer">
        <button type="submit" class="btn btn-info">{{ __('Save') }}</button>
        <a href="{{ route('categories.index') }}" class="btn btn-default float-right">{{ __('Back') }}</a>
    </div>

</form>
