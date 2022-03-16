<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;

class BaseService
{
    public function __construct() {}

    public function clearVerification(Request $request) {
        $data = $request->except([
            '_token',
            'password_verify'
        ]);

        return $data;
    }

    public function setMessage($params, $messages) {
        if (blank($params)) {
            Session::flash('fail', $messages.strtolower(__("Fail")));
        } else {
            Session::flash('success', $messages.strtolower(__("Success")));
        }

        return;
    }
}
