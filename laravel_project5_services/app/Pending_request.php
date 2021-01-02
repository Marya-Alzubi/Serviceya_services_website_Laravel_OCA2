<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;

class Pending_request extends Model
{
    protected $guarded = [];
    protected $table = 'pending_requests';

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function applicants()
    {
        return $this->hasMany(Applicant::class);
    }

    public function rejecteds()
    {
        return $this->hasMany(Rejected::class);
    }
}
