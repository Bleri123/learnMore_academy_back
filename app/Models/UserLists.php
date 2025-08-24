<?php

namespace App\Models;

use App\Models\UserListItems;
use Illuminate\Database\Eloquent\Model;

class UserLists extends Model
{
    protected $fillable = [
        'list_name'
    ];

    public function listItems(){
        return $this->hasMany(UserListItems::class);
    }
}
