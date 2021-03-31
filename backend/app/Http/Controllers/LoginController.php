<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use App\Models\User;
use Illuminate\Http\Client\ResponseSequence;
use Illuminate\Support\Facades\Response;

class LoginController extends Controller
{
    public function __construct()
    {

    }

    public function Login(Request $request) {

        $user = User::find(1);
        $accessToken = $user->createToken('auth')->accessToken;
        //$token = $user->createToken('My Token', ['place-orders'])->accessToken;
        return response([
            "msg" => "message",
            "code" => "code"
        ], 200)->header('Authorization', 'Bearer '.$accessToken);
    }

    public function Logout() {

    }

}
