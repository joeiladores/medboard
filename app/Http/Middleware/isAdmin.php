<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isAdmin
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

        if (Auth::check()) {

            if (Auth::user()->usertype === 'admin') {
                return $next($request);
            } elseif (Auth::user()->usertype === 'doctor') {
                return redirect()->route('admin')->with('error', 'you are not admin');
            } elseif (Auth::user()->usertype === 'nurse') {
                return redirect()->route('admin')->with('error', 'you are not admin');
            } elseif (Auth::user()->usertype === 'chiefnurse') {
                return redirect()->route('admin')->with('error', 'you are not admin');
            } else {
                return redirect()->route('home')->with('error', 'forbidden');
            }
        }
    }
}
