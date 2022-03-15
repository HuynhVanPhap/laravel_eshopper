<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Services\UserService;
use App\Repositories\UserRepository;
use App\Http\Requests\Auth\Admin\RegisterValidation;

class AuthController extends Controller
{
    protected $userService;
    protected $userRepo;

    public function __construct(
        UserService $userService,
        UserRepository $userRepo
    ) {
        $this->userService = $userService;
        $this->userRepo = $userRepo;
    }

    public function getRegisterPage() {
        return view('admin.pages.auths.register');
    }

    public function handleRegister(RegisterValidation $request) {
        $newUser = $this->userService->clearVerification($request);
        $newUser = $this->userService->hashPassword($newUser);

        $this->userService->setMessage(
            $this->userRepo->create($newUser),
            __("Register")
        );

        return back();
    }
}
