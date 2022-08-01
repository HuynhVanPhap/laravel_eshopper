<?php

namespace App\Traits;

trait NumericTrait
{
    public function formatBackEndCurrency($str) {
        if (is_null($str)) {
            return 0;
        }

        $str = preg_replace("/([^0-9\\,-])/i", "", $str);
        return $str;
    }

    public function formatFrontEndCurrency($numeric, $currency = 'EU') {

    }
}
