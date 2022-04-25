<?php

use Illuminate\Support\Facades\Hash;

trait AuthTrait
{
    public function hashPassword($password) {
        return Hash::make($password);
    }
}
