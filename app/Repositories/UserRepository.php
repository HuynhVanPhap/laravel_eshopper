<?php

namespace App\Repositories;

class UserRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function getModel()
    {
        return \App\Models\User::class;
    }
}
