<?php

namespace App;
use App\Category;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
       protected $primaryKey ="applicant_id";
//     public function cat_relation(){
//         return $this->hasMany("App\Category");
//     }


    protected $fillable = [
        'applicant_name', 'applicant_email', 'applicant_mobile','applicant_city',
        'cat_id','applicant_image','applicant_service','applicant_desc','applicant_education_img'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    // public function relation()
    // {
    //     return $this->hasMany('App\Category', 'applicant')
    // }
}
