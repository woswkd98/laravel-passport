<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
class CheckLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public static $locales = [
        'kr', 'en'
    ];

    public function handle(Request $request, Closure $next)
    {
        if(in_array($request->route('locale'), CheckLocale::$locales)) {
            App::setLocale($request->route('locale'));
        } else {
            App::setLocale('kr');
        }

        return $next($request);
    }
}
