<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
/*
    public function role(){
        return $this->belongsToMany(Role::class);
    }

    public function area(){
        return $this->belongsTo(Area::class);
    }

    public function course(){
        return $this->belongsTo(Course::class);
    }
    */
}
