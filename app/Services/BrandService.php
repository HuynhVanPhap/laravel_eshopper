<?php

namespace App\Services;

use App\Services\BaseService;
use Illuminate\Http\Request;

class BrandService extends BaseService
{
    public function __construct() {}

    public function getDataStore(Request $request) {
        $brand = $this->clearVerification($request);
        $brand['slug'] = $this->makeSlug($brand['name']);
        $brand['code'] = $this->codeShuffle(10);

        return $brand;
    }
}
