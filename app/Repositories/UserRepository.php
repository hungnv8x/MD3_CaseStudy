<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use phpDocumentor\Reflection\Types\This;

class UserRepository extends BaseRepository
{

    public function getModel()
    {
       return $this->model = User::class;
    }

    public function update($request)
    {
        $user = $this->getById($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role_id = $request->role;
        $user->save();
    }

    public function create($request)
    {
        $user = $request->only('name','email','password');
        $user['password']=Hash::make($user['password']);
        $this->model::create($user);
    }
    public function getByEmail($email)
    {
        return $this->model::where('email',$email)->first();
    }
}
