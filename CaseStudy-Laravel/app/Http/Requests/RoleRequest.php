<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
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
            'name'=>'required|min:2|max:30',
        ];
    }
    public function messages()
    {
        $messages = [
          'name.required'=>'trường này không được để trống.',
          'name.min'=>'phải có ít nhất 2 kí tự.',
            'name.max'=>'cho phép tối đa 30 kí tự',
        ];
        return $messages;
    }
}
