<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function showFormLogin()
    {
        return view('backend.auth.login');
    }

    public function login(Request $request)
    {
        if ($this->userService->login($request)){
            return redirect()->route('dashboard');
        }else{
            return redirect()->route('showLogin');
        }
    }

    public function logout()
    {
        Auth::logout();
        session()->remove('user');
        return redirect()->route('showLogin');

    }

    public function showFormRegister()
    {
        return view('backend.auth.register');
    }

    public function register(Request $request)
    {
        $this->userService->create($request);
        return redirect()->route('showLogin');
    }
}
