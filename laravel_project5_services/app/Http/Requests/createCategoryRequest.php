<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createCategoryRequest extends FormRequest
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
        'cat_name'    =>"required | unique:categories|min:3| max:30",
        'cat_desc'    =>"required | min:20 | max:200 ",
        'cat_image'   =>'required ', // becouse of default image in controller the required validation will not be need
    ];
//    mimes:jpeg,jpg,png max:10000
}
}
