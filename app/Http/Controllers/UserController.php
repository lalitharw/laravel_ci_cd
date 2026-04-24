<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use GrahamCampbell\ResultType\Success;

class UserController extends Controller
{
    public function get(){
        $users = User::all();
        return response([
            "data" => [
                "users" => $users
            ],
            "success" => true
        ],200);

    }
}
