<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CategoryStoreRequest extends FormRequest
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
            'name' => 'required|max:255',
            'img'  => 'required',
            'status'=> 'required|numeric'
        ];
    }
    public function messages() 
    {
        return [
            'name.required' => 'tên là bắt buộc',
            'name.max'  => 'tên ko được vượt quá 255 ký tự',
            'img.required' => 'hình ảnh là bắt buộc'
        ];
    }
}
