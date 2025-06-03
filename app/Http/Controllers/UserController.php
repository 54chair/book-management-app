<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        $user = User::query()->get()->last();
        return view('user.create', compact('user'));
    }

    public function register(Request $request)
    {
        User::query()->insert([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);
        return redirect('/user/create');
    }
}
