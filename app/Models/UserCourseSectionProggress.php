<?php

namespace App\Models;

use App\Models\User;
use App\Models\CourseSections;
use Illuminate\Database\Eloquent\Model;

class UserCourseSectionProggress extends Model
{
    protected $fillable = [
        'user_id',
        'course_section_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function courseSection(){
        return $this->belongsTo(CourseSections::class);
    }
}
