<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;
use App\Models\Category;
use App\Models\Brand;

Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push(__('Dashboard'), route('get.admin.home.page'));
});

Breadcrumbs::for('categories.index', function (BreadcrumbTrail $trail) {
    $trail->push(__('Category'), route('categories.index'));
});

Breadcrumbs::for('categories.create', function (BreadcrumbTrail $trail) {
    $trail->parent('categories.index');
    $trail->push(__('Create'), route('categories.create'));
});

Breadcrumbs::for('categories.edit', function (BreadcrumbTrail $trail, Category $category) {
    $trail->parent('categories.index');
    $trail->push($category->name, route('categories.edit', $category));
});

Breadcrumbs::for('brands.index', function (BreadcrumbTrail $trail) {
    $trail->push(__('Brand'), route('brands.index'));
});

Breadcrumbs::for('brands.create', function (BreadcrumbTrail $trail) {
    $trail->parent('brands.index');
    $trail->push(__('Create'), route('brands.create'));
});

Breadcrumbs::for('brands.edit', function (BreadcrumbTrail $trail, Brand $brands) {
    $trail->parent('brands.index');
    $trail->push($brands->name, route('brands.edit', $brands));
});

Breadcrumbs::for('products.index', function (BreadcrumbTrail $trail) {
    $trail->push(__('Product'), route('products.index'));
});

Breadcrumbs::for('products.create', function (BreadcrumbTrail $trail) {
    $trail->parent('products.index');
    $trail->push(__('Create'), route('products.create'));
});
