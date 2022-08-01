<?php

namespace App\Repositories;

class ProductRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function getModel()
    {
        return \App\Models\Product::class;
    }
}
