<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function lecturer() {
        return $this->belongsTo('App\Lecturer');
        
    }
    
    public function student() {
        return $this->hasMany('App\Student');
    }
}
