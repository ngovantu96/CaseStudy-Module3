<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'name'=>'required|min:2',
            'phone'=>'required|numeric|min:10',
            'email'=>'required',
            'address'=>'required',
        ];
    }
    public function messages()
    {
        $messages = [
          'name.required'=>'tên không được để trống.',
            'name.min'=>'tên có ít nhất 2 kí tự.',
            'phone.required'=>'số điện thoại không được để trống.',
            'phone.min'=>'số điện thoại không hợp lệ.',
            'phone.numeric'=>'số điện thoại không hợp lệ.',
            'email.required'=>'email không được để trống',
            'address.required'=>'địa chỉ không được để trống.',
        ];
        return $messages;
    }
}
