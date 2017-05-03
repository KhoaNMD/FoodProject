<?php

namespace App\Http\Middleware;

use Redirect;
use Closure;
use Auth;

class AuthenUser
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
      if( !Auth::guard('admin')->check() ){
        return Redirect::route('front.home');
      }

        return $next($request);
    }
}
