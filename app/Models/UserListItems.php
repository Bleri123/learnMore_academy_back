<?php

namespace App\Models;

use App\Models\User;
use App\Models\UserLists;
use Illuminate\Database\Eloquent\Model;

class UserListItems extends Model
{
    protected $fillable = [
        'list_id',
        'user_id'
    ];

    public function list(){
        return $this->belongsTo(UserLists::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}


