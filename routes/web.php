<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;
use App\Http\Requests\dangky_request;
use Illuminate\Foundation\Auth\RegistersUsers;

Route::get('/', function () {
    return view('welcome');
});

Route::get('abc', function () {
        $hoten="Duong";
        return view('demo_view',compact('hoten'));
    });

Route::get('abc/{bien}', function ($bien) {
        return "ten bien la: $bien";
    });
        
Route::get('khoahoc', function (){
    return "lẬP TRÌNH lAVAREL 5";
});
route::get('khoahoc/laptrinh',function(){
    return "KHÓA HỌC LẬP TRÌNH";
});
route::get('khoahoc/{mon}/{time}',function($mon,$time){
    return "kHÓA HỌC LẬP TRÌNH: $mon LÚC $time";
});

route::get ('form/layout',function() {
    return view('layout');
});
route::post('form/data',['as'=>'send',function (){
    return "OK";
}]);

route::get('form/dk',function(){
    return View('dangky');
    });
route::post('form/dk-thanh-vien',['as'=>'postDangky','uses'=>'DangkyController@them']);

route::get('reponse/basic',function()
{ 
    return ' Khóa học lập trình';
    
});
route::get('reponse/json',function(){
    $arr= array (
        'monhoc'=>'lavarel',
        'giangvien'=>'Mr dương',
        'thoigian'=> '2 tháng',
        );
        return Response::json($arr);
});
Route::get('repones/xml',function(){
    $content= '<?xml version ="1.0"endcoding="UTF-8" >
    <root>
    <trungtam> K
    ';
    return response($content,$stauts)->header('conten-Type','$value');
});

Route::get('register',function(){
    return view('Login.index');
});
/*Route::get('authen/login',['as'=>'getLogin','uses'=>'ThanhVienController@getLogin']);
Route::post('authen/login',['as'=>'postLogin','uses'=>'ThanhVienController@postLogin']);

*/
Route::get('authentication/getRegister',['as'=>'getRegister','uses'=>'Auth\RegisterController_new@getRegister']);
Route::post('authentication/postRegister',['as'=>'postRegister','uses'=>'Auth\RegisterController_new@postRegister']);
Route::get('authentication/getLogin',['as'=>'getLogin','uses'=>'Auth\LoginController_new@getLogin']);
Route::post('authentication/postLogin',['as'=>'postLogin','uses'=>'Auth\LoginController_new@postLogin']);



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
