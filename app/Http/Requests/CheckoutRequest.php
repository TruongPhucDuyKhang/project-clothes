<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
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
            'orders_name'     => 'required',
            'orders_city'     => 'required',
            'orders_district' => 'required',
            'orders_ward'     => 'required',
            'orders_andress'  => 'required',
            'orders_phone'    => 'required',
            'orders_email'    => 'required',
        ];
    }
    public function messages()
    {
        return [
            'orders_name.required'     => 'Họ và tên không được để trống',
            'orders_city.required'     => 'Thành phố không được để trống',
            'orders_district.required' => 'Quận/Huyện thoại không được để trống',
            'orders_ward.required'     => 'Phường không được để trống',
            'orders_andress.required'  => 'Địa chỉ không được để trống',
            'orders_phone.required'    => 'Số điện thoại không được để trống',
            'orders_email.required'    => 'E-MAIL không được để trống',
        ];
    }
}
