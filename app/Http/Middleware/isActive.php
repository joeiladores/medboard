<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isActive
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
        // if ($request->user() && $request->user()->status === 'inactive') {
        //     return redirect()->route('login')->with('error', 'Your account is inactive. Please contact your administrator');
        // }
    
        // return $next($request);

        if (Auth::check()) {
            if (Auth::user()->status === 'active') {
                return $next($request);
            } else {
                return redirect()->route('login')->with('error', 'Your account is not active. Please contact an admin');
            }
        }
    }
}
