<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email'=> 'required',
            'password'=>'required'
        ];
    }
    public function messages() {
        return [
            
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'email không đúng định dạng',
            'email.unique' => 'User đã tồn tại',
            'password.required' => 'Chưa điền password',
            'password.min' => 'Password tối thiệu phải có 6 ký tự',
            'password.cònirmed' => 'mật khẩu không khớp',
        
        ];
}
}