<?php

namespace App\Http\Requests;
use Validator;
use Illuminate\Foundation\Http\FormRequest;
use App\User ;
class RegisterRequest extends FormRequest
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
            'name' => 'required|string|max:6',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ];
    }
    public function messages() {
        return [
            'name.required' => 'Vui lòng nhập username',
            'name.string' => 'Tên quá dài',
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'email không đúng định dạng',
            'email.unique' => 'User đã tồn tại',
            'password.required' => 'Chưa điền password',
            'password.min' => 'Password tối thiệu phải có 6 ký tự',
            'password.cònirmed' => 'mật khẩu không khớp',
        
        ];
    }
}
