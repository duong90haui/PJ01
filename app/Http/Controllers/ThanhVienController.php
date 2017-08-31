<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ThanhVienRequest;
class ThanhVienController extends Controller
{
    public function getLogin() {
        return view('Login.index');
    }
    public function postLogin(ThanhVienRequest $request){
        
    }
}
