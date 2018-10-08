<?php

namespace App\Http\Middleware;

use Closure;
// use Illuminate\Support\Facades\Auth;
use Auth;

class AdminAuthenticated
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
        if(Auth::user()->role->name = 'customer')
        {   // redirect with flash session message
            return redirect('/home')->with('message','You are Not Allowed To Access!');
        }
        elseif(Auth::user()->role->name = 'admin')
        {   // redirect with flash session message
            return redirect('/admin');
        }
        return $next($request);
    }
}