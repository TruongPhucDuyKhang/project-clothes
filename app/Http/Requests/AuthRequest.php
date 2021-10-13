<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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
            'fullname' => 'required|min:2',
            'password' => 'required|min:7',
            'email'    => 'required|email',
            'birthday' => 'required',
            'phone'    => 'required|min:10',
        ];
    }
    public function messages()
    {
        return [
            'fullname.required' => 'Họ tên không được để trống',
            'fullname.min'      => 'Họ tên tối thiểu là 2 ký tự',
            'password.required' => 'Password không được để trống',
            'password.min'      => 'Password tối thiểu là 7 ký tự',
            'email.required'    => 'E-MAIL không được để trống',
            'email.email'       => 'E-MAIL không hợp lệ',
            'phone.required'    => 'Số điện thoại không được để trống',
            'phone.min'         => 'Số điện thoại tối thiểu là 10 số',
            'birthday.required' => 'Bạn vui lòng nhập ngày tháng năm sinh của bạn',
        ];
    }
}
