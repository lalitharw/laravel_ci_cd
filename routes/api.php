<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::prefix("users")->controller(UserController::class)->group(function(){
    Route::get("/","get");
});