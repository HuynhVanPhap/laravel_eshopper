<?php

namespace App\Services;

use App\Services\BaseService;
use Illuminate\Support\Facades\Auth;
use Session;

class AuthService extends BaseService
{
    public function __construct() {}

    public function makeCredential ($email, $password) {
        return Auth::attempt([
            'email' => $email,
            'password' => $password
        ]);
    }

    public function hashPassword($user) {
        if (isset($user['password'])) {
            $user['password'] = Hash::make($user['password']);
        }

        return $user;
    }

    public function setMessageFailAuth() {
        Session::flash('fail', __('Login fail'));
        return;
    }
}
