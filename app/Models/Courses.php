<?php

namespace App\Models;

use App\Models\User;
use App\Models\CourseModules;
use App\Models\UserCourseProggress;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $fillable = [
        'title',
        'description',
        'intro_video_url',
        'intro_img_url',
        'status',
        'nr_of_files',
        'duration',
        'created_by',
        'updated_by'
    ];

    public function createdBy(){
        return $this->belongsTo(User::class);
    }

    public function updatedBy(){
        return $this->belongsTo(User::class);
    }

    public function courseModules(){
        return $this->hasMany(CourseModules::class);
    }

    public function userCourseProggresses(){
        return $this->hasMany(UserCourseProggress::class);
    }
}
