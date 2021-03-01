<?php
namespace App\Http\Controllers;

use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Http;

class BridgeController extends Controller
{
    public function requestLoginPage(Request $Request)
    {
        // 로그인 페이지 이동
        return redirect()->away(env('PASSPORT_AUTHSERVER_URI'));
    }
}
