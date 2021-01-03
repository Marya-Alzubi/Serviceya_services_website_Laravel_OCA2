<?php

namespace App\Http\Requests;

use App\Rules\FullName;
use Illuminate\Foundation\Http\FormRequest;

class createPendingRequest extends FormRequest
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
            'pending_name'                =>['required' , new FullName()],
            "pending_email"               => "required|unique:pending_requests|email",
            "pending_mobile"              => "required |digits:10|numeric",
            "pending_city"                => "required ",
            'pending_image'               =>"required ",
//            'pending_image'               =>' mimes:jpeg,jpg,png,gif max:10000', // becouse of default image in controller the required validation will not be need
            "pending_desc"                => "required | min:20 | max:200",
            'pending_education_img'       =>' required ', // becouse of default image in controller the required validation will not be need
            "pending_subscription_type"   => "required",
        ];
    }
}
//| mimes:jpeg,jpg,png,gif max:10000
