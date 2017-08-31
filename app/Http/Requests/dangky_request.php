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
            'fImages'=>'required|image|max:2048'
            /*
            |mimes:jpeg,png,jpg,gif,svg
            */
        ];
    }
    public function messages (){
        return [
            'txtMonHoc.required'=> 'Vui lòng nhập tên môn học',
            'txtGiaTien.required'=> 'Vui lòng nhập giá tiền',
            'txtGiangVien.required'=> 'Vui lòng nhập tên giảng viên',
            'txtMonHoc.unique'=> 'Tên khóa học đã tồn tại',
            'fImages.required'=> 'Chọn ảnh',
            'fImages.image'=> 'Sai định dạng',
            'fImages.max'=> 'Ảnh có kích thước quá lớn'
        ];
    }
}
