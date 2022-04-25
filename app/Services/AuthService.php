<?php

namespace App\Services;

use App\Services\BaseService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

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

    public function makeLogout(Request $request, $guard) {
        Auth::guard($guard)->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return;
    }
}
