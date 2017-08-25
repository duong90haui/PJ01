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
        return view('demo_view');
    });

Route::get('abc/{bien}', function ($bien) {
        return "ten bien la: $bien";
    });
        
