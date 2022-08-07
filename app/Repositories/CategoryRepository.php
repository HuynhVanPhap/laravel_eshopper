<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\Models\Category;

class CategoryRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function getModel()
    {
        return Category::class;
    }

    public function search($params) {
        $data = $this->model->select();

        if (isset($params['name_search'])) {
            $data->whereName($params['name_search']);
        }

        if (isset($params['display_search'])) {
            $data->whereDisplay($params['display_search']);
        }

        return $data->orderBy('id', 'DESC')
                    ->paginate(parent::LIMIT);
    }

    public function storeManyToMany($categoryParams = [], $brands = []) {
        DB::beginTransaction();

        try {
            $category = $this->model->create($categoryParams);
            $category->brands()->sync($brands);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return $e;
        }
    }

    public function updateCategory(Category $category, $categoryParams = [], $brands = []) {
        DB::beginTransaction();

        try {
            $category->update($categoryParams);
            $category->brands()->sync($brands);

            DB::commit();

            return 1;
        } catch (\Exception $e) {
            DB::rollBack();
            return $e;
        }
    }
}
