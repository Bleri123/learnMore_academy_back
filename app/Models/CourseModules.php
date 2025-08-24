<?php

namespace App\Models;

use App\Models\Courses;
use App\Models\CourseSections;
use Illuminate\Database\Eloquent\Model;

class CourseModules extends Model
{
    protected $fillable = [
        'course_id',
        'title',
        'description',
        'duration',
        'nr_of_files'
    ];

    public function course(){
        return $this->belongsTo(Courses::class);
    }

    public function courseSections(){
        return $this->hasMany(CourseSections::class);
    }
}
