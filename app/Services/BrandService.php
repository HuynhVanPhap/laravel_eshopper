<?php

namespace App\Services;

use App\Services\BaseService;
use Illuminate\Http\Request;

class BrandService extends BaseService
{
    public function __construct() {}

    public function getDataStore(Request $request) {
        $brand = $this->clearVerification($request);
        $brand = $request->all(['name']);
        $brand['slug'] = $this->makeSlug($brand['name']);
        $brand['code'] = $this->codeShuffle(10);

        return $brand;
    }

    public function getDataUpdate(Request $request) {
        return [
            'name' => $request->name,
            'slug' => $this->makeSlug($request->name),
            'category_id' => $request->category_id
        ];
    }
}
