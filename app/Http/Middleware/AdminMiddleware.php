<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class AdminMiddleware
{

    /**
     * Handle an incoming request. User must be logged in to do admin check
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::user()->role == "admin")
        {
            return $next($request);
        }

        return redirect()->guest('/');
    }
}
