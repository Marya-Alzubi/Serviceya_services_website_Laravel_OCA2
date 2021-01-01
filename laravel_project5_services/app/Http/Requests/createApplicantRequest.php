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
            'applicant_name'                =>['required' , new FullName()],
            'cat_desc'                      =>"required",
            "applicant_email"               => "required | email",
            "applicant_mobile"              => "required |digits:10|numeric",
            "applicant_city"                => "required ",
            'applicant_image'               =>' mimes:jpeg,jpg,png,gifmax:10000', // becouse of default image in controller the required validation will not be need
            "applicant_desc"                => "required | min:10 | max:200",
            'applicant_education_img'       =>' required | mimes:jpeg,jpg,png,gifmax:10000', // becouse of default image in controller the required validation will not be need
            "applicant_subscription_type"   => "required ",

        ];
    }
}
