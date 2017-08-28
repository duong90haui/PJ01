<?php

namespace App\Http\Controllers;

use App\dangky;
use Illuminate\Http\Request;
use Validator;
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
    public function them(Request $request)
    {
        $v= Validator::make($request->all(),
        [
            'txtMonHoc'=> 'required|unique:dangky_tb,monhoc',
            'txtGiaTien'=> 'required',
            'txtGiangVien'=> 'required'
        ],
        [
            'txtMonHoc.required'=> 'Vui long nhap ten mon hoc',
            'txtGiaTien.required'=> 'Vui long nhap gia tien',
            'txtGiangVien.required'=> 'Vui long nhap ten giang vien',
            'txtMonHoc.unique'=> 'Ten khoa hoc da ton tai'
        ]
        );
    if ($v->fails()) {
        return Redirect()->back()->withErrors($v->errors());
    }
        $bien= new dangky;
        $bien->monhoc=$request->txMonHoc;
        $bien->giatien=$request->txGiaTien;
        $bien->giangvien=$request->txGiangVien;
        $bien->save();
        return redirect('/form/dk');
     }
}
