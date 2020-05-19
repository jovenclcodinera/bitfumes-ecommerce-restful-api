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
            'name'=>'required|string|unique:products|max:255',
            'description'=>'required',
            'price'=>'required|digits_between:1,10',
            'stock'=>'required|digits_between:1,6',
            'discount'=>'required|digits_between:1,2',
        ];
    }
}
