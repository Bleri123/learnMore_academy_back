<?php

namespace App\Models;

use App\Models\User;
use App\Models\Courses;
use Illuminate\Database\Eloquent\Model;

class UserCourseProggress extends Model
{
    protected $fillable = [
        'user_id',
        'course_id',
        'completed_sections',
        'completed_sections_ids',
        'pending_sections',
        'completed_modules',
        'completed_modules_ids',
        'pending_modules',
        'awarded'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function course(){
        return $this->belongsTo(Courses::class);
    }
}
