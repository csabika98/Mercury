<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;




class AccessAdmin
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
        if (Auth::check() &&
        Auth::user()->hasAnyRole(['admin','editor'])) {
            return $next($request);
        }
        //echo "403 Forbidden! you have no access to the admin panel";
        return redirect('home');

    }
}
