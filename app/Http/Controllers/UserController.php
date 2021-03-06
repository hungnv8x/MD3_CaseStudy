<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use App\Services\RoleService;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public $userService;
    public $roleService;
    public function __construct(UserService $userService, RoleService $roleService)
    {
        $this->userService = $userService;
        $this->roleService = $roleService;
    }

    public function getAll()
    {
        $users = $this->userService->getAll();
        return view('backend.user.list',compact('users'));
    }

    public function edit($id)
    {
        $user = $this->userService->getById($id);
        $roles = $this->roleService->getAll();
        return view('backend.user.update',compact('user','roles'));
    }
    public function update(Request $request)
    {
        $this->userService->update($request);
        return redirect()->route('users.list');
    }
    public function deleteById($id)
    {
        $this->userService->deleteById($id);
        return redirect()->route('users.list');
    }

}
