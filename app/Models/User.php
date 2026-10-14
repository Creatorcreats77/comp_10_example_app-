<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $guarded = ['id'];
    
    // protected $fillable = ['name', 'email', 'skill', 'skill_wanted'];
}
