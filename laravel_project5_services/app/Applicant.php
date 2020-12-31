<?php

namespace App;
use App\Category;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
protected $primaryKey ="applicant_id";
    public function cat_relation(){
        return $this->hasMany("App\Category");
    }


    protected $fillable = [
        "applicant_name",
        "applicant_email"  ,
        "applicant_mobile" ,
        "applicant_city" ,
        "cat_id" ,
        "applicant_desc",
        "applicant_subscription_type" ,
            "applicant_image" ,
        "applicant_education_img" ,
    ];

}
