<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class checkUserSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(isset(Auth::user()->email)){
            return redirect('/user/dashboard');
        }
        return $next($request);
    }
}
