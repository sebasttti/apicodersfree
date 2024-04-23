<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function store(Request $request){

        $request->validate(['name'=>'required|string|min:10',
        'email'=>'required|email|unique:users',
        'password'=>'required|string|min:8|confirmed']);

        $user = User::create($request->all());

        return response($user, 201);

    }
}
