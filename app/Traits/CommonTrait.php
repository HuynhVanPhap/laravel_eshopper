<?php

namespace App\Traits;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

trait CommonTrait
{
    public function setMessage($params, $messages) {
        if (
            blank($params) ||
            !$params
        ) {
            Session::flash('fail', $messages.' '.strtolower(__("Fail")));
        } else {
            Session::flash('success', $messages.' '.strtolower(__("Success")));
        }

        return;
    }

    public function clearVerification(Request $request) {
        $data = $request->except([
            '_token',
            'password_verify'
        ]);

        return $data;
    }
}
