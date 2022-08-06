<?php

namespace App\Repositories;
use Illuminate\Support\Facades\DB;
use App\Models\Brand;

class BrandRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function getModel()
    {
        return Brand::class;
    }

    public function search($params) {
        $data = $this->model->select();

        if (isset($params['name_search'])) {
            $data->whereName($params['name_search']);
        }

        if (isset($params['category_id_search'])) {
            $data->whereCategoryId($params['category_id_search']);
        }

        if (isset($params['display_search'])) {
            $data->whereDisplay($params['display_search']);
        }

        return $data->orderBy('id', 'DESC')
                    ->paginate(parent::LIMIT);
    }

    public function storeManyToMany($brandParams = [], $categories = []) {
        DB::beginTransaction();

        try {
            $brand = $this->model->create($brandParams);
            $brand->categories()->sync($categories);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return $e;
        }
    }

    public function updateBrand(Brand $brand, $brandParams = [], $categories = []) {
        DB::beginTransaction();

        try {
            $brand->update($brandParams);
            $brand->categories()->sync($categories);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return $e;
        }
    }

    public function deleteBrand(Brand $brand) {
        DB::beginTransaction();

        try {
            $brand->categories()->sync([]);
            $brand->delete();

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return $e;
        }
    }

    public function getBrandsByCategoryId($categoryId) {
        // return $this->model->select(['id', 'name'])->whereCategoryId($categoryId)->get()->toArray();
        return $this->model->select(['id', 'name'])->whereHas('categories', function($query) use ($categoryId) {
            $query->whereCategoryId($categoryId);
        })->get()->toArray();
    }
}
