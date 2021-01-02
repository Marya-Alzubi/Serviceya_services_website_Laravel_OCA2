<?php

namespace App\Http\Requests;

use App\Rules\FullName;
use Illuminate\Foundation\Http\FormRequest;

class createApplicantRequest extends FormRequest
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
        "pending_email"               => "required|unique:applicants|email",
        "pending_mobile"              => "required |digits:10|numeric",
        "pending_city"                => "required ",
        'pending_image'               =>' mimes:jpeg,jpg,png,gif max:10000', // becouse of default image in controller the required validation will not be need
        "pending_desc"                => "required | min:20 | max:200",
        'pending_education_img'       =>' required | mimes:jpeg,jpg,png,gif max:10000', // becouse of default image in controller the required validation will not be need
        "pending_subscription_type"   => "required",
    ];
}

}
