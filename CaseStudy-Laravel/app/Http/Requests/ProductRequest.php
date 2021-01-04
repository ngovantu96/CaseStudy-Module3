<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'costPrice'=>'required|min:1|numeric',
            'price'=>'required|min:1|numeric',
            'quantity'=>'required|min:1|numeric',
            'image_product'=>'mimes:jpeg,jpg,png|required|max:10000',
            'image_detail'=>'mimes:jpeg,jpg,png|max:10000',
            'size'=>'numeric',
        ];
    }
    public function messages(){
        $messages = [
            'name.required'=>'trường này không được để trống.',
            'name.min'=>'tối thiếu 2 kí tự.',
            'costPrice.required'=>'trường này khôngđược để trống.',
            'costPrice.min'=>'giá không hợp lệ',
            'costPrice.numeric'=>'vui lòng nhập số',
            'price.required'=>'trường này khôngđược để trống.',
            'price.min'=>'giá không hợp lệ',
            'price.numeric'=>'vui lòng nhập số',
            'quantity.required'=>'trường này không được đẻ trống.',
            'quantity.min'=>'số lượng không hợp lệ',
            'quantity.numeric'=>'số lượng không hợp lệ',
            'image_product.required'=>'bạn chưa tải ảnh lên.',
            'image_product.mimes'=>'ảnh phải có đuôi là jpeg,jpg,png.',
            'image_product.max'=>'kích thước tối đa là 10000kb.',
            'image_detail.mimes'=>'ảnh phải có đuôi là jpeg,jpg,png.',
            'image_detail.max'=>'kích thước tối đa là 10000kb.',
            'size.numeric'=>'vui lòng nhập số',
        ];
        return $messages;
    }
}
