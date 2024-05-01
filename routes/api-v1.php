<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("/",function(){
    return response("Api V1 is working");
});

Route::post("/register",[RegisterController::class,'store'])->name("api.v1.register");

Route::apiResource('categories',CategoryController::class)->names('api.v1.categories');