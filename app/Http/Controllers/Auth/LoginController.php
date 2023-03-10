<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {   
        $input = $request->all();
     
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
     
        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {

            if(auth()->user()->status == 'active') {
                if (auth()->user()->usertype == 'doctor') {
                    return redirect()->route('doctorHome');
                }else if (auth()->user()->usertype == 'nurse') {
                    return redirect()->route('nurseHome');
                }else if (auth()->user()->usertype == 'chiefnurse') {
                    return redirect()->route('nurseHome');
                }else{
                    return redirect()->route('adminHome');
                }
            }
            else {
                return redirect()->route('login')->with('error', 'You account is inactive, Please contact the administrator.');
            }
            
        }else{
            return redirect()->route('login')
                ->with('error','These credentials do not match our records.');
        }
          
    }
}
