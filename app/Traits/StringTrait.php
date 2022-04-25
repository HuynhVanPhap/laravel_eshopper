<?php

namespace App\Traits;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

trait StringTrait
{
    public function makeSlug($string) {
        return Str::slug($string);
    }

    public function codeShuffle($length)
    {
        $char = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        $input_length = strlen($char);
        $code = '';
        for($i = 0; $i < $length; $i++) {
            $random_character = $char[mt_rand(0, $input_length - 1)];
            $code .= $random_character;
        }

        return $code;
    }
}
