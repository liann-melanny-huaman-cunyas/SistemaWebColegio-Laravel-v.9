<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Competence extends Model
{
    use HasFactory;
/*
    public function area(){
        return $this->belongsTo(Area::class);
    }

    public function period(){
        return $this->BelongsToMany(Period::class);
    }

    */
}
