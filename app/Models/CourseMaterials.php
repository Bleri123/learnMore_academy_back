<?php

namespace App\Models;

use App\Models\User;
use App\Models\CourseSections;
use Illuminate\Database\Eloquent\Model;

class CourseMaterials extends Model
{
    protected $fillable = [
        'course_section_id',
        'title',
        'type',
        'content',
        'material_url',
        'sort_order',
        'created_by',
        'updated_by'
    ];

    public function courseSection(){
        return $this->belongsTo(CourseSections::class);
    }

    public function createdBy(){
        return $this->belongsTo(User::class);
    }

    public function updatedBy(){
        return $this->belongsTo(User::class);
    }
}
