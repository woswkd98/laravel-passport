<?php

use GuzzleHttp\Middleware;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth', 'second'])->group(function () {

});


Route::get('index/test', function() {


    return view('index', [
        'res' => Session::get("locate")
    ]);
});

Route::get('index/2', function() {

    return view('test3', [
        'res' => App::currentLocale()
    ]);
});

