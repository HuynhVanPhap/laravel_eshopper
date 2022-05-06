@extends('admin.layouts.default')

@section('title')
{{ __('Brand') }}
@endsection

@section('content')
@include('admin.components.default.content-header', [
    'header' => __('Create'),
    'route' => 'brands.create'
])

<section class="content">
    <div class="container-fluid">
        <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">
                    {{ __('Form') }}
                </h3>
            </div>

            @include('admin.components.form.brands.create', [
                'categories' => $categories->toArray()
            ])
        </div>
    </div>
</section>
@endsection
