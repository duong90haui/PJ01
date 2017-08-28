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

Route::get('/', function () {
    return "alo";
});

Route::get('abc', function () {
        $hoten="Duong";
        return view('demo_view',compact('hoten'));
    });

Route::get('abc/{bien}', function ($bien) {
        return "ten bien la: $bien";
    });
        
Route::get('khoahoc', function (){
    return "l?p tr�nh lavarel 5";
});
route::get('khoahoc/laptrinh',function(){
    return "KH�A H?C L?P TR�NH";
});
route::get('khoahoc/{mon}/{time}',function($mon,$time){
    return "kh�a h?c l?p tr�nh: $mon l�c $time";
});

route::get ('form/layout',function() {
    return view('layout');
});
route::post('form/data',['as'=>'send',function (){
    return "OK";
}]);

route::get('dk',function(){
    return View('dangky');
});