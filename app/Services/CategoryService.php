<?php

namespace App\Services;

use App\Services\BaseService;
use Illuminate\Http\Request;

class CategoryService extends BaseService
{
    public function __construct() {}

    public function getDataStore(Request $request) {
        $category = $this->clearVerification($request);
        $category['slug'] = $this->makeSlug($category['name']);
        $category['code'] = $this->codeShuffle(10);

        return $category;
    }

    public function getDataUpdate(Request $request) {
        return [
            'name' => $request->name,
            'slug' => $this->makeSlug($request->name)
        ];
    }
}
