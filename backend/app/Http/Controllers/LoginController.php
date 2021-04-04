<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\Client\ResponseSequence;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function __construct()
    {

    }

    public function Login(Request $request) {

        $user = User::find(1);




        $accessToken = $user->createToken('auth')->accessToken;

        $view = view('test5')
            ->with('a', 1)
            ->with('body', 3)
            ->with('input', $request->test)
            ->render();
        return response()
            ->json(['html'=>$view], 200, [
                'Authorization' => 'Bearer '.$accessToken
            ]);;
                //$token = $user->createToken('My Token', ['place-orders'])->accessToken;
        /*
        header('Authorization', 'Bearer '.$accessToken);
        return view('test5',[
            "msg" => "message",
            "code" => "code",
            "body" => [
                'user' => $user,
                'accessToekn' => $accessToken,
                'request_input' => $request->input
        ]], 200);*/
    }

    public function Logout(Request $request) {
        DB::table('users')->find(1);
    }

}
/* laravel html 넘겨주는 형식
 $view = view('test5')
            ->with('a', 1)
            ->with('body', 3)
            ->with('input', $request->test)
            ->render();
        return response()
            ->json(['html'=>$view], 200, [
                'Authorization' => 'Bearer '.$accessToken
            ]);;

*/
