<form
    action="{{ route('products.store') }}"
    method="POST"
    class="form-horizontal"
    enctype="multipart/form-data"
    >
    @csrf

    <div class="card-body">
        <div class="form-group row">
            <div class="col-sm-6">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-12 col-form-label">
                        {{ __('Name').' '.__('Product') }} <span class="badge badge-danger">{{ __('Require')}}</span>
                    </label>
                    <div class="col-sm-12">
                        @include('admin.components.common.form.input', [
                            'name' => 'name',
                            'placeholder' => __('Name').' '.__('Product'),
                            'id' => 'name-product'
                        ])
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-12 col-form-label">
                        {{ __('Category') }} <span class="badge badge-danger">{{ __('Require')}}</span>
                    </label>
                    <div class="col-sm-12">
                        @include('admin.components.common.form.selected', [
                            'name' => 'category_id',
                            'data' => $categories,
                            'id' => 'select-category'
                        ])
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-12 col-form-label">
                        {{ __('Price').' '.__('Product') }} <span class="badge badge-danger">{{ __('Require')}}</span>
                    </label>
                    <div class="col-sm-12">
                        @include('admin.components.common.form.input', [
                            'name' => 'price',
                            'placeholder' => __('Price').' '.__('Product'),
                            'numeric' => true
                        ])
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-12 col-form-label">
                        {{ __('Stock') }} <span class="badge badge-danger">{{ __('Require')}}</span>
                    </label>
                    <div class="col-sm-12">
                        @include('admin.components.common.form.input', [
                            'name' => 'stock',
                            'placeholder' => __('Stock')
                        ])
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-12 col-form-label">
                        {{ __('URL').' '.__('Product') }} <span class="badge badge-danger">{{ __('Require')}}</span>
                    </label>
                    <div class="col-sm-12">
                        @include('admin.components.common.form.input', [
                            'name' => 'slug',
                            'placeholder' => __('URL').' '.__('Product'),
                            'id' => 'slug-product'
                        ])
                    </div>
                </div>
                <div class="form-group row">
                    @include('admin.components.common.form.label', [
                        'label' => 'Brand'
                    ])
                    <div class="col-sm-12">
                        @include('admin.components.common.form.selected', [
                            'name' => 'brand_id',
                            'id' => 'select-brand',
                            'disabled' => true,
                            'placeholder' => 'Please choose category'
                        ])
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-12 col-form-label">
                        {{ __('Image').' '.__('Product') }} <span class="badge badge-danger">{{ __('Require')}}</span>
                    </label>
                    <div class="col-sm-12">
                        @include('admin.components.common.form.upload', [
                            'name' => 'upload_image',
                            'placeholder' => __('Choose File')
                        ])
                    </div>
                </div>
                <div class="form-group row">
                    @include('admin.components.common.form.label', [
                        'require' => false,
                        'label' => "Discount's percent"
                    ])
                    <div class="col-sm-12">
                        @include('admin.components.common.form.input', [
                            'name' => 'discount',
                            'placeholder' => __("Discount's percent")
                        ])
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-12 col-form-label">
                        {{ __('Status') }}
                        <span class="badge badge-primary">{{ __('Not Require')}}</span>
                    </label>
                    <div class="col-sm-12">
                        @include('admin.components.common.form.selected', [
                            'label' => __('Status'),
                            'name' => 'status',
                            'data' => config('global.status_product'),
                            'default' => false
                        ])
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-footer">
        <button type="submit" class="btn btn-info">{{ __('Save') }}</button>
        <a href="{{ route('products.index') }}" class="btn btn-default float-right">{{ __('Back') }}</a>
    </div>

</form>

@section('script')
<script>
    $("#name-product").on('input', function () {
        const name = $(this).val();
        const slug = make_slug(name);

        $("#slug-product").val(slug);
    });

    $("#select-category").on('change', function () {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            type: 'POST',
            dataType: 'json',
            cache: true,
            data: {
                categoryId: $(this).val()
            },
            url: "{{ route('selected.brand') }}",
            success: function(res) {
                if (res.success) {
                    // Xư lý mẫu
                    const data = $.map(res.brands, function (obj) {
                        obj.text = obj.text || obj.name; // replace name with the property used for the text

                        return obj;
                    });

                    $('#select-brand').select2({
                        data: data,
                        disabled: false
                    });
                }
            },
            error: function(error) {

            }
        });
    });

    function make_slug(str) {
        str = str.replace(/^\s+|\s+$/g, '');
        str = str.toLowerCase();

        var from = "{{ config('global.slug.from') }}";
        var to   = "{{ config('global.slug.to') }}";

        for (var i = 0, l = from.length; i < l; i++) {
            str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
        }
        const slug = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
           .replace(/\s+/g, '-') // collapse whitespace and replace by -
           .replace(/-+/g, '-'); // collapse dashes

        return slug;
    }
</script>
@endsection
