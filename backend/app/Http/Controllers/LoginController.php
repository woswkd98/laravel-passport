<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\Client\ResponseSequence;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function __construct()
    {

    }

    public function Login(Request $request) {

        //Log::alert('1111', ['tmep' => Auth()->user() ] );
  

        $user = User::find(1);

        $accessToken = $user->createToken('auth')->accessToken;
        Cookie::queue('access',  $accessToken, 60 * 60 * 1);
        $view = view('test5')
            ->with('a', 1)
            ->with('body', 3)
            ->with('input', $accessToken)
            ->render();
        return response()
            ->json(['html'=>$view], 200, [
                'Authorization' => 'Bearer '.$accessToken
            ]);
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
        $cookie = Cookie::forget('access');
        Cookie::queue($cookie);
    }

    public function test() {
        return Auth()->user();
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
