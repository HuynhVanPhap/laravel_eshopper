@extends('admin.layouts.default')

@section('title')
{{ __('Brand') }}
@endsection

@section('content')
@include('admin.components.default.content-header', [
    'header' => __('Brand'),
    'route' => 'brands.index'
])

<section class="content">
    <div class="container-fluid">
        {{-- Search Card --}}
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('Filter') }}</h3>
                    </div>
                    <div class="card-body">
                        @include('admin.components.form.brands.search', [
                            'categories' => $categories->toArray()
                        ])
                    </div>
                </div>
            </div>
        </div>

        {{-- List Card --}}
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <h3 class="card-title">{{ __('List') }}</h3>
                            </div>

                            <div class="col-sm-12 col-md-6">
                                <a href="{{ route('brands.create') }}" class="btn btn-info float-right">
                                    {{ __('Create') }}
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example1"
                                        class="table table-bordered table-striped dataTable dtr-inline collapsed"
                                        aria-describedby="example1_info">
                                        <thead>
                                            <tr>
                                                <th tabindex="0" aria-controls="example1"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Rendering engine: activate to sort column descending">
                                                    #
                                                </th>
                                                <th tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Browser: activate to sort column ascending">
                                                    {{ __('Brand') }}
                                                </th>
                                                <th tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Browser: activate to sort column ascending">
                                                    {{ __("Brand's code") }}
                                                </th>
                                                <th tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Platform(s): activate to sort column ascending">
                                                    {{ __('Display') }}
                                                </th>
                                                <th tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Platform(s): activate to sort column ascending">
                                                    {{ __('Category') }}
                                                </th>
                                                <th tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Engine version: activate to sort column ascending">
                                                    {{ __('Manipulation') }}
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (!blank($brands))
                                                @foreach ($brands as $key => $brand)
                                                    <tr>
                                                        <td>{{ ++$key }}</td>
                                                        <td>{{ $brand->name }}</td>
                                                        <td>{{ $brand->code }}</td>
                                                        <td>
                                                            {{-- <div class="toggle-display">
                                                                <input
                                                                    type="checkbox"
                                                                    class="data-bootstrap-switch"
                                                                    name="display"
                                                                    data-size="sm"
                                                                    {{ ($brand->display) ? 'checked' : '' }}
                                                                    data-toggle="toggle"
                                                                    data-brand-id="{{ $brand->id }}"
                                                                >
                                                            </div> --}}
                                                            <div class="custom-control custom-switch">
                                                                <input
                                                                    {{ ($brand->display) ? 'checked' : '' }}
                                                                    data-brand-id="{{ $brand->id }}"
                                                                    type="checkbox"
                                                                    class="custom-control-input toggle-display"
                                                                    id="switch1"
                                                                    name="example"
                                                                >
                                                                <label class="custom-control-label" for="switch1"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            @foreach ($brand->categories as $category)
                                                                <span class="badge badge-primary">{{ $category->name }}</span>
                                                            @endforeach
                                                        </td>
                                                        <td>
                                                            <a
                                                                href="{{ route('brands.edit', $brand->id) }}"
                                                                class="btn btn-success btn-sm float-left mr-1"
                                                            >
                                                                <i class="fas fa-pen-nib"></i>
                                                            </a>

                                                            <form
                                                                action="{{route('brands.destroy', $brand->id)}}"
                                                                class="pull-left float-left"
                                                                method="POST"
                                                            >
                                                                @csrf
                                                                @method('DELETE')

                                                                <button
                                                                    type="submit"
                                                                    class="btn btn-sm btn-danger btn-icon btn-delete"
                                                                >
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="6">{{ __('No Data') }}</td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">
                                        {{ __('Show entries', [
                                            'showing' => $brands->perPage() * ($brands->currentPage() - 1) + count($brands),
                                            'entrie' => $brands->total()
                                        ]) }}
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                        {!! $brands->appends(Request::all())->links('admin.components.common.pagination') !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
    <script>
        $(".toggle-display").on("change", function () {
            let id = $(this).data("brand-id");

            $.ajax({
                type: 'GET',
                dataType: 'json',
                cache: false,
                url: "/admin/brand/toggle/display/" + id,

                success: function (res) {
                    if (res > 0) {
                        toastr.success("{{ __('Update display') }}");
                    }
                },

                error: function (error) {
                    alert("{{ __('Something went wrong') }}");
                }
            });
        });
    </script>
@endsection
