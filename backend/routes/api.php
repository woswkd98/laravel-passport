<?php

use GuzzleHttp\Cookie\SetCookie;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// 언어 설정

Route::get('lang/{locate}', function ($locate) {

    if (!in_array($locate, ['en', 'kr'])) {
        abort(400);
    }
    App::setLocale($locate);
    Cookie::queue("locate", $locate);
    return response(['msg' => $locate], 200);
});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
