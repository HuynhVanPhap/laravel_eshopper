@extends('admin.layouts.default')

@section('title')
{{ __('Category') }}
@endsection

@section('content')
@include('admin.components.default.content-header', [
    'header' => __('Create'),
    'route' => 'categories.create'
])

<section class="content">
    <div class="container-fluid">
        <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">
                    {{ __('Form') }}
                </h3>
            </div>

            @include('admin.components.form.categories.create')
        </div>
    </div>
</section>
@endsection
