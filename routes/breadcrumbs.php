<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;
use App\Models\Category;

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

