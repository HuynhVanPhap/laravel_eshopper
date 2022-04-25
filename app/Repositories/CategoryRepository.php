<?php

namespace App\Repositories;

class CategoryRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function getModel()
    {
        return \App\Models\Category::class;
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
}
