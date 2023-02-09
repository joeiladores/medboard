<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
// use Illuminate\Support\Facades\Auth;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $userType)
    {
        if(auth()->user()->usertype != $userType){
            throw new UnauthorizedHttpException('Unauthorized');
        }

        try {
            return $next($request);
        } catch (UnauthorizedHttpException $e) {
            return response()->view('errors.401', [], 401);
        }
          
        // return response()->json(['You do not have permission to access for this page.']);        
        // return response()->view('errors.401'); 
        
    }
}
