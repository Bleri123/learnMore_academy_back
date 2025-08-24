<?php

namespace App\Models;

use App\Models\CourseModules;
use App\Models\CourseMaterials;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserCourseSectionProggress;

class CourseSections extends Model
{
    protected $fillable = [
        'module_id',
        'title',
        'description',
        'duration',
        'nr_of_files'
    ];

    public function courseModule(){
        return $this->belongsTo(CourseModules::class);
    }

    public function courseMaterials(){
        return $this->HasMany(CourseMaterials::class);
    }

    public function userCourseSectionProggresses(){
        return $this->HasMany(UserCourseSectionProggress::class);
    }
}
