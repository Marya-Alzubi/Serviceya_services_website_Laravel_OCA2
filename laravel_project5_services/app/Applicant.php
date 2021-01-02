<?php

namespace App;
use App\Category;

use Illuminate\Database\Eloquent\Model;
//\Illuminate\Database\Eloquent\Relations\BelongsTo;
class Applicant extends Model
{
protected $primaryKey ="applicant_id";


    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function pendingrequest()
    {
        return $this->belongsTo(Pending_request::class);
    }

    protected $guarded = [];
//    protected $fillable = [
//        "applicant_name",
//        "applicant_email"  ,
//        "applicant_mobile" ,
//        "applicant_city" ,
//        "category_id" ,
//        "applicant_image" ,
//        "applicant_desc",
//        "applicant_subscription_type" ,
//        "applicant_education_img" ,
//    ];



}
