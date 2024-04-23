<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function store(Request $request){

        $time = Carbon::now()->format("Y-m-d H:i:s");

        $request->validate(['name'=>'required|string|min:10',
        'email'=>'required|email|unique:users',
        'password'=>'required|string|min:8|confirmed']);

        $userToCreate =  $request->all();

        $userToCreate['created_at'] = $time;
        $userToCreate['updated_at'] = $time;
        

        $user = User::create($userToCreate);

        return response($user, 201);

    }
}
