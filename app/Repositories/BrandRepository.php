<?php

namespace App\Repositories;

class BrandRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function getModel()
    {
        return \App\Models\Brand::class;
    }
}
