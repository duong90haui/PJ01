<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class dangky_request extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'txtMonHoc'=> 'required|unique:dangky_tb,monhoc',
            'txtGiaTien'=> 'required',
            'txtGiangVien'=> 'required',
            /*'fImage'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'*/
        ];
    }
    public function messages (){
        return [
            'txtMonHoc.required'=> 'Vui long nhap ten mon hoc',
            'txtGiaTien.required'=> 'Vui long nhap gia tien',
            'txtGiangVien.required'=> 'Vui long nhap ten giang vien',
            'txtMonHoc.unique'=> 'Ten khoa hoc da ton tai',
            
        ];
    }
}
