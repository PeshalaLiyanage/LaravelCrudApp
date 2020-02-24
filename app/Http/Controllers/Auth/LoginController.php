<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
}

//
//namespace App\Http\Controllers\Auth;
//
//use App\Http\Controllers\Controller;
//use App\Providers\RouteServiceProvider;
//use Illuminate\Http\Request;
//use Illuminate\Foundation\Auth\AuthenticatesUsers;
//
//class LoginController extends Controller
//{
//
//        public function __construct()
//    {
//        $this->middleware('guest')->except('logout');
//    }
//    /**
//     * Handle an authentication attempt.
//     *
//     * @param \Illuminate\Http\Request $request
//     *
//     * @return \Illuminate\Http\RedirectResponse
//     */
//    public function authenticate(Request $request)
//    {
//        $credentials = $request->only('email', 'password');
//
////        if (Auth::attempt($credentials)) {
////            // Authentication passed...
////            return redirect()->intended('dashboard');
////        }
//        if (Auth::attempt(['email' => $email, 'password' => $password, 'active' => 1])) {
//            // The user is active, not suspended, and exists.
//            return redirect()->intended('home');
//        }
//    }
//}
