<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Courses;
use App\Models\UserInfo;
use App\Models\Scoreboards;
use App\Models\UserListItems;
use App\Models\CourseMaterials;
use App\Models\UserCourseProggress;
use Illuminate\Notifications\Notifiable;
use App\Models\UserCourseSectionProggress;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'image',
        'date_of_birth',
        'email',
        'academic_year',
        'acc_status',
        'profile_completed',
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function userInfo(){
        return $this->hasOne(UserInfo::class);
    }

    public function listItems(){
        return $this->hasMany(UserListItems::class);
    }

    public function scoreboards(){
        return $this->hasMany(Scoreboards::class);
    }

    public function createdCourses(){
        return $this->hasMany(Courses::class);
    }

    public function updatedCourses(){
        return $this->hasMany(Courses::class);
    }

    public function createdCourseMaterials(){
        return $this->hasMany(CourseMaterials::class);
    }

    public function updatedCourseMaterials(){
        return $this->hasMany(CourseMaterials::class);
    }

    public function userCourseSectionProggresses(){
        return $this->hasMany(UserCourseSectionProggress::class);
    }

    public function userCourseProggresses(){
        return $this->hasMany(UserCourseProggress::class);
    }
}
