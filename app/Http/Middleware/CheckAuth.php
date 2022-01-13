<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);
        dump(Auth::user()->email);
        //dd($response);
//        if(Auth::guest()){
//            return redirect(route('login'));
//            //abort(404);
//        }
        return $response;
    }

    public function terminate($request, $response)
    {
        // ...
    }
}
