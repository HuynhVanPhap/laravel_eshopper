<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Services\AuthService;
use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use App\Http\Requests\Auth\Admin\RegisterValidation;
use App\Http\Requests\Auth\Admin\LoginValidation;

class AuthController extends Controller
{
    protected $authService;
    protected $userRepo;

    public function __construct(
        AuthService $authService,
        UserRepository $userRepo
    ) {
        $this->authService = $authService;
        $this->userRepo = $userRepo;
    }

    public function getRegisterPage() {
        return view('admin.pages.auths.register');
    }

    public function handleRegister(RegisterValidation $request) {
        $newUser = $this->authService->clearVerification($request);
        $newUser = $this->authService->hashPassword($newUser);

        $this->authService->setMessage(
            $this->userRepo->create($newUser),
            __("Register")
        );

        return redirect()->route('get.admin.login.page');
    }

    public function getLoginPage() {
        return view('admin.pages.auths.login');
    }

    public function handleLogin(LoginValidation $request) {
        if ($this->authService->makeCredential($request->email, $request->password)) {
            return redirect()->route('get.admin.dashboard.page');
        }

        $this->authService->setMessageFailAuth();

        return back();
    }

    public function handleLogOut(Request $request) {
        $this->authService->makeLogout($request, 'admin');

        return redirect()->route('get.admin.login.page');
    }
}
