<?php

namespace App\Http\Controllers\Auth;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Auth;

class LoginController_new extends Controller
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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function getLogin(){
        return view('auth.login_new');
    }
    public function postLogin(LoginRequest $request){
     
     if (Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
          
            echo Auth::user();
        } else {
            echo $request->email;
            echo $request->password;
            
        }
    }
    
}
