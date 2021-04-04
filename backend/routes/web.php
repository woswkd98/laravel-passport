<?php


use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

use App\Http\Middleware\CheckLocale;
use App\Http\Controllers\UserController;



const LOCALE_PATH = '/{locale}';

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



Route::middleware([CheckLocale::class])->group(function () {



    Route::get(LOCALE_PATH, function () {
        return view('test3', [
            'res' => App::currentLocale()
        ]);
    });
    Route::get(LOCALE_PATH.'/test4', function () {
        return view('test4', [
            'res' => App::currentLocale()
        ]);
    });
    Route::post(LOCALE_PATH.'/login', 'App\Http\Controllers\LoginController@login')->name('login');
    Route::resource(LOCALE_PATH.'/users', 'App\Http\Controllers\UserController');
});
//Route::post('login', 'App\Http\Controllers\LoginController@login');
