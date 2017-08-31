<?php

namespace App\Http\Controllers\Auth;
use App\Http\Requests\RegisterRequest;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Controllers\Auth;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Hash;

class RegisterController_new extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

   
    
/** Mau register()*/
    
    public function getRegister(){
        return view('auth.register_new');
    } 
    public function postRegister(RegisterRequest $request){
        $thanhvien= new User ;
        $thanhvien->name= $request->name;
        $thanhvien->email=$request->email;
        $thanhvien->password=Hash::make($request->password);
        $thanhvien->remember_token=$request->_token;
        $thanhvien->save();
        return redirect('authentication/getRegister');
    }  
    
}
   