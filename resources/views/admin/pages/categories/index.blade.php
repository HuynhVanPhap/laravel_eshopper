@extends('admin.layouts.default')

@section('title')
{{ __('Category') }}
@endsection

@section('content')
@include('admin.components.default.content-header', [
    'header' => __('Category'),
    'route' => 'categories.index'
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
                        @include('admin.components.form.categories.search')
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
                                <a href="{{ route('categories.create') }}" class="btn btn-info float-right">
                                    {{ __('Create') }}
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            {{-- <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="dt-buttons btn-group flex-wrap"> <button
                                            class="btn btn-secondary buttons-copy buttons-html5" tabindex="0"
                                            aria-controls="example1" type="button"><span>Copy</span></button> <button
                                            class="btn btn-secondary buttons-csv buttons-html5" tabindex="0"
                                            aria-controls="example1" type="button"><span>CSV</span></button> <button
                                            class="btn btn-secondary buttons-excel buttons-html5" tabindex="0"
                                            aria-controls="example1" type="button"><span>Excel</span></button> <button
                                            class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0"
                                            aria-controls="example1" type="button"><span>PDF</span></button> <button
                                            class="btn btn-secondary buttons-print" tabindex="0"
                                            aria-controls="example1" type="button"><span>Print</span></button>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div id="example1_filter" class="dataTables_filter">
                                        <label>Search:
                                            <input
                                                type="search"
                                                class="form-control form-control-sm"
                                                placeholder=""
                                                aria-controls="example1"
                                            >
                                        </label>
                                    </div>
                                </div>
                            </div> --}}
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
                                                    {{ __('Category') }}
                                                </th>
                                                <th tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Browser: activate to sort column ascending">
                                                    {{ __("Category's Code") }}
                                                </th>
                                                <th tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Platform(s): activate to sort column ascending">
                                                    {{ __('Display') }}
                                                </th>
                                                <th tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Engine version: activate to sort column ascending">
                                                    {{ __('Manipulation') }}
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (!blank($categories))
                                                @foreach ($categories as $key => $category)
                                                    <tr>
                                                        <td>{{ ++$key }}</td>
                                                        <td>{{ $category->name }}</td>
                                                        <td>{{ $category->code }}</td>
                                                        <td>
                                                            <input
                                                                type="checkbox"
                                                                name="my-checkbox"
                                                                data-size="sm"
                                                                {{ ($category->display) ? 'checked' : '' }}
                                                                data-toggle="toggle"
                                                                data-category-id="{{ $category->id }}"
                                                                data-bootstrap-switch
                                                            >
                                                        </td>
                                                        <td>
                                                            <a
                                                                href="{{ route('categories.edit', $category->id) }}"
                                                                class="btn btn-success btn-sm float-left mr-1"
                                                            >
                                                                <i class="fas fa-pen-nib"></i>
                                                            </a>

                                                            <form
                                                                action="{{route('categories.destroy', $category->id)}}"
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
                                                    <td colspan="3">{{ __('No Data') }}</td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">
                                        {{-- Showing 1 to 10 of 57 entries --}}
                                        {{ __('Show entries', [
                                            'showing' => $categories->perPage() * ($categories->currentPage() - 1) + count($categories),
                                            'entrie' => $categories->total()
                                        ]) }}
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                        {!! $categories->appends(Request::all())->links('admin.components.common.pagination') !!}
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
