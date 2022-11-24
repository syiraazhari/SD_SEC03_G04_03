<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRegister
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(is_null(auth()->user()->phone) && is_null(auth()->user()->ic) && is_null(auth()->user()->age) && is_null(auth()->user()->gender) && is_null(auth()->user()->state)){
            return redirect()->route('register2.create');
        }
        return $next($request);
    }
}
