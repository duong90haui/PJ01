<?php

namespace App\Http\Controllers;

use App\dangky;
use Illuminate\Http\Request;
use App\Http\Requests\dangky_request;
use Validator;
use Illuminate\Support\Facades\Storage;
class DangkyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\dangky  $dangky
     * @return \Illuminate\Http\Response
     */
    public function show(dangky $dangky)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\dangky  $dangky
     * @return \Illuminate\Http\Response
     */
    public function edit(dangky $dangky)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\dangky  $dangky
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dangky $dangky)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param  \App\dangky  $dangky
     * @return \Illuminate\Http\Response
     */
    public function destroy(dangky $dangky)
    {
        //
    }
    public function them(dangky_request $request)
    { 
        $img=$request->file('fImages');
        $des='public\upload';
        $img_name=$img->getClientOriginalName();
        
        
        $dangky= new dangky;
        $dangky->monhoc=$request->txtMonHoc;
        $dangky->giatien=$request->txtGiaTien;
        $dangky->giangvien=$request->txtGiangVien;
        $dangky->image=$img_name;
        $dangky->save();
        return redirect('/form/dk');
        
        
        
       /* echo "<pre>";
        print_r($request->file('fImages')) ;
        echo "size anh:" .$request->file('fImages')->getSize()."KB <br>";
        echo "ten anh:" .$request->file('fImages')->getClientOriginalName()." <br>";
        echo "duong dan anh:" .$request->file('fImages')->getRealPath()." <br>";
        echo "size anh:" .$request->file('fImages')->getMimeType()." <br>";
        echo "<pre>";
        $img=$request->file('fImages');
        $des='public\upload';
        $img_name=$img->getClientOriginalName();
        $img->move($des,$img_name);*/
     }
}
