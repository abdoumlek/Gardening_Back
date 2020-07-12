<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function adminUsersList()
    {
        return User::join('roles', 'roles.id', '=', 'role_id')->select('roles.name as role', 'users.id', 'users.first_name', 'users.last_name', 'email')->get();
    }

    public function getUserById(User $user)
    {
        return User::select('first_name', 'last_name', 'email')->where('id', $user->id)->first();
    }

    public function createUser(Request $request)
    {
        $user = User::create([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'role_id' => 21,
            'password' => bcrypt($request['password'])
        ]);
        return response()->json("user created", 201);
    }

    public function update(Request $request, User $user)
    {
        $user->update($request->all());
        return response()->json($user, 200);
    }

    public function delete(Request $request, User $user)
    {
        $user->delete();
        return response()->json(null, 204);
    }
}
